<?php
/**
 * Created by PhpStorm.
 * User-: lazaroff
 * Date: 15-7-29
 * Time: 16:49
 */

namespace Bolar\Admin\Controllers;

require_once __DIR__ . "/../../../vendor/swiftmailer/swiftmailer/lib/swift_required.php";
require_once __DIR__ . "/../../../vendor/tedivm/fetch/src/Fetch/Server.php";
require_once __DIR__ . "/../../../vendor/tedivm/fetch/src/Fetch/Message.php";
require_once __DIR__ . "/../../../vendor/tedivm/fetch/src/Fetch/Attachment.php";


use Bolar\Admin\Controllers\ControllerBase;
use Bolar\Frontend\Models\Contact;
use Bolar\Frontend\Models\Mailer;

class MailboxController extends ControllerBase
{

    public function indexAction($id = null)
    {
        $this->setMailer();
        $mailServer = $this->getMailer();
        if (!$mailServer) {
            return $this->response->redirect('/admin/mailbox/connect');
        }

        if ($id) {
            $messages = $mailServer->getMessageByUid($id);
        } else {
            $messages = $mailServer->getOrderedMessages(1, 1, 10);
        }
        $this->view->setVar('contactList', $messages);
    }

    public function unseenMessagesAction()
    {
        $this->view->disable();
        $maileServer = $this->loadMailer();
        if ($maileServer) {
            $messages = $maileServer->search('UNSEEN', 10);
            if ($messages) {
                echo json_encode(array('status' => 'new', 'count' => count($messages)));
                exit;
            }
            echo json_encode(array('status' => 'clear'));
            exit;
        }
        echo json_encode(array('status' => 'email not connected'));
        exit;
    }

    public function readMailAction($id = null)
    {
        $contact = Contact::findFirst("id = '$id'");
        $this->view->setVar('contactList', $contact);
    }

    public function composeAction()
    {

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
        if ($this->request->isPost()) {
            $mailerModel = new Mailer();
            if (!$mailerModel->save($this->request->getPost())) {
                $mailerModel->setErr();
            }
            return $this->response->redirect('/admin/mailbox');
        }
    }
    
    public function sendAction()
    {
        $username = null;
        $smpt = null;
        $password = null;
        $email = null;
        $sendTo = null;
        $body = null;

        $transport = \Swift_SmtpTransport::newInstance($smpt, 465, 'ssl')
            ->setUsername($username)
            ->setPassword($password);

        $mailer = \Swift_Mailer::newInstance($transport);

        $message = \Swift_Message::newInstance('Wonderful Subject')
            ->setFrom(array($email => $username))
            ->setTo(array($sendTo))
            ->setBody($body);
        $result = $mailer->send($message);
        var_dump($result);
        exit;
    }
}