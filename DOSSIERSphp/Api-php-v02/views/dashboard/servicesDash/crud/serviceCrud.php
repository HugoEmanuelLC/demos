<?php

use App\dashboard\models\Delets;
use App\dashboard\models\Inserts;
use App\dashboard\models\Selects;
use App\dashboard\models\Updats;

$req = new Selects();
$update = new Updats();
$newdate = new Inserts();
$deldate = new Delets();


$listDesMenus = $req->selectMenus();

if (isset($_POST['delItemID'])) {

    $idDelItem=$_POST['delItemID'];

    // print_r('---ID-----' .$idDelItem .'-----------');
    
    $deldate->deleteitemMenu($idDelItem);
    
}else{}

if (isset($_POST['nomUpd']) && isset($_POST['prixUpd']) && isset($_POST['idUpd'])) {

    $idUpd=$_POST['idUpd'];
    $nomUpd=$_POST['nomUpd'];
    $prixUpd=$_POST['prixUpd'];

    $update->updateListMenu($idUpd, $nomUpd, $prixUpd);

    // printf('C EST FAIT-'.$idUpd.'-'.$nomUpd.'-'.$prixUpd);
    // print_r('test ici-'.[$itemsUpd]);

}else{}
if (isset($params[0]) && isset($_POST['nomNew']) && isset($_POST['prixNew'])) {

    $idNew=$params[0];
    $nomNew=$_POST['nomNew'];
    $prixNew=$_POST['prixNew'];

    $newdate->newdate($idNew, $nomNew, $prixNew);

    // echo $msgNew = "Nouveau article ajoute";
    // printf('C EST FAIT-'.$idNew.'-'.$nomNew.'-'.$prixNew);

} else {}


if (isset($params[0])) {
    $produitsDuMenu = $req->produitsDuMenu($params[0]);
}else{}



