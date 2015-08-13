<?php
/**
 * Created by PhpStorm.
 * User: nikolay
 * Date: 13.08.15
 * Time: 17:59
 */

namespace Bolar\Frontend\Models;


class Mailer extends BaseModel
{
    protected $id;
    protected $username;
    protected $password;
    protected $imap;
    protected $imap_port;
    protected $smtp;
    protected $smtp_port;
    protected $smtp_encryption;
    protected $user_id;

    public function beforeValidation()
    {
        if (empty($this->smtp_encryption)) {
            $this->smtp_encryption = 'ssl';
        }

        $this->user_id = 1;
    }

    public function validation()
    {
        $this->validate(new \Phalcon\Mvc\Model\Validator\PresenceOf(
            array(
                'field' => 'username',
                'message' => "Username is required"
            )
        ));

        $this->validate(new \Phalcon\Mvc\Model\Validator\PresenceOf(
            array(
                "field" => "password",
                "message" => "Password is required"
            )
        ));

        $this->validate(new \Phalcon\Mvc\Model\Validator\PresenceOf(
            array(
                "field" => "imap",
                "message" => "Imap address is required. Example: imap.gmail.com"
            )
        ));

        $this->validate(new \Phalcon\Mvc\Model\Validator\PresenceOf(
            array(
                "field" => "imap_port",
                "message" => "Imap port address is required. Example: 993"
            )
        ));

        $this->validate(new \Phalcon\Mvc\Model\Validator\PresenceOf(
            array(
                "field" => "smtp",
                "message" => "Smtp address is required. Example: smtp.gmail.com"
            )
        ));

        $this->validate(new \Phalcon\Mvc\Model\Validator\PresenceOf(
            array(
                "field" => "smtp_port",
                "message" => "Smtp address is required. Example: 465"
            )
        ));

        if ($this->validationHasFailed() == true) {
            return false;
        }
        return true;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImap()
    {
        return $this->imap;
    }

    /**
     * @param mixed $imap
     */
    public function setImap($imap)
    {
        $this->imap = $imap;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImapPort()
    {
        return $this->imap_port;
    }

    /**
     * @param mixed $imap_port
     */
    public function setImapPort($imap_port)
    {
        $this->imap_port = $imap_port;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSmtp()
    {
        return $this->smtp;
    }

    /**
     * @param mixed $smtp
     */
    public function setSmtp($smtp)
    {
        $this->smtp = $smtp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSmtpPort()
    {
        return $this->smtp_port;
    }

    /**
     * @param mixed $smtp_port
     */
    public function setSmtpPort($smtp_port)
    {
        $this->smtp_port = $smtp_port;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSmtpEncryption()
    {
        return $this->smtp_encryption;
    }

    /**
     * @param mixed $smtp_encryption
     */
    public function setSmtpEncryption($smtp_encryption)
    {
        $this->smtp_encryption = $smtp_encryption;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }
}