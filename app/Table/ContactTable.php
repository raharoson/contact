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
 *  Modèle pour la manipulation des données relatives à la table Contact
 *
 * Class UserTable
 * @package App\Table
 */
class ContactTable extends Table
{
    /**
     * Obtenir tous les contacts associés à un utilisateur
     *
     * @param $userid identifiant de l'utilisateur
     * @return array
     */
    public function getAllByUserId($userid)
    {
        return $this->query(
            "SELECT 
                        contact.id,
                        contact.nom,
                        contact.prenom,
                        contact.email
                      FROM 
                        contact
                      WHERE
                        contact.userid = ?",
            [$userid]
        );
    }

    /**
     * Obtenir les informations d'un contact
     *
     * @param $id identifiant du contact
     * @return Table[]
     */
    public function getSingle($id)
    {
        return $this->query("SELECT * FROM contact WHERE id = ?", [$id], true);
    }


    /**
     * Modifier les informations d'un contact
     *
     * @param $id identifiant du contact
     * @param $fields les nouvelles informations à enregistrer
     * @return Table[]
     */
    public function update($id, $fields)
    {
        $sql_params = [];
        $attributes = [];
        foreach($fields as $key => $value)
        {
            if ($key == 'id' || $key == 'userid') continue;
            $sql_params[] = "$key = ?";
            $attributes[] = $value;
        }

        $sql_part = implode(', ', $sql_params);
        $attributes[] = $id;

        return $this->query("UPDATE ". $this->table ." SET ". $sql_part ." WHERE id = ?", $attributes, true);
    }


}