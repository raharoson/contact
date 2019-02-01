<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 12/5/18
 * Time: 10:13 PM
 */

namespace App\Table;

use Core\Table\Table;

/**
 * * Modèle pour la manipulation des données relatives à la table User
 *
 * Class UserTable
 * @package App\Table
 */
class UserTable extends Table
{

    /**
     * Obtenir les informations d'un utilisateur selon son nom d'utilisteur
     *
     * @param $username nom de l'utilisateur
     * @return UserTable[]
     */
    public function findByUsername($username)
    {
        return $this->query("SELECT * FROM user WHERE username = ?", [$username], true);
    }

    /**
     * Obtenir les informations d'un utilisateur selon son identifiant
     *
     * @param $id identifiant de l'utilisateur
     * @return Table[]
     */
    public function getSingle($id)
    {
        return $this->query("SELECT * FROM user WHERE id = ?", [$id], true);
    }

    /**
     * Ajouter un nouvel utilisateur
     *
     * @param $fields les informations concernant l'utilisateur
     * @return Table[]
     */
    public function create($fields)
    {
        $query = "INSERT INTO user SET username ='". $fields['username'] ."', password ='". sha1($fields['password']) ."'" ;
        return $this->query($query, null, true);
    }

}