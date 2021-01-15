<?php

namespace ContainerOQKPTWT;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Purger/Purger.php';

class Purger_2d4d1ea extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger|null wrapped object, if the proxy is initialized
     */
    private $valueHolderac466 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2409d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa69c3 = [
        
    ];

    public function create(\Fidry\AliceDataFixtures\Persistence\PurgeMode $mode, ?\Fidry\AliceDataFixtures\Persistence\PurgerInterface $purger = null) : \Fidry\AliceDataFixtures\Persistence\PurgerInterface
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'create', array('mode' => $mode, 'purger' => $purger), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->create($mode, $purger);
    }

    public function purge()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'purge', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->purge();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($instance);

        $instance->initializer2409d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Persistence\ObjectManager $manager, ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null)
    {
        static $reflection;

        if (! $this->valueHolderac466) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');
            $this->valueHolderac466 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);

        }

        $this->valueHolderac466->__construct($manager, $purgeMode);
    }

    public function & __get($name)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, '__get', ['name' => $name], $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        if (isset(self::$publicPropertiesa69c3[$name])) {
            return $this->valueHolderac466->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac466;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderac466;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac466;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderac466;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value; return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, '__isset', array('name' => $name), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac466;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderac466;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, '__unset', array('name' => $name), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac466;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderac466;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, '__clone', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        $this->valueHolderac466 = clone $this->valueHolderac466;
    }

    public function __sleep()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, '__sleep', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return array('valueHolderac466');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2409d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2409d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'initializeProxy', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderac466;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderac466;
    }


}

if (!\class_exists('Purger_2d4d1ea', false)) {
    \class_alias(__NAMESPACE__.'\\Purger_2d4d1ea', 'Purger_2d4d1ea', false);
}
