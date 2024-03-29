<?php require_once('../../private/initialize.php');

$salamanders = [
  ['id' => '1', 'salamanderName' => 'Red-Legged Salamander'],
  ['id' => '2', 'salamanderName' => 'Pigeon Mountain Salamander'],
  ['id' => '3', 'salamanderName' => 'ZigZag Salamander'],
  ['id' => '4', 'salamanderName' => 'Slimy Salamander'],
];

// Add the pageTitle for salamanders
$pageTitle = 'Salamanders';

// Include a shared path to the salamander header
include(SHARED_PATH . '/salamander-header.php');
?>

<h1>Salamanders</h1>

  <a href="<?= urlFor('/salamanders/new.php'); ?>">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php foreach($salamanders as $salamander) { ?>
        <tr>
          <td><?= $salamander['id']; ?></td> 
          <td><?= $salamander['salamanderName']; ?></td>
          <!-- Use url_for with show.php AND h(u) with the salamander['id'] -->
          <td><a href="<?= urlFor('/salamanders/show.php?id=' . $salamander['id']); ?>">View</a></td>
          <td><a href="<?= urlFor('/salamanders/edit.php'); ?>">Edit</a></td>
          <td><a href="#">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
