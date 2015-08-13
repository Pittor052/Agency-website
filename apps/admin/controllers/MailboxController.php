<?php
/**
 * Created by PhpStorm.
 * User-: lazaroff
 * Date: 15-7-29
 * Time: 16:49
 */

namespace Bolar\Admin\Controllers;

require_once __DIR__ . "/../../../vendor/swiftmailer/swiftmailer/lib/swift_required.php";


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

    public function connectAction()
    {

    }

    public function getMailBoxAction()
    {

    }

    public function sendAction()
    {
        $transport = \Swift_SmtpTransport::newInstance('', 465, '')
            ->setUsername('')
            ->setPassword('');

        $mailer = \Swift_Mailer::newInstance($transport);

        $message = \Swift_Message::newInstance('Wonderful Subject')
            ->setFrom(array('karboratorr@gmail.com' => 'Nikolay Yotsov'))
            ->setTo(array('lazar_off@yahoo.com'))
            ->setBody('Here is the message itself');
        $result = $mailer->send($message);
        var_dump($result);
        exit;
    }
}