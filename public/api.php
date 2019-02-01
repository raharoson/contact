<?php

//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$res = "";

if (!empty($_GET) && isset($_GET['email'])) {

    if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {

        $res = json_encode(['code_status' => 0, 'message' => 'adresse email non valide']);

    } else {

        $res = json_encode(['code_status' => 1, 'message' => 'adresse email valide']);

    }
}

echo $res;