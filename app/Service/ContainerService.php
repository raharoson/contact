<?php

namespace App\Service;

use Core\Database\DatabaseInterface;
use Core\Database\MysqlDatabase;

use Core\Config;

use Core\Security\AuthenticationInterface;
use Core\Security\DbAuthentication;

use Core\Table\Table;
use Twig_Environment;
use Twig_Loader_Filesystem;


/**
 * Conteneur de service
 *
 * Class ContainerService
 * @package App\Service
 */
class ContainerService
{

    public $title = "Chat room";

    private static $_app_instance;

    private $db_instance;

    private $auth;

    private $twig;

    /**
     * Obtenir l'instance du containeur de service
     * @return App
     */
    public static function getInstance(): ContainerService
    {
        return self::$_app_instance ?? new ContainerService();
    }


    /**
     * Obtenir l'instance d'une connexion à la base de données
     *
     * Get the value of database
     */
    public function getDb(): DatabaseInterface
    {
        $config = Config::getInstance(APP_ROOT . '/config/config.php');
        return $this->db_instance ?? new MysqlDatabase(
                $config->get('db_name'),
                $config->get('db_user'),
                $config->get('db_pass'),
                $config->get('db_host')
            );
    }

    /**
     * Obtenir l'instance d'une table
     *
     * @param $name nom de la table à manipuler
     * @return mixed
     */
    public function getTable($name): Table
    {
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    /**
     * Obtenir l'instance d'authentification
     *
     * @return AuthenticationInterface
     */
    public function getAuth(): AuthenticationInterface
    {
        return $this->auth ?? new DbAuthentication($this->getDb());
    }

    /**
     * Obtenir l'instance du moteur de template twig
     *
     * @return Twig_Environment
     */
    public function getEngine(): Twig_Environment
    {
        return $this->twig ?? new Twig_Environment(
                new Twig_Loader_Filesystem(APP_ROOT . '/app/Views'),
                [
                    'debug' => true,
                    'cache' => APP_ROOT . '/cache',
                    'auto_reload' => true,
                ]
            );
    }

}