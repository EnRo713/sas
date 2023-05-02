<?php 
require_once('../../private/initialize.php'); 

if (is_post_request()) {
    $name = $_POST['name'];
    echo "Salamander Name: $name";
} else {
   // redirect_to(url_for('/salamanders/new.php'));
}

$pageTitle = "Create";
include (SHARED_PATH . '/salamander-header.php');
?>
<a href= "<?= url_for('/salamander/index.php'); ?>">&laquo; Back to List</a>
<h1>Create Salamander</h1>
<!-- add label -->
<form action="<?= url_for('/salamanders/create.php'); ?>" method="post">
    <label for="name">Name</label><br>
    <input type="text" name="name"/><br>
    <input type="submit" value="Create Salamander"/>
</form>

<?php include (SHARED_PATH . '/salamander-footer.php'); ?>