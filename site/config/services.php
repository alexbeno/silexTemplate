<?php
//twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => SITE_PATH.'/views',
));

//formualaire

$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new Silex\Provider\LocaleServiceProvider());
