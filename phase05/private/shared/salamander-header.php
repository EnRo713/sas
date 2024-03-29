<?php
  if(!isset($page_title)) { $page_title = 'Salamanders'; }
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>SAS - <?= h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?= url_for('/stylesheets/salamanders.css'); ?>">
  </head>

  <body>
    <header>
      <h1><a href="<?= url_for('/'); ?>">Southern Appalachian Salamanders (SAS)</a></h1>
    </header>
    <navigation>
      <ul>
      <li><a href="<?= url_for('salamanders/'); ?>">Salamanders</a></li>
      </ul>
    </navigation>

