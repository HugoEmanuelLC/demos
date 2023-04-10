<?php

$afficherProduits = "";
$msgEdite = "Produit modiffier";
$msgNew = "Nouveau article ajoute";
$indiceNewName = "";

$URL = $urlDash;

if (isset($produitsDuMenu)) {

    $indice = 0;

    foreach ($produitsDuMenu as $Produit) {

        if (isset($params[0]) && $params[0] == $Produit[5]) {
            $titreMenu = ucwords($Produit['NAME']);
            $imageMenu = $Produit['URL_IMG'];
        } else {
            $titreMenu = "error";
            $imageMenu = "error";
        }


        // $afficherProduits .= '';
        $indice = $indice + 1;

        $nomProduit = ucfirst($Produit[1]);

        if (isset($_POST['nomNew']) && $_POST['nomNew'] == $Produit[1]) {
            $afficherProduits .= '
                <div class="items">
                    <form action="' . $URL . '/menu/' . $Produit['menu_id'] . '#menu'.'" method="post">
                        <p style="color: green;">' . $msgNew . '</p>
                        <div>
                            <input type="hidden" name="idUpd" value="' . $Produit[0] . '">

                            <label for="nomUpd"><h3>Nom:</h3></label>
                                <input type="text" name="nomUpd" value="' . $nomProduit . '">

                            <label for="prixUpd"><h3>Prix:</h3></label>
                                <input type="text" name="prixUpd" value="' . $Produit['PRIX'] . '">
                        </div>
                        <input class="button" type="submit" value="Enregistrer">
                    </form>
                    <form class="deleteButton" action="' . $URL . '/menu/' . $Produit['menu_id'] . '" method="post">
                        
                        <button name="delItemID" value="' . $Produit[0] . '">Delete</button>
                    </form>
                </div>';

        } elseif (isset($_POST['idUpd']) && $_POST['idUpd'] == $Produit[0]) {
            $afficherProduits .= '
                <div id="menu" class="items">
                    <form action="' . $URL . '/menu/' . $Produit['menu_id'] . '#menu'.'" method="post">
                        <p style="color: green;">' . $msgEdite . '</p>
                        <div>
                            <input type="hidden" name="idUpd" value="' . $Produit[0] . '">

                            <label for="nomUpd"><h3>Nom:</h3></label>
                                <input type="text" name="nomUpd" value="' . $nomProduit . '">

                            <label for="prixUpd"><h3>Prix:</h3></label>
                                <input type="text" name="prixUpd" value="' . $Produit['PRIX'] . '">
                        </div>
                        <input class="button" type="submit" value="Enregistrer">
                    </form>
                    <form class="deleteButton" action="' . $URL . '/menu/' . $Produit['menu_id'] . '" method="post">
                        
                        <button name="delItemID" value="' . $Produit[0] . '">Delete</button>
                    </form>
                </div>';

        } else {
            $afficherProduits .= '
                <div class="items">
                    <form action="' . $URL . '/menu/' . $Produit['menu_id'] . '#menu'.'" method="post">
                        <div>
                            <input type="hidden" name="idUpd" value="' . $Produit[0] . '">

                            <label for="nomUpd"><h3>Nom:</h3></label>
                                <input type="text" name="nomUpd" value="' . $nomProduit . '">

                            <label for="prixUpd"><h3>Prix:</h3></label>
                                <input type="text" name="prixUpd" value="' . $Produit['PRIX'] . '">
                        </div>
                        <input class="button" type="submit" value="Enregistrer">
                    </form>
                    <form class="deleteButton" action="' . $URL . '/menu/' . $Produit['menu_id'] . '" method="post">
                        
                        <button name="delItemID" value="' . $Produit[0] . '">Delete</button>
                    </form>
                </div>';
        }

        // $afficherProduits .= '</form>';
    }
} else {
    $afficherProduits = "aucun Produit selectioner";
}
