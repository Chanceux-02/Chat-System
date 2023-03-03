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
  
  $showData = new Show();

  $pairChat = $showData->userChat($guest_id1, $creator_id1, $creator_id, $guest_id);

  $test = $pairChat->fetchAll(PDO::FETCH_ASSOC);
  $messages = "";
  // print_r($test);

  foreach ($test as $row) {
      if($row['creator_id'] == $creator_id){
        $userMessages = "
        <div class='d-flex justify-content-end'>
          <div>
            <span class='fw-lighter text-dark ps-1'>". $row['creator_name'] . "</span>
            <p class='bg-primary'>". $row['messages']. "</p>
          </div>
        </div>
      ";
      $messages.= $userMessages;
      }else{
          $rowUser = "    
          <div class='d-flex justify-content-start flex-column'>
            <span class='fw-lighter text-dark ps-1'>". $row["creator_name"] . "</span>
            <p class='bg-primary mt-0'>". $row["messages"]. "</p>
          </div>
        ";
        $messages.= $rowUser;
      }

  }
  
  echo $messages;

  //   while ($other = $pairChat->fetch(PDO::FETCH_ASSOC)) {
  //         if($other['creator_id'] == $creator_id){
  //             $userMessages = "
  //             <div class='d-flex justify-content-end'>
  //               <div>
  //                 <span class='fw-lighter text-dark ps-1'>". $other['creator_name'] . "</span>
  //                 <p class='bg-primary'>". $other['messages']. "</p>
  //               </div>
  //             </div>
  //         ";
  //         $messages.= $userMessages;
  //         }else{
  //             $otherUser = "    
  //             <div class='d-flex justify-content-start flex-column'>
  //               <span class='fw-lighter text-dark ps-1'>". $other["creator_name"] . "</span>
  //               <p class='bg-primary mt-0'>". $other["messages"]. "</p>
  //             </div>
  //           ";
  //           $messages.= $otherUser;
  //         }


  // }
    
?>