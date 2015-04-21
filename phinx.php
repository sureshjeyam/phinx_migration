<?php

    require_once "app/config/database.php";


    $config = new DATABASE_CONFIG;

    $default = $config->default;

    return array(
        "paths" => array(
            "migrations" => "app/config/migrations"
        ),
        "environments" => array(
            "default_migration_table" => "phinxlog",
            "default_database" => "dev",

            "dev" => array(
                "adapter" => "mysql",
                "host" => $default['host'],
                "name" => $default['database'],
                "user" => $default['login'],
                "pass" => $default['password'],
                "port" => $_ENV['port']
            )
        )
    );