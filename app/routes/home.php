<?php

$app->get('/', function () use ($app) {

    $app->render('home.html', [
        'name' => 'Nathan McBride'
    ]);

})->name('home');
