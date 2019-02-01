<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 12/5/18
 * Time: 11:23 PM
 */

namespace Core\Database;

/**
 * Interface pour interagir avec la base de données
 *
 * Interface DatabaseInterface
 * @package Core\Database
 */
interface DatabaseInterface
{
    /**
     *
     * @param $statement corps de la requête sql
     * @param null $class_name nom de classe associée à la table
     * @param bool $one true si le on s'atend à obtenir plusieurs enregistrement, false dans le cas contraire
     * @return mixed
     */
    public function query($statement, $class_name = null, $one = false);

    /**
     * Utilisée pour requêtes paramétrées
     *
     * @param $statement
     * @param $attributes
     * @param null $class_name
     * @param bool $one
     * @return mixed
     */
    public function prepare($statement, $attributes, $class_name = null, $one = false);
}