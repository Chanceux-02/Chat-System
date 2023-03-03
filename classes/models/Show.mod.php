<?php

class Show extends Db{

    public function showAllChat() {
        $conn = $this->getConnection();
        // $stmt = $conn->prepare("SELECT * FROM `messages` JOIN `users`  ORDER BY messages.id DESC ");
        $stmt = $conn->prepare("SELECT * FROM messages ORDER BY id DESC ");
        $stmt->execute();
        // $result = $stmt->fetch();
        return $stmt;
        // print_r($result);
      }

    public function userChat($guest_id1, $creator_id1, $creator_id, $guest_id) {
        $conn = $this->getConnection();
        $stmt = $conn->prepare("SELECT * FROM groupchat 
        WHERE (guest_id IN (?, ?) AND creator_id IN (?, ?) 
          AND (guest_id IS NOT NULL AND creator_id IS NOT NULL) 
          AND guest_id <> creator_id) ORDER BY id DESC;
        ");
        $stmt->execute([$guest_id1, $creator_id1, $creator_id, $guest_id]);
        return $stmt;
      }

    public function users() {
        $conn = $this->getConnection();
        // $stmt = $conn->prepare("SELECT * FROM `messages` JOIN `users`  ORDER BY messages.id DESC ");
        $stmt = $conn->prepare("SELECT * FROM users");
        $stmt->execute();
        // $result = $stmt->fetch();
        return $stmt;
        // print_r($result);
      }
}