<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 1/29/19
 * Time: 11:03 PM
 */

namespace App\Controller;

use App\Entity\ContactEntity;
use App\Service\Palindrome;
use App\Service\ContainerService;
use Core\Controller\Controller;

/**
 * Class ContactController
 * @package App\Controller
 */
class ContactController extends Controller
{

    use Palindrome;

    private $table;

    /**
     * ContactController constructor.
     * @param ContainerService $container
     */
    public function __construct(ContainerService $container)
    {
        parent::__construct($container);
        $this->table = $this->container->getTable('contact');
    }

    /**
     * Lister les contacts d'un utilisteur
     */
    public function list()
    {
        $contacts = $this->table->getAllByUserId($_SESSION['auth']);

        $this->render('contact/list.html.twig', [
            'username' => $_SESSION['username'],
            'userid' => $_SESSION['auth'],
            'contacts' => $contacts
        ]);
    }

    /**
     * Créer un nouvel contact
     */
    public function create()
    {
        if(!empty($_POST))
        {
            $contact = new ContactEntity();
            $contact->fetch($_POST["nom"], $_POST["prenom"], $_POST["email"],null, $_SESSION['auth']);
            $contact->normalize();
            if($this->table->create($contact))
            {
                header('Location: index.php?p=contact.list');
            }
        }

        $this->render('contact/create.html.twig', [
            'username' => $_SESSION['username'],
            'userid' => $_SESSION['auth'],
            "urlrest" => URL_REST
        ]);
    }

    /**
     * Editer un contact
     */
    public function edit()
    {
        $contact = $this->table->find($_GET['id']);

        $adresses = $this->container->getTable('adresse')->getAllByContactId($_GET['id']);

        $_SESSION['contactid'] = $_GET['id'];

        $this->render('contact/edit.html.twig',[
            'username' => $_SESSION['username'],
            'userid' => $_SESSION['auth'],
            "urlrest" => URL_REST,
            "contact" => $contact,
            "adresses" => $adresses
        ]);
    }

    /**
     * Modifier un contact
     */
    public function update()
    {
        if(!empty($_POST))
        {
           $contact = new ContactEntity();
           $contact->fetch($_POST['nom'], $_POST["prenom"], $_POST["email"], $_SESSION['contactid']);
           $contact->normalize();
           var_dump($contact);
           if($this->table->update($_SESSION['contactid'], $contact))
           {
               header('Location: index.php?p=contact.list');
           }
        }


    }

    /**
     * Vérifier si le nom d'un contact est un palindrome. Appel ajax et retourne un JSON
     */
    public function checkContactName()
    {
        header('Content-Type: application/json');

        $contactName = $_POST['nom'];

        $res = "";

        if(Palindrome::isPalindrome($contactName))
        {
            $res = json_encode(["code_status" => 0, "message" => "Nom de contact non valide : Palindrome"]);

        } else {

            $res = json_encode(["code_status" => 1, "message" => "Nom de contact valide"]);

        }

        echo $res;
    }

}