<?php

require_once('../../private/initialize.php');

if(is_post_request()) {
  
  $name = h($_POST['name']) ?? '';
  $habitat = h($_POST['habitat']) ?? '';
  $description = h($_POST['description']) ?? '';
  
  $result = insert_salamander($name, $habitat, $description);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/salamanders/show.php?id=' . $new_id));
} else {
  redirect_to(url_for('/salamanders/new.php'));
}

?>
