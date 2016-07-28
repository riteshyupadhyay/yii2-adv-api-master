<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            /*'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',*/
            'dsn' => 'sqlsrv:Server=uxivsywe3m.database.windows.net,1433;Database=hellodb',//Done
            //'dsn' => 'sqlsrv:host=uxivsywe3m.database.windows.net,1440;dbname=hellodb',            
            //'dsn' => 'dblib:host=uxivsywe3m.database.windows.net;dbname=hellodb',
            //'dsn' =>'mssql:host=uxivsywe3m.database.windows.net;dbname=hellodb',
            'username' => 'hellodb',
            'password' => 'hello@db123',
            'charset' => 'utf8',
        ],
       /* 'on afterOpen' => function($event) {
        // $event->sender refers to the DB connection
        $event->sender->createCommand("SET time_zone = 'UTC'")->execute();
    },*/
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
