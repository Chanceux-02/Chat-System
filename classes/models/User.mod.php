<?php

class User extends Db{

    public function insert($message) {
        $conn = $this->getConnection();
        $stmt = $conn->prepare("INSERT INTO user (`message`) VALUES (?);");
        $stmt->execute([$message]);
        // $result = $stmt->fetch();
        // return $stmt;
        // print_r($result);
      }
}