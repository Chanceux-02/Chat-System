<?php

class Show extends Db{

    public function showData($user_id) {
        $conn = $this->getConnection();
        // $stmt = $conn->prepare("SELECT * FROM `messages` JOIN `users`  ORDER BY messages.id DESC ");
        $stmt = $conn->prepare("SELECT * FROM `messages` WHERE user_id = ?  ORDER BY messages.id DESC ");
        $stmt->execute([$user_id]);
        // $result = $stmt->fetch();
        return $stmt;
        // print_r($result);
      }

    public function showDataOthers($user_id) {
        $conn = $this->getConnection();
        // $stmt = $conn->prepare("SELECT * FROM `messages` JOIN `users`  ORDER BY messages.id DESC ");
        $stmt = $conn->prepare("SELECT * FROM messages WHERE user_id != ? ORDER BY id DESC ");
        $stmt->execute([$user_id]);
        // $result = $stmt->fetch();
        return $stmt;
        // print_r($result);
      }
    public function showAllChat() {
        $conn = $this->getConnection();
        // $stmt = $conn->prepare("SELECT * FROM `messages` JOIN `users`  ORDER BY messages.id DESC ");
        $stmt = $conn->prepare("SELECT * FROM messages ORDER BY id DESC ");
        $stmt->execute();
        // $result = $stmt->fetch();
        return $stmt;
        // print_r($result);
      }
}