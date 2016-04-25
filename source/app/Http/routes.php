<?php

$app->get('/', function() use ($app) {
    return view('index');
});

$app->post('/register', 'RegistrantsController@register');