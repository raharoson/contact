<?php

define('APP_ROOT', dirname(__DIR__));
define('URL_REST', 'api.php');

session_start();

require APP_ROOT . '/vendor/autoload.php';

use App\Service\ContainerService;

use App\Controller\UserController;
use App\Controller\ContactController;
use App\Controller\AdresseController;

$container = ContainerService::getInstance();

if(isset($_GET['p']))
{
    $page = $_GET['p'];
} else {
    $page = 'user.login';
}

if($page == 'user.add')
{
    $controller = new UserController($container);
    $controller->add();
}

$auth = $container->getAuth();
if(!$auth->isLogged() && ($page != 'user.login') && ($page != 'user.add'))
{
    header('Location: index.php?p=user.login');
}

//Routing USER
elseif($page === 'user.login')
{
    $controller = new UserController($container);
    $controller->login();
}
elseif($page === 'user.logout')
{
    $controller = new \App\Controller\UserController($container);
    $controller->logout();
}
elseif($page === 'user.edit')
{
    $controller = new \App\Controller\UserController();
    $controller->edit();
}
elseif($page === 'user.connected')
{
    $controller = new \App\Controller\UserController();
    $controller->getUsersConnected();
}

//Routing Contact
elseif($page == 'contact.list')
{
    $controller = new ContactController($container);
    $controller->list();
}

elseif($page == 'contact.edit')
{
    $controller = new ContactController($container);
    $controller->edit();
}
elseif($page == 'contact.update')
{
    $controller = new ContactController($container);
    $controller->update();
}

elseif($page == 'contact.create')
{
    $controller = new ContactController($container);
    $controller->create();
}

elseif($page == 'contact.checkpalindrome')
{
    $controller = new ContactController($container);
    $controller->checkContactName();
}


elseif ($page == 'adresse.update')
{
    $controller = new AdresseController($container);
    $controller->update();
}

elseif ($page == 'adresse.create')
{
    $controller = new AdresseController($container);
    $controller->create();
}