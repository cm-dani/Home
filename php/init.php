<?php
use LinkWClan\linkedIn;
require_once "linkedIn.php";

$app_id = "7894ah40ix69ad";
$app_secret = "3hs4rnPceHrmLJT8";
$callback = "http://localhost:8080/callback.php";//redireccionamiento una vez se ingreso con linkedin
$scopes = "r_emailaddress r_liteprofile";
$ssl = false;

$linkedin = new LinkedIn($app_id, $app_secret, $callback, $scopes, $ssl);
?>