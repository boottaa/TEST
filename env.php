<?php

return [
    'base' => [
        //домен.
        'site' => "http://abtt.dev",
        //Корневая дериктория веб приложения.
        'root_dir' => '/var/www/zf',
        //Шаблон по умолчанию
        'template' => 'default',
        //Режим разработчика
        'devolper' => false,//$_SERVER['APPLICATION_ENV'],

    ],
    //Сервера my_sql
    'database' => [
     
    	'default' => [
            'driver' => 'Pdo_Mysql',
            'username' => 'bootta',
            'password' => '1991',
            'hostname' => '192.168.33.55'
        ],
        
        'xx' => [
            'driver' => 'Mysqli',
            'database' => 'test',
            'username' => 'bootta',
            'password' => '1991',
            'hostname' => '192.168.33.55'
        ],

    ],
];