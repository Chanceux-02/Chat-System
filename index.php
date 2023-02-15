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
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<body>
<div class="chat-container">
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
    </div>

    <script src="js/main.js"></script>
</body>
</html>

