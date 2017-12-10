<?php

/* 
    Demo API - V1
*/


include('config.php');

$triedkey=$_GET['key'];

if ($triedkey == $apikey) {
    
/* the api key has been validated, we can now start peforming functions! */

$action=$_GET['action'];
$productid=$_GET['productid'];
    
    if($action == "getname") {
        echo("$servername");
    }
    
    if($action == "verify") {
        echo("$verificationkey");
    }

    echo("BADREQ: Action not valid.");
    exit();
    
}


echo("BADREQ: API Key mismatch");
    exit();

?>