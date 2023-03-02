<?php

class CreateChatCon extends User {
  private $chatName, $usersId, $creatorId;

  public function __construct($chatName, $usersId, $creatorId) {
    $this->chatName = $chatName;
    $this->usersId = $usersId;
    $this->creatorId = $creatorId;
  }

  public function createChat(){
    $this->insertChat( $this->chatName, $this->usersId, $this->creatorId);
  }
}