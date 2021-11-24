<?php

require_once

$app = new Application();

$app->router->get('/',function(){
    return 'Hello Wrold';
});

$app->run();