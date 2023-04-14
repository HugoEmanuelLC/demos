<div class="itemNew">

    <h2>Ajouter des nouveaux articles:</h2>

    <form action="<?= $URL . '/menu/' . $Produit['menu_id'] ?>" method="post">
        <div>
            <label for="nomNew">
                <h3>Nom :</h3>
            </label>
            <input type="text" name="nomNew" value="">

            <label for="prixNew">
                <h3>Prix :</h3>
            </label>
            <input type="text" name="prixNew" value="">
        </div>
        <input class="button" type="submit" value="Envoyer">
    </form>

    <h2>Modifier ou supprimer des articles</h2>
</div>

