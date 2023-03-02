<?php

if (isset($_POST['submit'])) {
    
    include '../classes/Db.class.php';
    include '../classes/models/User.mod.php';
    include '../classes/controllers/Register.con.php';

    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $obj = new RegisterCon($fullname, $email, $password);

    $obj->reg();
    
    header("Location: ../login-form.php?register=successful!");

}