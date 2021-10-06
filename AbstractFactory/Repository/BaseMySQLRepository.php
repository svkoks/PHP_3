<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Db\MySQL;

/**
 * Class BaseMySQLRepository Абстрактный класс для каждого репозитория,
 * который будет работать с MySQL-БД. Здесь будет храниться соединение с БД.
 * @package Repository
 */
abstract class BaseMySQLRepository
{
    /**
     * @var MySQL
     */
    private $MySQLConnection;

    /**
     * BaseMySQLRepository constructor.
     * @param MySQL $MySQLConnection
     */
    public function __construct(MySQL $MySQLConnection)
    {
        $this->MySQLConnection = $MySQLConnection;
    }

    /**
     * @return MySQL
     */
    public function getMySQLConnection(): MySQL
    {
        return $this->MySQLConnection;
    }
}