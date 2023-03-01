<?php
session_start();

$users = $_POST['selectUsers'];
$usersId = $_POST['addedUserId'];

$creatorId = $_SESSION["user_id"];
$creatorName = $_SESSION["user_email"];


// echo $users . '<br>' . $usersId . '<br>' . $creatorId . '<br>' . $creatorName;