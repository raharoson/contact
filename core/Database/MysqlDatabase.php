<?php

namespace Core\Database;

use \PDO;

/**
 * Classe concrête  à instancier pour intergagir avec une base de données Mysql
 *
 * Class MysqlDatabase
 * @package Core\Database
 */
class MysqlDatabase implements DatabaseInterface
{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    /**
     * DatabaseInterface constructor.
     * @param $db_name nom de la base de données
     * @param string $db_user nom de l'utilisateur
     * @param string $db_pass mot de passe
     * @param string $db_host adresse du serveur de la base de données
     */
    public function __construct($db_name, $db_user, $db_pass, $db_host)
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host; 
    }

    /**
     * @return PDO
     */
    private function getPDO()
    {
        if($this->pdo === null)
        {
            $pdo = new PDO('mysql:dbname='. $this->db_name .';host=' . $this->db_host, $this->db_user, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    /**
     * @param $statement
     * @param null $class_name
     * @param bool $one
     * @return array|mixed
     */
    public function query($statement, $class_name = null, $one = false)
    {
        $req = $this->getPDO()->query($statement);

        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0
        ){
            return $req;
        }

        if($class_name === null)
        {
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }

        if($one)
        {
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();
        }
        return $datas;
    }

    /**
     * Utilisée pour requêtes paramétrées
     *
     * @param $statement
     * @param $attributes
     * @param null $class_name
     * @param bool $one
     * @return mixed
     */
    public function prepare($statement, $attributes, $class_name = null, $one = false)
    {
        $req = $this->getPDO()->prepare($statement);
        $result = $req->execute($attributes);

        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0
        ){
            return $result;
        }

        if($class_name === null)
        {
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }

        if($one){
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();
        }
        return $datas;
    }

    /**
     * Obtenir l'identifiant de la dernière enregistrement inséré
     * @return string
     */
    public function lastInsertId()
    {
        return $this->getPDO()->lastInsertId();
    }

}