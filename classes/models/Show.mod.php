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