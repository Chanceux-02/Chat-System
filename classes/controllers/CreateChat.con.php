<?php

class CreateChatCon extends User {
  private $chatName, $usersId, $creatorId, $chat_id;

  public function __construct($chatName, $usersId, $creatorId, $chat_id) {
    $this->chatName = $chatName;
    $this->usersId = $usersId;
    $this->creatorId = $creatorId;
    $this->chat_id = $chat_id;
  }

  public function createChat(){
    $this->insertChat( $this->chatName, $this->usersId, $this->creatorId, $this->chat_id);
  }
}