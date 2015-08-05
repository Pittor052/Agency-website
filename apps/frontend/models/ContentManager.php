<?php
/**
 * Created by PhpStorm.
 * User: nikolay
 * Date: 06.08.15
 * Time: 00:02
 */

namespace Bolar\Frontend\Models;


use Phalcon\Mvc\Model\Validator\PresenceOf;

class ContentManager extends BaseModel
{

    protected $id;
    protected $page_type;
    protected $content;

    public function validation()
    {
        $this->validate(new PresenceOf(array(
            'field' => 'page_type',
            'message' => 'page type is required'
        )));
        $this->validate(new PresenceOf(array(
            'field' => 'content',
            'message' => 'content is required'
        )));

        if ($this->validationHasFailed() === true) {
            return false;
        }
        return true;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getPageType()
    {
        return $this->page_type;
    }

    /**
     * @param mixed $page_type
     */
    public function setPageType($page_type)
    {
        $this->page_type = $page_type;
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
    }
}