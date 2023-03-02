<?php

session_start();

if (isset($_POST['submit'])) {
    
    include '../classes/Db.class.php';
    include '../classes/models/User.mod.php';
    include '../classes/controllers/PairChat.con.php';

    $message = $_POST['message'];
    $addUserId = $_GET['id'];
    
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_email'];
    
    $chatName = $user_name ."-". $addUserId ."-".  $user_id;

    // echo $message .'<br>'. $creatorId .'<br>'. $chatName .'<br>'. $addUserId;

    // print_r($chat_id);

    $obj = new PairChatCon($chatName, $user_id, $addUserId, $message);

    $obj->insertDataPair();
    $addUserId = $_GET['id'];
    header("Location: ../one-on-one-chat.php?id=$addUserId");

}