<?php

// road home
$app
    ->get('/', function() use ($app)
    {
        $data['title'] = 'bienvenue';
        return $app['twig']->render('pages/home.twig', $data);
    })
    ->bind('home');

// how
$app
    ->get('/explication', function() use ($app)
    {
        $data['title'] = 'comment ca marche';
        return $app['twig']->render('pages/how.twig', $data);
    })
    ->bind('how');

// pricing
$app
    ->get('/tarifs', function() use ($app)
    {
        $data['title'] = 'les prix';
        return $app['twig']->render('pages/price.twig', $data);
    })
    ->bind('price');


//road 404
$app
    ->error(function() use ($app)
    {
        $data = array();
        $data['title'] = 'Error';
        return $app['twig']->render('pages/error.twig', $data);
    });
