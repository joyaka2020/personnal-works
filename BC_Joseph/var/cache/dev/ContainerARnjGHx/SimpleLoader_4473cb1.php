<?php

namespace ContainerARnjGHx;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/SimpleLoader.php';

class SimpleLoader_4473cb1 extends \Fidry\AliceDataFixtures\Loader\SimpleLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Fidry\AliceDataFixtures\Loader\SimpleLoader|null wrapped object, if the proxy is initialized
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($instance);

        $instance->initializerbad0f = $initializer;

        return $instance;
    }

    public function __construct(\Nelmio\Alice\FilesLoaderInterface $fileLoader, ?\Psr\Log\LoggerInterface $logger = null)
    {
        static $reflection;

        if (! $this->valueHolder674d0) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');
            $this->valueHolder674d0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);

        }

        $this->valueHolder674d0->__construct($fileLoader, $logger);
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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);
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

if (!\class_exists('SimpleLoader_4473cb1', false)) {
    \class_alias(__NAMESPACE__.'\\SimpleLoader_4473cb1', 'SimpleLoader_4473cb1', false);
}
