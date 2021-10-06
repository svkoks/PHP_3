<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Db\Oracle;

/**
 * Class BaseOracleRepository Абстрактный класс для каждого репозитория,
 * который будет работать с Oracle-БД. Здесь будет храниться соединение с БД.
 * @package Repository
 */
abstract class BaseOracleRepository
{
    /**
     * @var Oracle
     */
    private $OracleConnection;

    /**
     * BaseOracleRepository constructor.
     * @param Oracle $OracleConnection
     */
    public function __construct(Oracle $OracleConnection)
    {
        $this->OracleConnection = $OracleConnection;
    }

    /**
     * @return Oracle
     */
    public function getOracleConnection(): Oracle
    {
        return $this->OracleConnection;
    }
}