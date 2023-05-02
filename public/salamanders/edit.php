<?php 
require_once('../../private/initialize.php'); 

if (!isset($_GET['id'])) {
    redirect_to(url_for('salamanders/index.php'));
}
$id = $_GET['id'];
$name = '';
if (is_post_request()) {
    $name = $_POST['name'];
    echo "Salamander Name: $name<br>";
} 

$pageTitle = "Edit";
include (SHARED_PATH . '/salamander-header.php');
?>
<a href= "<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<h1>Edit Salamander</h1>
<!-- add label -->
<form action="<?= url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
    <label for="name">Name</label><br>
    <input type="text" name="name" value="<?= $name; ?>"/><br>
    <input type="submit" value="Edit Salamander"/>
</form>

 <?php include(SHARED_PATH . '/salamander-footer.php'); ?>