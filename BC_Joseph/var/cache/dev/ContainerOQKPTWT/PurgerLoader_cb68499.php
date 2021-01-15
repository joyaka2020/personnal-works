<?php

namespace ContainerOQKPTWT;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/PurgerLoader.php';

class PurgerLoader_cb68499 extends \Fidry\AliceDataFixtures\Loader\PurgerLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Fidry\AliceDataFixtures\Loader\PurgerLoader|null wrapped object, if the proxy is initialized
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

    public function withPersister(\Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister) : \Fidry\AliceDataFixtures\Loader\PurgerLoader
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'withPersister', array('persister' => $persister), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->withPersister($persister);
    }

    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->load($fixturesFiles, $parameters, $objects, $purgeMode);
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory, $instance->defaultPurgeMode, $instance->logger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($instance);

        $instance->initializer2409d = $initializer;

        return $instance;
    }

    public function __construct(\Fidry\AliceDataFixtures\LoaderInterface $decoratedLoader, \Fidry\AliceDataFixtures\Persistence\PurgerFactoryInterface $purgerFactory, string $defaultPurgeMode, ?\Psr\Log\LoggerInterface $logger = null)
    {
        static $reflection;

        if (! $this->valueHolderac466) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PurgerLoader');
            $this->valueHolderac466 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory, $instance->defaultPurgeMode, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($this);

        }

        $this->valueHolderac466->__construct($decoratedLoader, $purgerFactory, $defaultPurgeMode, $logger);
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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory, $instance->defaultPurgeMode, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($this);
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

if (!\class_exists('PurgerLoader_cb68499', false)) {
    \class_alias(__NAMESPACE__.'\\PurgerLoader_cb68499', 'PurgerLoader_cb68499', false);
}
