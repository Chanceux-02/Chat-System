<?php

session_start();

if (isset($_POST['submit'])) {
    
    include '../classes/Db.class.php';
    include '../classes/models/User.mod.php';
    include '../classes/controllers/User.con.php';

    $message = $_POST['message'];
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_email'];

    // print_r($user_id);

    $obj = new UserCOn($message, $user_id, $user_name);

    $obj->insertData();
    
    header("Location: ../index.php?sent");

}