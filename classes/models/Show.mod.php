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

    // public function userChat($creator_id, $guest_id, $guest_id1, $creator_id1) {
    public function userChat() {
        $conn = $this->getConnection();
        // $stmt = $conn->prepare("SELECT * FROM `messages` JOIN `users`  ORDER BY messages.id DESC ");
        // $stmt = $conn->prepare("SELECT * FROM groupchat WHERE (`creator_id` = ? AND `guest_id` = ? ) OR (`guest_id` = ? AND `creator_id` = ?) ORDER BY id DESC;");
        $stmt = $conn->prepare("SELECT * FROM groupchat ORDER BY id DESC;");
        // $stmt->execute([$creator_id, $guest_id, $guest_id1, $creator_id1]);
        $stmt->execute();
        // $result = $stmt->fetch();
        return $stmt;
        // print_r($result);
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