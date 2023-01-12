<?php

namespace ContainerSCDJ6w0;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder39b90 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere1230 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesedbd5 = [
        
    ];

    public function getConnection()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getConnection', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getMetadataFactory', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getExpressionBuilder', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'beginTransaction', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getCache', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getCache();
    }

    public function transactional($func)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'transactional', array('func' => $func), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'wrapInTransaction', array('func' => $func), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'commit', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->commit();
    }

    public function rollback()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'rollback', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getClassMetadata', array('className' => $className), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'createQuery', array('dql' => $dql), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'createNamedQuery', array('name' => $name), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'createQueryBuilder', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'flush', array('entity' => $entity), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'clear', array('entityName' => $entityName), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->clear($entityName);
    }

    public function close()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'close', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->close();
    }

    public function persist($entity)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'persist', array('entity' => $entity), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'remove', array('entity' => $entity), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'detach', array('entity' => $entity), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'merge', array('entity' => $entity), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getRepository', array('entityName' => $entityName), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'contains', array('entity' => $entity), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getEventManager', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getConfiguration', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'isOpen', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getUnitOfWork', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getProxyFactory', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'initializeObject', array('obj' => $obj), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'getFilters', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'isFiltersStateClean', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'hasFilters', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return $this->valueHolder39b90->hasFilters();
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

        $instance->initializere1230 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder39b90) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder39b90 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder39b90->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, '__get', ['name' => $name], $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        if (isset(self::$publicPropertiesedbd5[$name])) {
            return $this->valueHolder39b90->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39b90;

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

        $targetObject = $this->valueHolder39b90;
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
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39b90;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder39b90;
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
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, '__isset', array('name' => $name), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39b90;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder39b90;
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
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, '__unset', array('name' => $name), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39b90;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder39b90;
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
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, '__clone', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        $this->valueHolder39b90 = clone $this->valueHolder39b90;
    }

    public function __sleep()
    {
        $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, '__sleep', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;

        return array('valueHolder39b90');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere1230 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere1230;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere1230 && ($this->initializere1230->__invoke($valueHolder39b90, $this, 'initializeProxy', array(), $this->initializere1230) || 1) && $this->valueHolder39b90 = $valueHolder39b90;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder39b90;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder39b90;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
