<?php
  session_start();
  include '../classes/Db.class.php';
  include '../classes/models/Show.mod.php';

  $db = new Db();
  $conn = $db->getConnection();

  $showData = new Show();
  $data = $showData->showData();

    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

    // echo '<ul>';
    // echo '<li class="message">'. $row["name"] . '</li>';
    // echo '<li class="message">'. $row["messages"]. '</li>';
    // echo '</ul>';

    echo '<div class="d-flex justify-content-start flex-column">';
    echo '    <span class="fw-lighter text-dark ps-1">'. $row["name"] . '</span>';
    echo '    <p class="bg-primary mt-0">'. $row["messages"]. '</p>';
    echo '</div>';
    echo '<div class="d-flex justify-content-end">';
    echo '    <div>';
    echo '        <span class="fw-lighter text-dark ps-1">'. $row["name"] . '</span>';
    echo '        <p class="bg-primary ">'. $row["messages"]. '</p>';
    echo '    </div>';
    echo '</div>';

    // echo '<div class="d-flex justify-content-start flex-column">';
    // echo '<span class="fw-lighter text-dark ps-1">'. $row["name"] . '</span>';
    // echo '<p class="bg-primary mt-0">'. $row["messages"]. '</p>';
    // echo '</div>';

    }
?>