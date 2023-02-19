<?php

if (isset($_POST['submit'])) {
    
    include '../classes/Db.class.php';
    include '../classes/models/User.mod.php';
    include '../classes/controllers/Login.con.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $obj = new LoginCon($email, $password);

    $obj->loginUser();

    // header("Location: ../index.php?login=successful!");


}