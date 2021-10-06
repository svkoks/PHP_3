<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Entity\User;

/**
 * Class MySQLUserRepository Реализация репозитория пользователей, который
 * работает с MySQL-БД.
 * @package Repository
 */
class MySQLUserRepository extends BaseMySQLRepository
    implements UserRepositoryInterface
{
    /**
     * @param User $user
     */
    public function add(User $user)
    {
        // Для коннекта к MySQL используется $this->getMySQLConnection().
        echo 'Добавляем в MySQL пользователя $user.' . PHP_EOL;
    }

    /**
     * @param User $user
     */
    public function delete(User $user)
    {
        // Для коннекта к MySQL используется $this->getMySQLConnection().
        echo 'Удаляем в MySQL пользователя $user.' . PHP_EOL;
    }

    /**
     * @param User $user
     */
    public function update(User $user)
    {
        // Для коннекта к MySQL используется $this->getMySQLConnection().
        echo 'Обновляем в MySQL пользователя $user.' . PHP_EOL;
    }
}