<?php

function find_all_salamanders() {
  global $db;
  $sql = "SELECT * FROM salamander ";
  $sql .= "ORDER BY name ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result, $sql);
  return $result;
}

function find_salamander_by_id($id) {
  global $db;
  $sql = "SELECT * FROM salamander ";
  $sql .= "WHERE id='" . $id . "'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}

function insert_salamander($name, $habitat, $description) {
  global $db;

  $sql = "INSERT INTO salamander ";
  $sql .= "(name, habitat, description) ";
  $sql .= "VALUES (";
  $sql .= "'" . $name . "',";
  $sql .= "'" . $habitat . "',";
  $sql .= "'" . $description . "'";
  $sql .= ")";
  $result = mysqli_query($db, $sql);

  if($result) {
    return true;
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}

function delete_salamander($salamander) {
  if(is_post_request()) {
    $sql = "DELETE FROM salamander ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);

    if($result) {
      redirect_to(url_for('/salamanders/index.php'));
    } else {
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
}
