<?php
/**
 * Created by PhpStorm.
 * User: nikolay
 * Date: 06.08.15
 * Time: 00:02
 */

namespace Bolar\Frontend\Models;


use Phalcon\Mvc\Model\Relation;
use Phalcon\Mvc\Model\Validator\PresenceOf;

class ContentManager extends BaseModel
{
    protected $id;
    protected $page_type;
    protected $content;
    protected $section;
    protected $image_id;
    protected $position;
    protected $element_type;

    public function initialize()
    {
        $this->hasMany('image_id', 'Bolar\Frontend\Models\Gallery', 'id', array(
            'alias' => 'gallery',
            'foreignKey' => array(
                'action' => Relation::ACTION_CASCADE
            )
        ));
    }

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
        if (!$this->getDI()->getRequest()->getPost()['section'] == 'bottom') {
            $this->page_type = 'All';
        } else {
            $this->page_type = $page_type;
        }
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

    /**
     * @return mixed
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param mixed $section
     */
    public function setSection($section)
    {
        $this->section = $section;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageId()
    {
        return $this->image_id;
    }

    public function setImageId($galleryId)
    {
        $this->image_id = $galleryId;
    }


    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getElementType()
    {
        return $this->element_type;
    }

    /**
     * @param mixed $element_type
     */
    public function setElementType($element_type)
    {
        $this->element_type = $element_type;
        return $this;
    }
}