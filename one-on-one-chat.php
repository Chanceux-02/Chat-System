<?php 
  session_start();
  include 'classes/Db.class.php';
  include 'classes/models/Show.mod.php';
  include 'classes/models/User.mod.php';

  $db = new Db();
  $conn = $db->getConnection();

  $showData = new Show();
  //this is for all user chat
  $allUser = $showData->users();
  $allUsers = $showData->users();

  include 'partials/one-on-one-chat.php' ;

?>



<div class="wrapper">
<?php

if(isset($_SESSION["user_email"])){
    echo "You are logged in " . $_SESSION["user_email"] . "!";
}else{
    echo "logged out";
}

?>
  <div class="second-wrapper">
      <!-- header -->
    <header class="header">
        <div class="bg-primary p-2 d-flex justify-content-evenly">
          <div class="p-2 d-flex justify-content-center"> <span class="online"></span><p class="text-center text-light fs-6"> <?= $_SESSION["user_email"] ?></p> </div>
           <a href="includes/logout.inc.php" class="text-light">Log out</a>

            <form action="includes/createChat.php" method="post">
              <?php           
                $users2 = $allUsers->fetch(PDO::FETCH_ASSOC);
              ?>

              <input type="hidden" name="addedUserId" id="" value="<?= $users2['id'] ?>">
              
              <select name="selectUsers" id="" placeholder="Select">
                  <option value="">Select</option>
                  <?php
                  while ($users = $allUser->fetch(PDO::FETCH_ASSOC)) {
                    $users['name'];

                    $newUserName = str_replace(" ", "-", $users);
                    ?> 
                    <option value=<?= $newUserName['name'] ?>><?= $users['name'] ?></option>
                    <?php } ?>

              </select>
              <button type="submit" name="submit">create</button>
            </form>
        </div>
    </header>
      <!-- messages -->
    <section class="messages" id="result">
        <!-- fetching data -->
    </section>
      <!-- input -->
    <section class="form-container bg-light">
        <form action="includes/user.inc.php" method="POST" class="d-flex justify-content-between message-input">
            <input type="text" name="message" placeholder="type your message" class="border border-primary rounded p-2 me-2">
            <button type="submit" name="submit" class="btn btn-primary">send</button>
        </form>
    </section>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



<!-- <div class="chat-container">
      <div class="chat-header">
        <h1>Chat Room</h1>
      </div>
      <div class="chat-messages" id="result">
        
      </div>
      <div class="chat-input">
        <form method="POST" action="includes/user.inc.php">
          <input type="text" name="message" placeholder="Type your message here">
          <button type="submit" name="submit">Send</button>
        </form>
      </div>
    </div> -->



    <script src="js/main.js"></script>
</body>
</html>

