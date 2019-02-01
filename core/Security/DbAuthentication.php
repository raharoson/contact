<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 12/6/18
 * Time: 9:57 AM
 */

namespace Core\Security;


use Core\Database\DatabaseInterface;

/**
 * Classe concrête pour s'authentifier
 * en utilisant une base de données comme fournisseur d'utilisateur (providers)
 *
 * Class DbAuthentication
 * @package Core\Security
 */
class DbAuthentication implements AuthenticationInterface
{
    /**
     * @var DatabaseInterface l'instance de la base de données
     */
    public $db;

    /**
     * DbAuthentication constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    /**
     *
     * S'Authentifier à la base de données
     *
     * @param $username nom de l'utilisateur
     * @param $pwd mot de passe
     * @return boolean
     */
    public function login($username, $pwd)
    {
        $user = $this->db->prepare(
            "SELECT * FROM user WHERE username = ?",
            [$username],
            null,
            true
        );

        if ($user)
        {
            if($user->password === sha1($pwd)){
                $_SESSION['auth'] = $user->id;
                $_SESSION['username'] = $user->username;
                return true;
            }
        }
        return false;
    }

    /**
     * Si l'utilisateur est authentifié ou pas
     * @return bool|mixed
     */
    public function isLogged()
    {
        if(isset($_SESSION['auth']))
        {
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    public function getUserId()
    {
        if($this->isLogged())
        {
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * Déconnexion
     *
     * @return bool|mixed
     */
    public function logout()
    {
        if($this->isLogged())
        {
            unset($_SESSION['auth']);
            unset($_SESSION['username']);
            return true;
        }
    }
}