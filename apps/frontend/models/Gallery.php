<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:38
 */

namespace Bolar\Frontend\Models;

use Phalcon\Mvc\Model\Validator\PresenceOf;
use Bolar\Frontend\Models\BaseModel;

class Gallery extends BaseModel
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $cat_id;

    /**
     * @var integer
     */
    protected $product_id;

    /**
     *
     */
    public function initialize()
    {
        // $this->validation();
        $this->belongsTo('id', 'Bolar\Frontend\Models\ContentManager', 'image_id', array('alias' => 'contentManager'));
        $this->belongsTo('cat_id', 'Bolar\Frontend\Models\GalleryCat', 'id', array('alias' => 'category'));
        $this->belongsTo('product_id', 'Bolar\Frontend\Models\Products', 'id', array('alias' => 'product'));
        $this->setup(
            array('notNullValidations' => false)
        );
    }


    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(new PresenceOf(array(
            'field' => 'name',
            'message' => "Please select and image!"
        )));


//        $this->validate(new PresenceOf(
//            array(
//                "field" => "cat_id",
//                "message" => "Please select an category!"
//            )
//        ));

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $folder = $this->getDi()->getRequest()->getPost()['category'];
        if (empty($folder)) {
            $folder = $name;
        }

        if (!strstr($folder, '/img/products/')) {
            $this->name = $folder . '/' . $name;
        } else {
            $this->name = $name;
        }
        return $this;
    }

    /**
     * Method to set the value of field cat_id
     *
     * @param integer $cat_id
     * @return $this
     */
    public function setCatId($cat_id)
    {
        $this->cat_id = $cat_id;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field cat_id
     *
     * @return integer
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    public function getSource()
    {
        return 'gallery';
    }
}
