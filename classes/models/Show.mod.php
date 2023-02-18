<?php

class Show extends Db{

    public function showData() {
        $conn = $this->getConnection();
        // $stmt = $conn->prepare("SELECT * FROM `messages` JOIN `users`  ORDER BY messages.id DESC ");
        $stmt = $conn->prepare("SELECT * FROM `messages`  ORDER BY messages.id DESC ");
        $stmt->execute();
        // $result = $stmt->fetch();
        return $stmt;
        // print_r($result);
      }
}