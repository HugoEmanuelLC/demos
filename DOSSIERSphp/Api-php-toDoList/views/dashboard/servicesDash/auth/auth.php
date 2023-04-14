<?php
session_start();

require(VIEWS . 'servicesUrl' . DIRECTORY_SEPARATOR . 'url.php');
$http = $urlDash;

use App\authentification\Auth;

$verif = new Auth();

$result = $verif->veriffication($_POST['usr'], $_POST['psw']);

if (!empty($result)) {

    $_SESSION["AUTH"] = "auth";
    
    header('Location:'.$http.'/loading');

}else{

    header('Location:'.$http.'?msg=invalide');
}