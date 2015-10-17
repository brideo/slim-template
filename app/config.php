<?php

$settings = [
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => '',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix'    => ''
];

$container = new Illuminate\Container\Container;
$connFactory = new \Illuminate\Database\Connectors\ConnectionFactory($container);
$conn = $connFactory->make($settings);

$resolver = new \Illuminate\Database\ConnectionResolver();
$resolver->addConnection('default', $conn);
$resolver->setDefaultConnection('default');

\Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);
