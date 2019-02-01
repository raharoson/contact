<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 2/1/19
 * Time: 9:37 AM
 */

namespace App\Entity;


use App\Service\Palindrome;

use Core\Entity\Entity;

/**
 * Class ContactEntity
 * @package App\Entity
 */
class ContactEntity extends Entity
{
    use Palindrome;

    public $nom;
    public $prenom;
    public $email;
    public $userid;

    /**
     * @param $nom nom du contact
     * @param $prenom prenom du contact
     * @param $email adresse email du contact
     */
    public function fetch($nom, $prenom, $email, $id = null, $userid = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->userid = $userid;
    }

    /**
     * Mettre toutes les valeurs des attributs en majuscule
     */
    public function normalize()
    {
        $this->nom = ucfirst(strtolower($this->nom));
        $this->prenom = ucfirst(strtolower($this->prenom));
        $this->email = strtolower($this->email);
    }

}