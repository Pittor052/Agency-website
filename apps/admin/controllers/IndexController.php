<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:49
 */

namespace Bolar\Admin\Controllers;


use Bolar\Admin\Controllers\ControllerBase;
use Bolar\Frontend\Models\Contact;
use Bolar\Frontend\Models\Gallery;
use Bolar\Frontend\Models\Products;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $id = null;
        $contactModel = Contact::find();
        $galleryModel = Gallery::find(array_change_key_case("id ='$id'"));

        $this->view->setVar('gallery', $galleryModel);
        $this->view->setVar('contactList', $contactModel);

    }

    public function listContactsAction()
    {


//        var_dump($contactModel);exit;
//        echo  $contactModel->name;
//        var_dump($this);exit;
//        $this->view->setVar("email",$contactModel ->getEmail());
//        $this->view->setVar("topic", $contactModel -> getTopic());
//        $this->view->setVar("msg", $contactModel -> getMsg());
    }

    public function createProductAction()
    {
        $this->view->disable();
        if ($this->request->hasFiles(true) == false) {
            $this->getDi()->getFlashSession()->error('Please select an image');
            return $this->response->redirect('/admin');

        }

        if ($this->request->isPost()) {
            $productsModel = new Products();
            $productsModel
                ->setName($this->request->getPost()['name'])
                ->setCat($this->request->getPost()['category'])
                ->setDescription($this->request->getPost()['description'])
                ->setPrice($this->request->getPost()['price']);
            if (!$productsModel->save()) {
                $productsModel->setErr();
            }
            $this->uploadToGallery($productsModel);
        }

        $this->view->setVar('flash', $this->flash);
        return $this->response->redirect('/admin');
    }

    public function uploadAction()
    {
        $this->view->disable();
        if ($this->request->hasFiles(true) == false) {
            $this->getDi()->getFlashSession()->error("Please select image, category and try again!");
            $this->view->setVar('flash', $this->flash);
            return $this->response->redirect('/admin');
        }

        if ($this->request->isPost()) {
            $this->uploadToGallery();
        }
        return $this->response->redirect('/admin');
    }

    public function galleryAction($catId = null, $picId = null)
    {

        if (empty($catId) && empty($picId)) {
            //case one
            $gallery = Gallery::find();

        } elseif (!empty($catId) && empty($picId)) {
            //case 2
            $gallery = Gallery::find(array("cat_id = '$catId'"));
//            var_dump(array("id = '$catId' AND id = '$picId'"));
        } elseif (!empty($catId) && !empty($picId)) {
            //case 3
            $gallery = Gallery::findFirst(array("cat_id = '$catId' AND id = '$picId'"));
        }

        //sanitize url and check for valid match

        if ($gallery) {
            echo json_encode($gallery->toArray());
            exit;
        }
        echo json_encode(array('status' => 'not found'));
        exit;
    }

    /**
     * @param $productsModel
     */
    protected function uploadToGallery($productsModel = null)
    {

        $folder = $this->request->getPost()['category'];
        if (!is_dir(__DIR__ . '/../../../public/img/products/' . $folder . '/')) {
            mkdir(__DIR__ . '/../../../public/img/products/' . $folder . '/', 0777);
        }

        foreach ($this->request->getUploadedFiles() as $file) {

            $galleryFileName = time() . '_' . $file->getName();
            $fullPath = __DIR__ . '/../../../public/img/products/' . $folder . '/' . $galleryFileName;
            $file->moveTo($fullPath);
            $image = new \Phalcon\Image\Adapter\GD($fullPath);
            $image->crop(400, 400);
            if (!$image->save()) {
                var_dump($image);
                exit;
            }
        }
        $data = array(
            'name' => $galleryFileName,
            'cat_id' => $this->request->getPost()['category'],
        );
        if ($productsModel) {
            $data['product_id'] = $productsModel->getId();
        }
        //Insert record at gallery model from post rq
        $galleryModel = new Gallery();
        if (!$galleryModel->save($data)) {
            $galleryModel->setErr();
            $this->view->setVar('flash', $this->flash);
        } else {
            $this->getDi()->getFlashSession()->success("Done!");
        }
    }


}