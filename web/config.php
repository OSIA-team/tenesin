<?php
/**
 * Created by PhpStorm.
 * User: kkosu
 * Date: 19.03.2018
 * Time: 19:44
 */


return [
    'mode' => function(){
        if ($_SERVER['SERVER_NAME'] == 'local.osia' OR $_SERVER['SERVER_NAME'] == 'localhost'){
            return 'dev';
        }
        if ($_SERVER['SERVER_NAME'] == 'bel3s.osia.cz'){
            return 'test';
        }
    },
    'database' => [
        'dev' => [
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'database' => 'Bel3s'
        ],

        'test' => [
            'host' => 'innodb.endora.cz',
            'user' => 'osiacz   ',
            'password' => 'kokoti22',
            'database' => 'bel3s'
        ],

        'production' => [
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'database' => 'Bel3s'
        ]
    ],
    'dir' => [
        'dev' => '/tenesin/web/'
        ],
        [
        'test' => 'web/'
        ],
        [
        'production' => ''
        ]
];