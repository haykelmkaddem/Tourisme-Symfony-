<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class LieuEven extends \App\Entity\LieuEven implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\LieuEven' . "\0" . 'id', '' . "\0" . 'App\\Entity\\LieuEven' . "\0" . 'titreLieu', '' . "\0" . 'App\\Entity\\LieuEven' . "\0" . 'addresseEven', '' . "\0" . 'App\\Entity\\LieuEven' . "\0" . 'evenApprouves', '' . "\0" . 'App\\Entity\\LieuEven' . "\0" . 'EvenNonApprouves'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\LieuEven' . "\0" . 'id', '' . "\0" . 'App\\Entity\\LieuEven' . "\0" . 'titreLieu', '' . "\0" . 'App\\Entity\\LieuEven' . "\0" . 'addresseEven', '' . "\0" . 'App\\Entity\\LieuEven' . "\0" . 'evenApprouves', '' . "\0" . 'App\\Entity\\LieuEven' . "\0" . 'EvenNonApprouves'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (LieuEven $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getTitreLieu(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitreLieu', []);

        return parent::getTitreLieu();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitreLieu(string $titreLieu): \App\Entity\LieuEven
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitreLieu', [$titreLieu]);

        return parent::setTitreLieu($titreLieu);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddresseEven(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddresseEven', []);

        return parent::getAddresseEven();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddresseEven(string $addresseEven): \App\Entity\LieuEven
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddresseEven', [$addresseEven]);

        return parent::setAddresseEven($addresseEven);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvenApprouves(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvenApprouves', []);

        return parent::getEvenApprouves();
    }

    /**
     * {@inheritDoc}
     */
    public function addEvenApproufe(\App\Entity\EvenApprouve $evenApproufe): \App\Entity\LieuEven
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEvenApproufe', [$evenApproufe]);

        return parent::addEvenApproufe($evenApproufe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEvenApproufe(\App\Entity\EvenApprouve $evenApproufe): \App\Entity\LieuEven
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEvenApproufe', [$evenApproufe]);

        return parent::removeEvenApproufe($evenApproufe);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvenNonApprouves(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvenNonApprouves', []);

        return parent::getEvenNonApprouves();
    }

    /**
     * {@inheritDoc}
     */
    public function addEvenNonApproufe(\App\Entity\EvenNonApprouve $evenNonApproufe): \App\Entity\LieuEven
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEvenNonApproufe', [$evenNonApproufe]);

        return parent::addEvenNonApproufe($evenNonApproufe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEvenNonApproufe(\App\Entity\EvenNonApprouve $evenNonApproufe): \App\Entity\LieuEven
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEvenNonApproufe', [$evenNonApproufe]);

        return parent::removeEvenNonApproufe($evenNonApproufe);
    }

}
