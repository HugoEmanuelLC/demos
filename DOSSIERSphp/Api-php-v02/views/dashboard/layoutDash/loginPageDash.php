<?php
session_start();

require(VIEWS . 'servicesUrl' . DIRECTORY_SEPARATOR . 'url.php');
$http = $urlDash . "/auth";

$msg = "";

//HEAD
$keywords = '';
$description = '';
$descriptitle = 'Dashboard | Login';

// $backUrlStyle = "../";
// $page_dashboard = "page_dash" ." testCss";  //control de div parent main.php
//$_SESSION["background_image"] =  'black-stars.jpg';    //fond d'ecran de div parent main.php
// $backUrlStyle = (isset($_GET['msg'])) ? '../' : false;
// require('../views/dashboard/fragments/navbar.php');
// require_once('../views/dashboard/services/deconnAuth.php');
$imgBackgroundPageProduit = '';//http://localhost/projets/dashboard/
require(VIEWS . 'dashboard/servicesDash/auth' . DIRECTORY_SEPARATOR . 'deconnAuth.php');

?>



<!DOCTYPE html>
<html lang="fr">

<?php require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'head.php'); ?>

<body>
    <div id="page">
        <div class="contenu_login" >
            <div class="dark_opos">
                <div class="login">
                    <div class="titre_loguin">
                        <h1><?= $descriptitle ?> </h1>
                        <h3><?= $msg = (isset($_GET["msg"])) ? $_GET["msg"] : false; ?></h3>
                        <h3><?= $msgDeconnecter = (isset($msgDeconnecter)) ? $msgDeconnecter : false; ?></h3>
                    </div>

                    <form action="<?= $http; ?>" method="post">
                        <div class="usr">
                            <label for="usr"><i class="fa-solid fa-user"></i></label>
                            <input type="text" name="usr" >
                        </div>

                        <div class="psw">
                            <input type="password" name="psw" >
                            <label for="psw"><i class="fa-solid fa-unlock"></i></label>
                        </div>
                        <br>
                        <div class="button_loguin_submit">
                            <button type="submit">Connection</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>