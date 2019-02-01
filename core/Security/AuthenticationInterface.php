<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 1/30/19
 * Time: 10:56 PM
 */

namespace Core\Security;

/**
 * Interface d'authentification de l'utilisateur
 *
 * Interface AuthenticationInterface
 * @package Core\Security
 */
interface AuthenticationInterface
{
    /**
     * Authentification d'un utilisateur
     *
     * @param string $username nom de l'utilisateur
     * @param string $password mot de passe de l'utilisateur
     * @return mixed
     */
    public function login(string $username, string $password);

    /**
     * Vérifier si l'utilisateur est authentifié
     * @return mixed
     */
    public function isLogged();

    /*
     * Obtenir l'identifiant d'un utilisateur authentifié
     */
    public function getUserId();

    /**
     * Deconnexion d'un utilisateur
     *
     * @return mixed
     *
     */
    public function logout();
}