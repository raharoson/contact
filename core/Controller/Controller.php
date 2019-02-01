<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 12/6/18
 * Time: 2:14 PM
 */

namespace Core\Controller;

use App\Service\ContainerService;

/**
 * Classe mère héritée par les controlleurs de l'application
 *
 * Class Controller
 * @package Core\Controller
 */
class Controller
{
    /**
     * @var ContainerService Conteneur de service injecté à ce controlleur
     */
    protected $container;

    /**
     * Controller constructor.
     * @param ContainerService $container Conteneur de service injecté à ce controlleur
     */
    public function __construct(ContainerService $container)
    {
        $this->container = $container;
    }

    /**
     * Méthode permettant de charger un template twig.
     * Appel à la fonction render du moteur de template twig.
     *
     * @param $view
     * @param array $params
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    protected function render($view, $params = [])
    {
        echo $this->container->getEngine()->render($view, $params);
    }

    /**
     *
     */
    protected function forbidden()
    {
        header('HTTP/1.0 403 Forbidden');
        die("Access denied!");
    }

    /**
     *
     */
    protected function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        die("Page not found!");
    }

}