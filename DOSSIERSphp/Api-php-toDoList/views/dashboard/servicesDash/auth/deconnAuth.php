<?php 
if (isset($_SESSION["AUTH"]) && $_SESSION["AUTH"] == "auth" ) {
    
    $_SESSION["AUTH"] = "false";
    $msgDeconnecter = "vous avez été deconnecter";
} 
?>