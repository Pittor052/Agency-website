<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:42
 */

namespace Bolar\Frontend\Models;

use \Phalcon\Mvc\Model\Validator\Regex as RegexValidator;

class Products extends BaseModel
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
     *
     * @var string
     */
    protected $description;

    /**
     * @var
     */
    protected $price;

    /**
     * @var
     */
    protected $available;

    /**
     * @var
     */
    protected $cat;

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
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     *
     */
    public function initialize()
    {
        $this->belongsTo('id', 'Bolar\Frontend\Models\GalleryCat', 'id', array('alias' => 'category'));
        $this->hasOne('id', 'Bolar\Frontend\Models\ProductRef', 'id', array(
            'alias' => 'ref',
            'foreignKey' => array(
                'action' => \Phalcon\Mvc\Model\Relation::ACTION_CASCADE
            )

        ));
        $this->hasOne('id', 'Bolar\Frontend\Models\Gallery', 'product_id', array(
            'alias' => 'gallery',
            'foreignKey' => array(
                'action' => \Phalcon\Mvc\Model\Relation::ACTION_CASCADE
            )
        ));
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
        $this->validate(new \Phalcon\Mvc\Model\Validator\PresenceOf(
            array(
                'field' => 'name',
                'message' => "Name is required"
            )
        ));

        $this->validate(new \Phalcon\Mvc\Model\Validator\PresenceOf(
            array(
                "field" => "description",
                "message" => "Description is required"
            )
        ));

        $this->validate(new \Phalcon\Mvc\Model\Validator\PresenceOf(
            array(
                "field" => "price",
                "message" => "Price is required"
            )
        ));

        $this->validate(new RegexValidator(array(
            "field" => 'price',
            'pattern' => '/(\d+(.\d+)?)/',
            'message' => 'The price is invalid'
        )));

        if ($this->validationHasFailed() == true) {
            return false;
        }
        return true;
    }

    public function afterSave()
    {
        $productsModel = Products::find()->getLast();
        if (empty($productsModel->getRef())) {
            $productRefModel = new ProductRef();
            $productRefModel->setRef($this->generateRefCode($productsModel->getId()))->setProductId(($productsModel->getId()));
            $productRefModel->save();
        }
    }

    public function generateRefCode($name)
    {
        return 'ref#' . $name;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param mixed $available
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * @param mixed $cat
     */
    public function setCat($cat)
    {
        $this->cat = $cat;
        return $this;
    }


    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'products';
    }

    private function getModelMap()
    {
        return array(
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'price' => 'price',
            'available' => 'available',
            'cat' => 'cat'
        );
    }
}
