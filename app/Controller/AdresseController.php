<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 1/29/19
 * Time: 11:03 PM
 */

namespace App\Controller;

use App\Entity\AdresseEntity;
use App\Service\ContainerService;
use Core\Controller\Controller;

/**
 * Class AdresseController
 * @package App\Controller
 */
class AdresseController extends Controller
{
    /**
     * @var \Core\Table\Table|mixed
     */
    private $table;

    /**
     * AdresseController constructor.
     * @param ContainerService $container
     */
    public function __construct(ContainerService $container)
    {
        parent::__construct($container);

        $this->table = $this->container->getTable('adresse');
    }

    /**
     * Créer une nouvelle adresse
     */
    public function create()
    {
        if(!empty($_POST))
        {
            $adresse = new AdresseEntity();

            $adresse->fetch($_POST['numrue'], $_POST["codepostal"], $_POST["ville"], $_POST["pays"], $_POST["telephone"], null, $_POST["contactid"]);

            $adresse->normalize();

            $this->table->create($adresse);
        }
    }

    /**
     * Modifier une adresse
     */
    public function update()
    {
        if(!empty($_POST))
        {
            $adresse = new AdresseEntity();

            $adresse->fetch($_POST['numrue'], $_POST["codepostal"], $_POST["ville"], $_POST["pays"], $_POST["telephone"]);

            $adresse->normalize();

            if($this->table->update($_POST['id'], $adresse)) {
               header('Location: index.php?p=contact.edit&id=' . $_SESSION['contactid']);
           };
        }


    }

}