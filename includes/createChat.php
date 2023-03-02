<?php
session_start();




include '../classes/Db.class.php';
include '../classes/models/User.mod.php';
include '../classes/controllers/CreateChat.con.php';

$users = $_POST['selectUsers'];
$usersId = $_POST['addedUserId'];

$creatorId = $_SESSION["user_id"];
$creatorName = $_SESSION["user_email"];

//create a another session name that will pass the id to other file
$_SESSION["guest"] = $usersId;

$guest = $_SESSION["guest"];

// print_r($guest);

//create a chat id
$chat_id = $creatorId ."-". $usersId;

//combine the users name
$chatName = $users ."-". $creatorName;


$obj = new CreateChatCon($chatName, $usersId, $creatorId, $chat_id);

$obj->createChat();

header("location: ../one-on-one-chat.php?pairChat");
// echo $chatName;
// echo $users . '<br>' . $usersId . '<br>' . $creatorId . '<br>' . $creatorName;