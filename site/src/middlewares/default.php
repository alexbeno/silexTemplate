<?php

$app->before(function() use ($app)
{
    $app['twig']->addGlobal('title', 'Flinked');
});
$app->after(function() use ($app)
{

});
$app->finish(function() use ($app)
{
});
