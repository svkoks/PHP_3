<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Entity\Order;

/**
 * Class MySQLOrderRepository Реализация репозитория заказов, который
 * работает с MySQL-БД.
 * @package Repository
 */
class MySQLOrderRepository extends BaseMySQLRepository
    implements OrderRepositoryInterface
{
    /**
     * @param Order $order
     */
    public function add(Order $order)
    {
        // Для коннекта к MySQL используется $this->getMySQLConnection().
        echo 'Добавляем в MySQL заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function delete(Order $order)
    {
        // Для коннекта к MySQL используется $this->getMySQLConnection().
        echo 'Удаляем в MySQL заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function update(Order $order)
    {
        // Для коннекта к MySQL используется $this->getMySQLConnection().
        echo 'Обновляем в MySQL заказ $order.' . PHP_EOL;
    }
}