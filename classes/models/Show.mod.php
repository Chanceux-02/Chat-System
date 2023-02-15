<?php

class Show extends Db{

    public function showData() {
        $conn = $this->getConnection();
        $stmt = $conn->prepare("SELECT * FROM `user`");
        $stmt->execute();
        // $result = $stmt->fetch();
        return $stmt;
        // print_r($result);
      }
}