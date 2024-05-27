<?php 
require_once 'funcions.php';

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$father_name = $_POST['father_name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$maneger = $_POST['maneger'];
$password = $_POST['password'];
$comfirm_password = $_POST['comfirm_password'];
$check = $_POST['check'];
$passport = $_POST['passport'];
$propiska = $_POST['propiska'];
$dogovor = $_POST['dogovor'];

if ($check == "on"){
    $check = TRUE; 
}else {
    $check = FALSE; 
}


if ($password === $comfirm_password){

    $mysqli->query("INSERT INTO `users` (`id`, `name`, `secondname`, `email`, `manager`, `password`, `check_`, `file1`, `file2`, `file3`) VALUES (NULL, '$name', '$last_name', '$email', '$maneger', '$password', '$check', '$passport', '$propiska', '$dogovor')");
    // header('location: /');  
}


