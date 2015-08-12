<?php
/**
 * Created by PhpStorm.
 * User-: lazaroff
 * Date: 15-7-29
 * Time: 16:49
 */

namespace Bolar\Admin\Controllers;


use Bolar\Admin\Controllers\ControllerBase;
use Bolar\Frontend\Models\Contact;

class MailboxController extends ControllerBase
{
    public function indexAction($id = null)
    {
        if ($id) {
            $contactModel = Contact::findFirst("id = '$id'");
        } else {
            $contactModel = Contact::find();
        }
        $this->view->setVar('contactList', $contactModel);
    }

    public function readMailAction($id = null)
    {

        $contact = Contact::findFirst("id = '$id'");
        $this->view->setVar('contactList', $contact);

    }

    public function deleteContactAction($id)
    {
        $contacts = Contact::findFirst("id = '$id'");
        if (!$contacts) {
            return $this->flashSession->error('Something went wrong, please try again!');
        }
        if (!$contacts->delete()) {

        }
        $this->flashSession->success('Contact message is deleted !');
        return $this->response->redirect('/admin/mailbox');
    }
}