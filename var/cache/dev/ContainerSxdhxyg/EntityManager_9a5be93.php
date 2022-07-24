<?php

namespace ContainerSxdhxyg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3b86c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4e195 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf02a0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getConnection', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getMetadataFactory', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getExpressionBuilder', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'beginTransaction', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getCache', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'transactional', array('func' => $func), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'commit', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->commit();
    }

    public function rollback()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'rollback', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getClassMetadata', array('className' => $className), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'createQuery', array('dql' => $dql), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'createNamedQuery', array('name' => $name), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'createQueryBuilder', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'flush', array('entity' => $entity), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'clear', array('entityName' => $entityName), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->clear($entityName);
    }

    public function close()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'close', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->close();
    }

    public function persist($entity)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'persist', array('entity' => $entity), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'remove', array('entity' => $entity), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'refresh', array('entity' => $entity), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'detach', array('entity' => $entity), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'merge', array('entity' => $entity), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'contains', array('entity' => $entity), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getEventManager', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getConfiguration', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'isOpen', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getUnitOfWork', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getProxyFactory', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'initializeObject', array('obj' => $obj), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'getFilters', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'isFiltersStateClean', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'hasFilters', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return $this->valueHolder3b86c->hasFilters();
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

        $instance->initializer4e195 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3b86c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3b86c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3b86c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, '__get', ['name' => $name], $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        if (isset(self::$publicPropertiesf02a0[$name])) {
            return $this->valueHolder3b86c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b86c;

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

        $targetObject = $this->valueHolder3b86c;
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
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b86c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3b86c;
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
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, '__isset', array('name' => $name), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b86c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3b86c;
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
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, '__unset', array('name' => $name), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b86c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3b86c;
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
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, '__clone', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        $this->valueHolder3b86c = clone $this->valueHolder3b86c;
    }

    public function __sleep()
    {
        $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, '__sleep', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;

        return array('valueHolder3b86c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4e195 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4e195;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4e195 && ($this->initializer4e195->__invoke($valueHolder3b86c, $this, 'initializeProxy', array(), $this->initializer4e195) || 1) && $this->valueHolder3b86c = $valueHolder3b86c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3b86c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3b86c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
