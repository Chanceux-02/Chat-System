<?php

class PairChatCon extends User {
  private $chatName, $user_id, $addUserId, $message;

  public function __construct($chatName, $user_id, $addUserId, $message) {
    $this->chatName = $chatName;
    $this->user_id = $user_id;
    $this->addUserId = $addUserId;
    $this->message = $message;
  }

  public function insertDataPair(){
    $this->insertDataPairChat($this->chatName, $this->user_id,  $this->addUserId, $this->message);
  }
}