<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\MySQLUserRepository;
use AbstractFactory\Repository\MySQLOrderRepository;
use AbstractFactory\Db\MySQL;

/**
 * Class MySQLRepositoryFactory Класс-фабрика, реализующий интерфейс
 * абстрактной фабрики. Данный класс будет создавать репозитории, которые
 * работают с MySQL-БД.
 * @package Factory
 */
class MySQLRepositoryFactory implements RepositoryFactoryInterface
{
    /**
     * @var MySQL
     */
    private $MySQLConnection;

    /**
     * MySQLRepositoryFactory constructor.
     * @param MySQL $MySQLConnection
     */
    public function __construct(MySQL $MySQLConnection)
    {
        $this->MySQLConnection = $MySQLConnection;
    }

    /**
     * @return UserRepositoryInterface
     */
    public function createUserRepository(): UserRepositoryInterface
    {
        return new MySQLUserRepository($this->MySQLConnection);
    }

    /**
     * @return OrderRepositoryInterface
     */
    public function createOrderRepository(): OrderRepositoryInterface
    {
        return new MySQLOrderRepository($this->MySQLConnection);
    }
}