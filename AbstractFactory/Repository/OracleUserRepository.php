<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Entity\User;

/**
 * Class OracleUserRepository Реализация репозитория пользователей, который
 * работает с Oracle-БД.
 * @package Repository
 */
class OracleUserRepository extends BaseOracleRepository
    implements UserRepositoryInterface
{
    /**
     * @param User $user
     */
    public function add(User $user)
    {
        // Для коннекта к Oracle используется $this->getOracleConnection().
        echo 'Добавляем в Oracle пользователя $user.' . PHP_EOL;
    }

    /**
     * @param User $user
     */
    public function delete(User $user)
    {
        // Для коннекта к Oracle используется $this->getOracleConnection().
        echo 'Удаляем в Oracle пользователя $user.' . PHP_EOL;
    }

    /**
     * @param User $user
     */
    public function update(User $user)
    {
        // Для коннекта к Oracle используется $this->getOracleConnection().
        echo 'Обновляем в Oracle пользователя $user.' . PHP_EOL;
    }
}