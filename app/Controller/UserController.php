<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 12/6/18
 * Time: 2:25 PM
 */

namespace App\Controller;

use \App;

use Core\Controller\Controller;
use Core\Security\Auth;
use Core\Form\BootstrapForm;

use App\Service\ContainerService;

/**
 * Class UserController
 * @package App\Controller
 */
class UserController extends Controller
{
    private $table;

    /**
     * UserController constructor.
     * @param ContainerService $container
     */
    public function __construct(ContainerService $container)
    {
        parent::__construct($container);
        $this->table = $this->container->getTable('user');
    }

    /**
     * Authentification d'un utilisateur
     */
    public function login()
    {
        unset($_SESSION['auth']);

        $failed = false;

        if(!empty($_POST))
        {
            if($this->container->getAuth()->login($_POST["username"], $_POST["password"]))
            {
                header("Location: index.php?p=contact.list");
            }else{
                $failed = true;
            }
        }

        $this->render('user/login.html.twig', [
            'failed' => $failed
        ]);
    }

    /**
     * Déconnexion d'un utilisateur
     */
    public function logout()
    {
        if($this->container->getAuth()->logout()){
            header("Location: index.php?p=user.login");
        }
    }

    /**
     * Ajouter un nouvel utilisateur
     */
    public function add()
    {
        $message ="";
        $success = false;
        if(!empty($_POST)){
            $user = $this->table->findByUsername($_POST['username']);
            if($user){
                $message = "Pseudo non disponible!";
            }else{
                $result = $this->table->create([
                    'username' => $_POST['username'],
                    'password' => $_POST['password']
                ]);
                if($result){
                    $success = true;
                    header('Location: index.php?p=user.login');
                } else {
                    $success = false;
                }
            }
        }

        $this->render('user/add.html.twig', [
            'success' => $success,
            'message' => $message
        ]);
    }

}