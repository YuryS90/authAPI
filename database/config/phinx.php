<?php
declare(strict_types=1);

(\Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2)))->load();

return
    [
        'paths' => [
            'migrations' => __DIR__ . '/../migrations',
        ],

        'environments' => [
            'default_migration_table' => 'phinxlog',
            'default_environment' => 'dev',

            'dev' => [
                'adapter' => 'mysql',
                'host' => $_ENV['PH_HOST'],
                'name' => $_ENV['PH_DB'],
                'user' => $_ENV['PH_NAME'],
                'pass' => $_ENV['PH_PW'],
                'port' => '3306',
                'charset' => 'utf8',
            ],

        ],
        'version_order' => 'creation'
    ];
