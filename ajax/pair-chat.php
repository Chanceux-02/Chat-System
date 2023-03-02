<?php
  session_start();
  $creator_id = $_SESSION["user_id"];
  $guest_id =  $_SESSION["guest_id"];
  
  $creator_id1 = $_SESSION["user_id"];
  $guest_id1 =  $_SESSION["guest_id"];

  include '../classes/Db.class.php';
  include '../classes/models/Show.mod.php';

  $db = new Db();
  $conn = $db->getConnection();
  
  // print_r($guest_id);

//  print_r($chat_id);


  $showData = new Show();
  //this is for all user chat
  $allChat = $showData->showAllChat();

  $pairChat = $showData->userChat();
  // $pairChat = $showData->userChat($creator_id, $guest_id, $guest_id1, $creator_id1);
  // $test = $pairChat->fetchAll(PDO::FETCH_ASSOC);
  // echo $other['guest_id'];
  // echo "<br>";
  // echo $other['creator_id'];
  
  $messages = "";

    while ($other = $pairChat->fetch(PDO::FETCH_ASSOC)) {
          if($other['creator_id'] == $creator_id){
              $userMessages = "
              <div class='d-flex justify-content-end'>
                <div>
                  <span class='fw-lighter text-dark ps-1'>". $other['creator_name'] . "</span>
                  <p class='bg-primary'>". $other['messages']. "</p>
                </div>
              </div>
          ";
          $messages.= $userMessages;
          }else{
              $otherUser = "    
              <div class='d-flex justify-content-start flex-column'>
                <span class='fw-lighter text-dark ps-1'>". $other["creator_name"] . "</span>
                <p class='bg-primary mt-0'>". $other["messages"]. "</p>
              </div>
            ";
            $messages.= $otherUser;
          }
  }

    echo $messages;
    
?>