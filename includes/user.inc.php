<?php

if (isset($_POST['submit'])) {
    
    include '../classes/Db.class.php';
    include '../classes/models/User.mod.php';
    include '../classes/controllers/User.con.php';

    $message = $_POST['message'];

    $obj = new UserCOn($message);

    $obj->insertData();
    
    header("Location: ../index.php?sent");

}