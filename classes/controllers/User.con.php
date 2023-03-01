<?php

class UserCOn extends User {
  private $message,  $user_id, $user_name;

  public function __construct($message, $user_id, $user_name) {
    $this->message = $message;
    $this->user_id = $user_id;
    $this->user_name = $user_name;
  }

  public function insertData(){
    $this->insert($this->message, $this->user_id, $this->user_name);
  }
}