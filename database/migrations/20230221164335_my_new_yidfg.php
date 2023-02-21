<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class MyNewYidfg extends AbstractMigration
{
    public function change(): void
    {
        $users = $this->table('users_2');
        $users
            ->addColumn('login', 'string', ['limit' => 150])
            ->addColumn('email', 'string', ['limit' => 200])
            ->addColumn('data', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('created', 'datetime')
            ->addIndex(['login', 'email'], ['unique' => true])
            ->create();
    }
}
