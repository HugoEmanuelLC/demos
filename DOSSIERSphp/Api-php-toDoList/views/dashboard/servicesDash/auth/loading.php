<?php

require(VIEWS . 'servicesUrl' . DIRECTORY_SEPARATOR . 'url.php');
$http = $urlDash;

// sleep(1);

header('Location:'.$http.'/home');

?>
