<?php

namespace App\Service;

/**
 * Service de la validation d'une adresse email
 * Class EmailService
 * @package App\Service
 */
class EmailService
{
    /**
     * Vérifier si une adresse email est valide
     */
    public static function isEmailValid()
    {
        //Headers
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');

        $res = "";

        if (!empty($_POST) && isset($_POST['email'])) {

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

                $res = json_encode(['code_statut' => 0, 'message' => 'adresse email non valide']);

            } else {

                $res = json_encode(['code_statut' => 1, 'message' => 'adresse email valide']);

            }
        }

        return $res;
    }

}


