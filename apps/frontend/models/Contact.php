<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:36
 */

namespace Bolar\Frontend\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;
use Phalcon\Mvc\Model\Validator\PresenceOf;

class Contact extends BaseModel
{

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $topic;

    /**
     *
     * @var string
     */
    protected $msg;

    /**
     *
     * @var integer
     */
    protected $id;


    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field topic
     *
     * @param string $topic
     * @return $this
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Method to set the value of field msg
     *
     * @param string $msg
     * @return $this
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;

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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field topic
     *
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Returns the value of field msg
     *
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
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
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(new Email(array(
            'field' => 'email',
            'message' => "Invalid email"
        )));

        $this->validate(new PresenceOf(
            array(
                "field" => "name",
                "message" => "Name is required"
            )
        ));


        $this->validate(new PresenceOf(
            array(
                "field" => "topic",
                "message" => "Topic is required"
            )
        ));

        $this->validate(new PresenceOf(
            array(
                "field" => "msg",
                "message" => "Message is required"
            )
        ));

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'contact';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Contact[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Contact
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}