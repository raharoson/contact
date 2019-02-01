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
 * Modèle pour la manipulation des données relatives à la table Adresse
 *
 * Class UserTable
 * @package App\Table
 */
class AdresseTable extends Table
{
    /**
     * Obtenir toutes les adresses d'un contact
     *
     * @param $contactid identifiant du contact associé à une adresse
     * @return array
     */
    public function getAllByContactId($contactid)
    {
        return $this->query(
            "SELECT 
                        adresse.id,
                        adresse.numrue,
                        adresse.codepostal,
                        adresse.ville,
                        adresse.pays,
                        adresse.telephone,
                        adresse.contactid
                      FROM 
                        adresse
                      WHERE
                        adresse.contactid = ?",
            [$contactid]
        );
    }

    /**
     * Obtenir l'enregistrment d'un contact
     *
     * @param $id identifiant du contact
     * @return Table[]
     */
    public function getSingle($id)
    {
        return $this->query("SELECT * FROM adresse WHERE id = ?", [$id], true);
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
            if ($key == 'id' || $key == 'contactid') continue;
            $sql_params[] = "$key = ?";
            $attributes[] = $value;
        }

        $sql_part = implode(', ', $sql_params);

        $attributes[] = $id;

        return $this->query("UPDATE ". $this->table ." SET ". $sql_part ." WHERE id = ?", $attributes, true);
    }

}