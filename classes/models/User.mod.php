<?php


class User extends Db{

    public function insert($message, $user_id, $user_name) {
        $conn = $this->getConnection();
        $stmt = $conn->prepare("INSERT INTO messages (`messages`, `user_id`, `name`) VALUES (?,?,?);");
        $stmt->execute([$message, $user_id, $user_name]);
        // $result = $stmt->fetch();
        // return $stmt;
        // print_r($result);
      }
    public function register($name, $email, $password) {
        $conn = $this->getConnection();
        $stmt = $conn->prepare("INSERT INTO users (`name`, `email`, `password`) VALUES (?,?,?);");
        $stmt->execute([$name, $email, $password]);
        // $result = $stmt->fetch();
        // return $stmt;
        // print_r($result);
      }
    public function login($email, $password) {
        $conn = $this->getConnection();
        $stmt = $conn->prepare("SELECT * FROM users WHERE `email` = ? AND `password` = ?;");
        $stmt->execute([$email, $password]);
        $user = $stmt->fetchAll();
        if ($user) {

          $user1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
          session_start();    // if successfull ma start ang session
          $_SESSION["user_email"] = $user[0]["name"];         // dire nag assign sang session name kag gin assign sa variable
          $_SESSION["user_id"] = $user[0]["id"];         // dire nag assign sang session name kag gin assign sa variable
          // $stmt = null;
          // print_r($user);

          header("Location: ../index.php?login=successful!");
        } else {
          header("Location: ../login-form.php?login=failed!");
        }

      }
}