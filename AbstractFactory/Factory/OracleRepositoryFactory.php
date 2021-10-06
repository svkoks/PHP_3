<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\OracleUserRepository;
use AbstractFactory\Repository\OracleOrderRepository;
use AbstractFactory\Db\Oracle;

/**
 * Class OracleRepositoryFactory Класс-фабрика, реализующий интерфейс
 * абстрактной фабрики. Данный класс будет создавать репозитории, которые
 * работают с Oracle-БД.
 * @package Factory
 */
class OracleRepositoryFactory implements RepositoryFactoryInterface
{
    /**
     * @var Oracle
     */
    private $OracleConnection;

    /**
     * OracleRepositoryFactory constructor.
     * @param Oracle $OracleConnection
     */
    public function __construct(Oracle $OracleConnection)
    {
        $this->OracleConnection = $OracleConnection; //Так и не понял, почему не переопределяет
    }

    /**
     * @return UserRepositoryInterface
     */
    public function createUserRepository(): UserRepositoryInterface
    {
        return new OracleUserRepository($this->OracleConnection);
    }

    /**
     * @return OrderRepositoryInterface
     */
    public function createOrderRepository(): OrderRepositoryInterface
    {
        return new OracleOrderRepository($this->OracleConnection);
    }
}