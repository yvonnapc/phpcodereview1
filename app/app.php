<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/cd.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider, array (
      'twig.path' => __DIR__."/../views"
    ));
 ?>
