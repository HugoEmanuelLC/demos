<?php
// require_once(VIEWS . 'dashboard/servicesDash/crud' . DIRECTORY_SEPARATOR . 'serviceCrud.php');
$ICON = SCRIPTS . 'images/';
?>

<!DOCTYPE html>
<html lang="fr">

<?php require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'head.php'); ?>


<body>

    <div id="appDash" class="page">

        <?php require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'header.php'); ?>

        <div class="box_contenue">
            <?php require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'sideLeft.php'); ?>
            <div class="contenue">
                <?= $content = (isset($content)) ? $content : "lien interrompue" ?>
            </div>
        </div>

        <?php require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'footer.php'); ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="<?= SCRIPTS . 'js/appDash.js' ?>"></script>
</body>

</html>