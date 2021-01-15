<?php

namespace ContainerOQKPTWT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getConnection', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getMetadataFactory', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getExpressionBuilder', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'beginTransaction', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getCache', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'transactional', array('func' => $func), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->transactional($func);
    }

    public function commit()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'commit', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->commit();
    }

    public function rollback()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'rollback', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getClassMetadata', array('className' => $className), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'createQuery', array('dql' => $dql), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'createNamedQuery', array('name' => $name), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'createQueryBuilder', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'flush', array('entity' => $entity), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'clear', array('entityName' => $entityName), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->clear($entityName);
    }

    public function close()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'close', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->close();
    }

    public function persist($entity)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'persist', array('entity' => $entity), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'remove', array('entity' => $entity), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'refresh', array('entity' => $entity), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'detach', array('entity' => $entity), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'merge', array('entity' => $entity), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'contains', array('entity' => $entity), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getEventManager', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getConfiguration', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'isOpen', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getUnitOfWork', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getProxyFactory', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'initializeObject', array('obj' => $obj), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'getFilters', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'isFiltersStateClean', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2409d && ($this->initializer2409d->__invoke($valueHolderac466, $this, 'hasFilters', array(), $this->initializer2409d) || 1) && $this->valueHolderac466 = $valueHolderac466;

        return $this->valueHolderac466->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer2409d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderac466) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderac466 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderac466->__construct($conn, $config, $eventManager);
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
