<?php
  session_start();
  $user_id = $_SESSION["user_id"];
  include '../classes/Db.class.php';
  include '../classes/models/Show.mod.php';

  $db = new Db();
  $conn = $db->getConnection();

  $showData = new Show();
  //this is for all user chat
  $allChat = $showData->showAllChat();

  $messages = "";

    while ($other = $allChat->fetch(PDO::FETCH_ASSOC)) {


          if($other['user_id'] == $user_id){
              $userMessages = "
              <div class='d-flex justify-content-end'>
                <div>
                  <span class='fw-lighter text-dark ps-1'>". $other['name'] . "</span>
                  <p class='bg-primary'>". $other['messages']. "</p>
                </div>
              </div>
          ";
          $messages.= $userMessages;
          }else{
              $otherUser = "    
              <div class='d-flex justify-content-start flex-column'>
                <span class='fw-lighter text-dark ps-1'>". $other["name"] . "</span>
                <p class='bg-primary mt-0'>". $other["messages"]. "</p>
              </div>
            ";
            $messages.= $otherUser;
          }
  }

    echo $messages;
    
?>