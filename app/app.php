<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/book.php";

    session_start();
      if (empty($_SESSION['list_of_contacts'])){
        $_SESSION['list_of_contacts'] = array();
      }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider, array (
      'twig.path' => __DIR__."/../views"
    ));

    $app->get('/', function() use ($app){
        return $app['twig']->render('home.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->get('/create_contact', function() use ($app){
      return $app['twig']->render('create_contact.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post('/library', function() use ($app) {
         $new_contact = new Contact($_POST['name'], $_POST['number'], $_POST['address']);
         $new_contact->save();
         return $app['twig']->render('library.html.twig', array('list_of_contacts' => $new_contact));
     });

    return $app;
 ?>
