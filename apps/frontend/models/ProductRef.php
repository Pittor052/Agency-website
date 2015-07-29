<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:41
 */

namespace Bolar\Frontend\Models;


class ProductRef extends BaseModel
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
    protected $ref;

    /**
     *
     * @var integer
     */
    protected $product_id;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */

    public function initialize()
    {
        $this->belongsTo('product_id', 'Bolar\Frontend\Models\Products', 'id', array('alias' => 'product'));
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field ref
     *
     * @param string $ref
     * @return $this
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Method to set the value of field product_id
     *
     * @param integer $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;

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
     * Returns the value of field ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Returns the value of field product_id
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'product_ref';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductRef[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductRef
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
