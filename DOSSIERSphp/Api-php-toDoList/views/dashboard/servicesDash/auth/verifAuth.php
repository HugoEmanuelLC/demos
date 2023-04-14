<?php
    
require(VIEWS . 'servicesUrl' . DIRECTORY_SEPARATOR . 'url.php');
$http = $urlDash;

if (!isset($_SESSION["AUTH"])) {
        // echo 'probleme';
    header('Location:'.$http.'?msg=Vous devez vous connecter avant!');  

    // echo "je suis dans l' IF";
}
elseif (isset($_SESSION["AUTH"]) && $_SESSION["AUTH"] == "false") {
    // echo 'probleme';
        
    header('Location:'.$http.'?msg=Vous devez vous connecter à nouveau!');
}
else{
    // echo 'probleme';
    // echo "je suis dans l' ELSE";
}
    
?>