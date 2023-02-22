<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateUserTable extends AbstractMigration
{
    public function change(): void
    {
        $users = $this->table('users');

        $users
            ->addColumn('user_id', 'integer')
            ->addColumn('login', 'string', ['limit' => 30, 'comment' => 'Логин'])
            ->addColumn('email', 'string', ['limit' => 100, 'comment' => 'Email'])
            ->addColumn('pwd', 'string', ['limit' => 40, 'comment' => 'Пароль'])
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime', ['null' => true])
            ->addIndex(['login', 'email'], ['unique' => true])

            // Фиксирование изменений в БД
            ->create();
    }
}
