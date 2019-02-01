<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 12/5/18
 * Time: 10:12 PM
 */

namespace Core\Table;

use Core\Database\DatabaseInterface;

/**
 * Classe abstraite pour interagir avec une table de la base de données
 *
 * Class Table
 * @package Core\Table
 */
abstract class Table
{
    /**
     * @var string nom de table
     */
    protected $table;

    /**
     * @var DatabaseInterface instance d'une base de données
     */
    protected $db;

    /**
     * Table constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;

        if(is_null($this->table))
        {
            $array = explode('\\', get_class($this));
            $class_name = end($array);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }

    }

    /**
     * Obtenir tous les enregistements d'une table
     *
     * @return mixed
     */
    public function all()
    {
        return $this->query("SELECT * FROM " . $this->table);
    }

    /**
     * Obtenir un enregistrement d'un table
     *
     * @param $id identifiant de l'enregistrement
     * @return Table[]
     */
    public function find($id)
    {
        return $this->query("SELECT * FROM $this->table WHERE id = ?", [$id],true);
    }

    /**
     * Obtenir un ou plusieurs enregistrements d'une table selon les colonnes voulues
     *
     * @param $statement statement query
     * @param null $attributes les colonnes qu'on veut obtenir
     * @param bool $one obtenir un ou plusieurs
     * @return Table[]
     */
    public function query($statement, $attributes = null, $one = false)
    {
        if($attributes)
        {
            return $this->db->prepare(
                $statement,
                $attributes,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        } else {
            return $this->db->query(
                $statement,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        }
    }

    /**
     * Créer un nouvel enregistrement
     *
     * @param $fields les attributs de la table
     * @return Table[]
     */
    public function create($fields)
    {
        $sql_params = [];
        $attributes = [];

        foreach($fields as $key => $value)
        {
            $sql_params[] = "$key = ?";
            $attributes[] = $value;
        }

        $sql_part = implode(', ', $sql_params);

        return $this->query("INSERT INTO ". $this->table ." SET ". $sql_part, $attributes, true);
    }

    /**
     * Modifier un enregistrement
     *
     * @param $id identifiant de l'enregistrement à modifier
     * @param $fields les colonnes à modifier
     * @return Table[]
     */
    public function update($id, $fields)
    {
        $sql_params = [];
        $attributes = [];
        foreach($fields as $key => $value)
        {
            if ($key == 'id') continue;
            $sql_params[] = "$key = ?";
            $attributes[] = $value;
        }

        $sql_part = implode(', ', $sql_params);

        $attributes[] = $id;

        return $this->query("UPDATE ". $this->table ." SET ". $sql_part ." WHERE id = ?", $attributes, true);
    }

    /**
     * Obtenir l'identifiant du dernier enregistrement
     * @return mixed
     */
    public function lastInsertId()
    {
        return $this->db->lastInsertId();
    }
}