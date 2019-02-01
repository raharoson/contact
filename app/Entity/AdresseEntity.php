<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 2/1/19
 * Time: 12:26 PM
 */

namespace App\Entity;

use Core\Entity\Entity;

/**
 * Class AdresseEntity
 * @package App\Entity
 */
class AdresseEntity extends Entity
{
    public $numrue;
    public $codepostal;
    public $ville;
    public $pays;
    public $telephone;
    public $contactid;


    /**
     * @param $id
     * @param $numrue numero et nom de la rue ou se situe l'adresse
     * @param $ville nom de la ville ou se situe l'adresse
     * @param $pays nom du pays ou se situe l'adresse
     * @param $telephone numero téléphone
     */
    public function fetch($numrue, $codepostal, $ville, $pays, $telephone, $id = null, $contactid = null)
    {
        $this->id = $id;
        $this->numrue = $numrue;
        $this->codepostal = $codepostal;
        $this->ville = $ville;
        $this->pays = $pays;
        $this->telephone = $telephone;
        $this->contactid = $contactid;
    }

    /**
     * Mettre toutes les valeurs des attributs en majuscule
     */
    public function normalize()
    {
        $this->numrue = strtoupper($this->numrue);
        $this->ville = strtoupper($this->ville);
        $this->pays = strtoupper($this->pays);
        $this->telephone = strtoupper($this->telephone);
    }


}