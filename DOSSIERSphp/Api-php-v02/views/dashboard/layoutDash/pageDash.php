<?php
session_start();

require(VIEWS . 'dashboard/servicesDash/auth' . DIRECTORY_SEPARATOR . 'verifAuth.php');
require_once(VIEWS . 'dashboard/servicesDash/crud' . DIRECTORY_SEPARATOR . 'serviceCrud.php');
require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'produitsMenu.php');
require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'listMenus.php');
// require(VIEWS . 'dashboard/servicesDash/crud' . DIRECTORY_SEPARATOR . 'serviceCrud.php');

$titreMenu = (isset($titreMenu)) ? $titreMenu : false;

$keywords = '';
$description = '';
$descriptitle = $titreMenu ;

$homeLink = $urlDash;

?>

<div class="contenue_head">
    <div>
        <!--<a class="color1" href="#!">sous item</a>
        <a class="color2" href="#!">sous item</a>
        <a class="color3" href="#!">sous item</a>
        <a class="color1" href="#!">sous item</a>-->

        <?= $afficherMenu; ?>
    </div>
</div>

<div class="contenue_body">

    
    <?php 
        if (isset($params[0])) {
            require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'insertionProduit.php');
        }
    ?>



        
    <h1><?= $descriptitle ; ?></h1>
    <div class="box_items">

        <?= $afficherProduits = (isset($afficherProduits)) ? $afficherProduits : "probleme avec la list de produits"; ?>

    </div>

</div>