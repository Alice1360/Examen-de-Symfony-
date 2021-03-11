<?php

namespace ContainerIjOBZvk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8ca0b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer373c6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties414bd = [
        
    ];

    public function getConnection()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getConnection', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getMetadataFactory', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getExpressionBuilder', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'beginTransaction', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getCache', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'transactional', array('func' => $func), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->transactional($func);
    }

    public function commit()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'commit', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->commit();
    }

    public function rollback()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'rollback', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getClassMetadata', array('className' => $className), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'createQuery', array('dql' => $dql), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'createNamedQuery', array('name' => $name), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'createQueryBuilder', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'flush', array('entity' => $entity), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'clear', array('entityName' => $entityName), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->clear($entityName);
    }

    public function close()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'close', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->close();
    }

    public function persist($entity)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'persist', array('entity' => $entity), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'remove', array('entity' => $entity), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'refresh', array('entity' => $entity), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'detach', array('entity' => $entity), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'merge', array('entity' => $entity), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'contains', array('entity' => $entity), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getEventManager', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getConfiguration', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'isOpen', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getUnitOfWork', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getProxyFactory', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'initializeObject', array('obj' => $obj), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'getFilters', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'isFiltersStateClean', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'hasFilters', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return $this->valueHolder8ca0b->hasFilters();
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

        $instance->initializer373c6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8ca0b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ca0b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8ca0b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, '__get', ['name' => $name], $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        if (isset(self::$publicProperties414bd[$name])) {
            return $this->valueHolder8ca0b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ca0b;

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

        $targetObject = $this->valueHolder8ca0b;
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
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ca0b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8ca0b;
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
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, '__isset', array('name' => $name), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ca0b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8ca0b;
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
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, '__unset', array('name' => $name), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ca0b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8ca0b;
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
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, '__clone', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        $this->valueHolder8ca0b = clone $this->valueHolder8ca0b;
    }

    public function __sleep()
    {
        $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, '__sleep', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;

        return array('valueHolder8ca0b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer373c6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer373c6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer373c6 && ($this->initializer373c6->__invoke($valueHolder8ca0b, $this, 'initializeProxy', array(), $this->initializer373c6) || 1) && $this->valueHolder8ca0b = $valueHolder8ca0b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ca0b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ca0b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
