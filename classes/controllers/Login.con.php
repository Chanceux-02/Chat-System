<?php

class LoginCon extends User {
  private $email, $password;

  public function __construct($email, $password) {
    $this->email = $email;
    $this->password = $password;
  }

  public function loginUser(){
    $this->login($this->email, $this->password);
  }
}