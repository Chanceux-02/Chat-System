<?php
  include 'classes/Db.class.php';
  include 'classes/models/Show.mod.php';

  $db = new Db();
  $conn = $db->getConnection();

  $showData = new Show();
  $data = $showData->showData();

    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

    echo '<ul>';
    echo '<li class="message">'. $row["name"] . '</li>';
    echo '<li class="message">'. $row["message"]. '</li>';
    echo '</ul>';

    }
?>