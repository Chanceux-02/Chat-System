<?php

class RegisterCon extends User {
  private $name, $email, $password;

  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  public function reg(){
    $this->register($this->name, $this->email, $this->password);
  }
}