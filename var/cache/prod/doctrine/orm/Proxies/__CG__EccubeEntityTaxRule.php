<?php

namespace Proxies\__CG__\Eccube\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TaxRule extends \Eccube\Entity\TaxRule implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'sort_no', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'tax_rate', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'tax_adjust', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'apply_date', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'ProductClass', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'Creator', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'Country', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'Pref', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'Product', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'RoundingType'];
        }

        return ['__isInitialized__', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'sort_no', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'id', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'tax_rate', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'tax_adjust', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'apply_date', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'create_date', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'update_date', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'ProductClass', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'Creator', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'Country', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'Pref', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'Product', '' . "\0" . 'Eccube\\Entity\\TaxRule' . "\0" . 'RoundingType'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TaxRule $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function isDefaultTaxRule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDefaultTaxRule', []);

        return parent::isDefaultTaxRule();
    }

    /**
     * {@inheritDoc}
     */
    public function setSortNo($sortNo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSortNo', [$sortNo]);

        return parent::setSortNo($sortNo);
    }

    /**
     * {@inheritDoc}
     */
    public function getSortNo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSortNo', []);

        return parent::getSortNo();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxRate($taxRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxRate', [$taxRate]);

        return parent::setTaxRate($taxRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxRate', []);

        return parent::getTaxRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxAdjust($taxAdjust)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxAdjust', [$taxAdjust]);

        return parent::setTaxAdjust($taxAdjust);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxAdjust()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxAdjust', []);

        return parent::getTaxAdjust();
    }

    /**
     * {@inheritDoc}
     */
    public function setApplyDate($applyDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApplyDate', [$applyDate]);

        return parent::setApplyDate($applyDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getApplyDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApplyDate', []);

        return parent::getApplyDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', [$createDate]);

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', []);

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', [$updateDate]);

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', []);

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductClass(\Eccube\Entity\ProductClass $productClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductClass', [$productClass]);

        return parent::setProductClass($productClass);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductClass', []);

        return parent::getProductClass();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\Eccube\Entity\Member $creator = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(\Eccube\Entity\Master\Country $country = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setPref(\Eccube\Entity\Master\Pref $pref = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPref', [$pref]);

        return parent::setPref($pref);
    }

    /**
     * {@inheritDoc}
     */
    public function getPref()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPref', []);

        return parent::getPref();
    }

    /**
     * {@inheritDoc}
     */
    public function setProduct(\Eccube\Entity\Product $product = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProduct', [$product]);

        return parent::setProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduct', []);

        return parent::getProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoundingType(\Eccube\Entity\Master\RoundingType $RoundingType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoundingType', [$RoundingType]);

        return parent::setRoundingType($RoundingType);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoundingType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoundingType', []);

        return parent::getRoundingType();
    }

    /**
     * {@inheritDoc}
     */
    public function compareTo(\Eccube\Entity\TaxRule $Target)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'compareTo', [$Target]);

        return parent::compareTo($Target);
    }

    /**
     * {@inheritDoc}
     */
    public function isProductTaxRule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isProductTaxRule', []);

        return parent::isProductTaxRule();
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', [$offset]);

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', [$offset, $value]);

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', [$offset]);

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', [$offset]);

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = array (
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', [$arrProps, $excludeAttribute, $parentClass]);

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', [$excludeAttribute, $parentClass]);

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toNormalizedArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toNormalizedArray', [$excludeAttribute]);

        return parent::toNormalizedArray($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toJSON(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJSON', [$excludeAttribute]);

        return parent::toJSON($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toXML(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toXML', [$excludeAttribute]);

        return parent::toXML($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', [$srcObject, $excludeAttribute]);

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnotationReader(\Doctrine\Common\Annotations\Reader $Reader)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnotationReader', [$Reader]);

        return parent::setAnnotationReader($Reader);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnotationReader()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnotationReader', []);

        return parent::getAnnotationReader();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityIdentifierAsArray(\Eccube\Entity\AbstractEntity $Entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityIdentifierAsArray', [$Entity]);

        return parent::getEntityIdentifierAsArray($Entity);
    }

}
