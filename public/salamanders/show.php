<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$salamander = find_salamander_by_id($id);

$page_title = 'View Salamander';
include(SHARED_PATH . '/salamander-header.php'); 

?>

<div id="content">

  <a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

   <p> Page ID: <?= h($id); ?> </p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
