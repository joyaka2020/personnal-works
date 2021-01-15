<?php

namespace ContainerARnjGHx;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/PersisterLoader.php';

class PersisterLoader_c8a8e24 extends \Fidry\AliceDataFixtures\Loader\PersisterLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Fidry\AliceDataFixtures\Loader\PersisterLoader|null wrapped object, if the proxy is initialized
     */
    private $valueHolder674d0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbad0f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6698c = [
        
    ];

    public function withPersister(\Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister) : \Fidry\AliceDataFixtures\Loader\PersisterLoader
    {
        $this->initializerbad0f && ($this->initializerbad0f->__invoke($valueHolder674d0, $this, 'withPersister', array('persister' => $persister), $this->initializerbad0f) || 1) && $this->valueHolder674d0 = $valueHolder674d0;

        return $this->valueHolder674d0->withPersister($persister);
    }

    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializerbad0f && ($this->initializerbad0f->__invoke($valueHolder674d0, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializerbad0f) || 1) && $this->valueHolder674d0 = $valueHolder674d0;

        return $this->valueHolder674d0->load($fixturesFiles, $parameters, $objects, $purgeMode);
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($instance);

        $instance->initializerbad0f = $initializer;

        return $instance;
    }

    public function __construct(\Fidry\AliceDataFixtures\LoaderInterface $decoratedLoader, \Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister, ?\Psr\Log\LoggerInterface $logger = null, array $processors = [])
    {
        static $reflection;

        if (! $this->valueHolder674d0) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');
            $this->valueHolder674d0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($this);

        }

        $this->valueHolder674d0->__construct($decoratedLoader, $persister, $logger, $processors);
    }

    public function & __get($name)
    {
        $this->initializerbad0f && ($this->initializerbad0f->__invoke($valueHolder674d0, $this, '__get', ['name' => $name], $this->initializerbad0f) || 1) && $this->valueHolder674d0 = $valueHolder674d0;

        if (isset(self::$publicProperties6698c[$name])) {
            return $this->valueHolder674d0->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder674d0;

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

        $targetObject = $this->valueHolder674d0;
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
        $this->initializerbad0f && ($this->initializerbad0f->__invoke($valueHolder674d0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbad0f) || 1) && $this->valueHolder674d0 = $valueHolder674d0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder674d0;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder674d0;
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
        $this->initializerbad0f && ($this->initializerbad0f->__invoke($valueHolder674d0, $this, '__isset', array('name' => $name), $this->initializerbad0f) || 1) && $this->valueHolder674d0 = $valueHolder674d0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder674d0;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder674d0;
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
        $this->initializerbad0f && ($this->initializerbad0f->__invoke($valueHolder674d0, $this, '__unset', array('name' => $name), $this->initializerbad0f) || 1) && $this->valueHolder674d0 = $valueHolder674d0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder674d0;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder674d0;
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
        $this->initializerbad0f && ($this->initializerbad0f->__invoke($valueHolder674d0, $this, '__clone', array(), $this->initializerbad0f) || 1) && $this->valueHolder674d0 = $valueHolder674d0;

        $this->valueHolder674d0 = clone $this->valueHolder674d0;
    }

    public function __sleep()
    {
        $this->initializerbad0f && ($this->initializerbad0f->__invoke($valueHolder674d0, $this, '__sleep', array(), $this->initializerbad0f) || 1) && $this->valueHolder674d0 = $valueHolder674d0;

        return array('valueHolder674d0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbad0f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbad0f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbad0f && ($this->initializerbad0f->__invoke($valueHolder674d0, $this, 'initializeProxy', array(), $this->initializerbad0f) || 1) && $this->valueHolder674d0 = $valueHolder674d0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder674d0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder674d0;
    }


}

if (!\class_exists('PersisterLoader_c8a8e24', false)) {
    \class_alias(__NAMESPACE__.'\\PersisterLoader_c8a8e24', 'PersisterLoader_c8a8e24', false);
}
