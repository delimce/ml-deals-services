<?php

return [

    'default' => 'deals',

    'connections' => [


        'deals' => [
            'driver'    => 'mysql',
            'host'      => 'xserver',
            'database'  => 'ml_deals',
            'username'  => 'root',
            'password'  => 'delimce',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],


    ],


];