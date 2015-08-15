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
use Bolar\Frontend\Models\Posts;

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
        $mailerModel = Mailer::findFirst("user_id = '1'");
        if (!$mailerModel || !$this->request->isPost()) {
            $this->flashSession->error('Not connected email!');
            $this->view->setVar('flash', $this->flash);
            return $this->response->redirect('/admin/mailbox');
        }

        if (empty($this->request->getPost()['email']) || empty($this->request->getPost()['sendTo']) || empty($this->request->getPost()['body'])) {
            $this->flashSession->error('Wrong params was given !');
            $this->view->setVar('flash', $this->flash);
            return $this->response->redirect('/admin/mailbox/compose');
        }
        $username = $mailerModel->getUsername();
        $smtp = $mailerModel->getSmtp();
        $smtpPort = $mailerModel->getSmtpPort();
        $password = $mailerModel->getPassword();
        $email = $this->request->getPost()['email'];
        $sendTo = $this->request->getPost()['sendTo'];
        $body = $this->request->getPost()['body'];
        $subject = $this->request->getPost()['subject'];

        $transport = \Swift_SmtpTransport::newInstance($smtp, $smtpPort, 'ssl')
            ->setUsername($username)
            ->setPassword($password);

        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Wonderful Subject')
            ->setFrom(array($email => $username))
            ->setTo(array($sendTo))
            ->setSubject($subject)
            ->setBody($body);
//        var_dump($email, $sendTo, $subject, $body, $smtp, $smtpPort, $username, $password);
//        exit;
        $result = $mailer->send($message);
        if ($result == 1) {
            $this->flashSession->error('Successfully send !');
        } else {
            $this->flashSession->error('Error, try again!');
        }
        $this->view->setVar('flash', $this->flash);
        return $this->response->redirect('/admin/mailbox/compose');
    }
}