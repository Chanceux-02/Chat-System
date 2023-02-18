<?php 
  include 'classes/Db.class.php';
  include 'classes/models/Show.mod.php';

  $db = new Db();
  $conn = $db->getConnection();

  $showData = new Show();
  $data = $showData->showData();

  // print_r($fetch = $data->fetchAll(PDO::FETCH_ASSOC));

  // print_r($conn)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat System</title>
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="css/newmain.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<body>

<div class="wrapper">
  <div class="second-wrapper">
      <!-- header -->
    <header class="header">
        <div class="bg-primary p-2 d-flex justify-content-center">
            <span class="online"></span><p class="text-center text-light fs-6">Jhon Doe</p>
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

