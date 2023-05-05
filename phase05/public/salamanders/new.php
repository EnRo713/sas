<?php 
require_once('../../private/initialize.php');

if(is_post_request()) {
  $salamander['name'] = h($_POST['name']) ?? '';
  $salamander['habitat'] = h($_POST['habitat']) ?? '';
  $salamander['description'] = h($_POST['description']) ?? '';
  
  $result = insert_salamander($salamander);

  if($result === true) {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/salamanders/show.php?id=' . $new_id));
  } else {
    $errors = $result;
  }

} else {

}

$pageTitle = "Create";
include (SHARED_PATH . '/salamander-header.php');
?>

<a href= "<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<h1>Create Salamander</h1>

<?= display_errors($errors); ?>
<form action="<?= url_for('/salamanders/new.php'); ?>" method="post">
  <label for="name">Name</label><br>
  <input type="text" name="name"/><br>

  <label for="habitat">Habitat</label><br>
  <textarea id="habitat" name="habitat" rows="6" cols="50"></textarea><br>

  <label for="description">Description</label><br>
  <textarea id="description" name="description" rows="6" cols="50"></textarea><br>

  <input type="submit" value="Create Salamander">
</form>

<?php include (SHARED_PATH . '/salamander-footer.php'); ?>