<?php

namespace Container6CX36y6;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfcd41 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0a0b4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5d834 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getConnection', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getMetadataFactory', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getExpressionBuilder', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'beginTransaction', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getCache', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'transactional', array('func' => $func), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'commit', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->commit();
    }

    public function rollback()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'rollback', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getClassMetadata', array('className' => $className), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'createQuery', array('dql' => $dql), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'createNamedQuery', array('name' => $name), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'createQueryBuilder', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'flush', array('entity' => $entity), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'clear', array('entityName' => $entityName), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->clear($entityName);
    }

    public function close()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'close', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->close();
    }

    public function persist($entity)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'persist', array('entity' => $entity), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'remove', array('entity' => $entity), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'refresh', array('entity' => $entity), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'detach', array('entity' => $entity), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'merge', array('entity' => $entity), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'contains', array('entity' => $entity), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getEventManager', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getConfiguration', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'isOpen', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getUnitOfWork', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getProxyFactory', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'initializeObject', array('obj' => $obj), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'getFilters', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'isFiltersStateClean', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'hasFilters', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return $this->valueHolderfcd41->hasFilters();
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

        $instance->initializer0a0b4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfcd41) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfcd41 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfcd41->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, '__get', ['name' => $name], $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        if (isset(self::$publicProperties5d834[$name])) {
            return $this->valueHolderfcd41->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfcd41;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfcd41;
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
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfcd41;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfcd41;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, '__isset', array('name' => $name), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfcd41;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfcd41;
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
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, '__unset', array('name' => $name), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfcd41;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfcd41;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, '__clone', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        $this->valueHolderfcd41 = clone $this->valueHolderfcd41;
    }

    public function __sleep()
    {
        $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, '__sleep', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;

        return array('valueHolderfcd41');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0a0b4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0a0b4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0a0b4 && ($this->initializer0a0b4->__invoke($valueHolderfcd41, $this, 'initializeProxy', array(), $this->initializer0a0b4) || 1) && $this->valueHolderfcd41 = $valueHolderfcd41;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfcd41;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfcd41;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
