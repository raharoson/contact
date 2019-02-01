<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 12/6/18
 * Time: 7:43 AM
 */

namespace App\Entity;

use Core\Entity\Entity;

/**
 * Class UserEntity
 * @package App\Entity
 */
class UserEntity extends Entity
{

    public $password;
    public $email;
    public $nom;
    public $connected;

    /**
     * @param $password mot de passe de l'utilisteur
     * @param $email email de l'utilisateur
     * @param $nom nom de l'utilisteur
     * @param $connected prend une valeur de 1 si l'utilisateur est connecté, 0 si non
     */
    public function fetch($password, $email, $nom, $connected, $id = null)
    {
        $this->id = $id;
        $this->password = $password;
        $this->email = $email;
        $this->nom = $nom;
        $this->connected = $connected;
    }

}