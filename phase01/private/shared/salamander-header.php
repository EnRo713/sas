<?php
  if(!isset($pageTitle)) { 
    $pageTitle = 'Salamanders'; 
  }
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>SAS - <?= h($pageTitle); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?= urlFor('/stylesheets/salamanders.css'); ?>" />
  </head>

  <body>
    <header>
      <h1><a href="<?= urlFor('/salamanders/index.php'); ?>">Southern Appalachian Salamanders (SAS)</a></h1>
    </header>
    
    <navigation>
      <ul>
        <li><a href="<?= urlFor('salamanders/'); ?>">Salamanders</a></li>
      </ul>
    </navigation>
