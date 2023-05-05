<?php 
require_once('../../private/initialize.php'); 

if (!isset($_GET['id'])) {
    redirect_to(url_for('salamanders/index.php'));
}
$id = $_GET['id'];

if (is_post_request()) {
  $salamander = [];
  $salamander['id'] = $id;
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = update_salamander($salamander);
  redirect_to(url_for('/salamanders/show.php?id=' . $id));
} else {
  $salamander = find_salamander_by_id($id);
}

$pageTitle = "Edit Salamander";
include (SHARED_PATH . '/salamander-header.php');
?>
<a href= "<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<h1>Edit Salamander: <?= $salamander['name']; ?></h1>
<!-- add label -->
<form action="<?= url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
    <label for="name">Name</label><br>
    <input type="text" name="name" value="<?= h($salamander['name']); ?>"/><br>
    
    <label for="habitat">Habitat</label><br>
    <textarea id="habitat" name="habitat" rows="6" cols="50"><?= h($salamander['habitat']); ?></textarea><br>

    <label for="description">Description</label><br>
    <textarea id="description" name="description" rows="6" cols="50"><?= h($salamander['description']); ?></textarea><br>
    
    <input type="submit" value="Edit Salamander"/>
</form>

 <?php include(SHARED_PATH . '/salamander-footer.php'); ?>