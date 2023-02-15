<?php

class UserCOn extends User {
  private $message;

  public function __construct($message) {
    $this->message = $message;
  }

  public function insertData(){
    $this->insert($this->message);
  }
}