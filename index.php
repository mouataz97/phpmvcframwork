<?php

$app = new Application();

$router = new Router();
$router->get('/',function(){
    return 'Hello Wrold';
});

$app->userRouter($router);

$app->run();