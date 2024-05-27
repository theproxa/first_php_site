<?php 
$mysqli = new mysqli("localhost", "root", "root", "testbase");

$manager_ql = $mysqli->query("SELECT * FROM `meneger`");
// $manager_ql = $mysqli->fetch_all($manager_ql);
?>