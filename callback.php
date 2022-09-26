<?php
require_once "php/init.php";

$linkedin -> getAccessToken($_GET['code']);

$profile = $linkedin -> getPerson();
$emailObject = $linkedin -> getEmail();

echo 'ID: ';
echo $profile -> id;
echo "<br> nombres: ";
echo $profile -> localizedFirstName; //Nombres
echo "<br> apellidos: ";
echo $profile -> localizedLastName; //Apellidos
echo "<br> email: ";
echo $emailObject -> elements[0] -> {"handle~"} -> emailAddress;//email
?>