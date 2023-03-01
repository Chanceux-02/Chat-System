<?php
session_start();

include '../classes/Db.class.php';
include '../classes/models/User.mod.php';
include '../classes/controllers/CreateChat.con.php';

$users = $_POST['selectUsers'];
$usersId = $_POST['addedUserId'];

$creatorId = $_SESSION["user_id"];
$creatorName = $_SESSION["user_email"];

//combine the users name

$chatName = $users ."-". $creatorName;


$obj = new CreateChatCon($chatName, $usersId, $creatorId);

$obj->createChat();


// echo $chatName;
// echo $users . '<br>' . $usersId . '<br>' . $creatorId . '<br>' . $creatorName;