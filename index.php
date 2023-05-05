<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
  $url1 = 'phase01/';
  $url2 = 'phase02/';
  $url3 = 'phase03/';
  $url4 = 'phase04/';
  $url5 = 'phase05/';
  $urlHome = '../web182/';
} elseif ($_SERVER['SERVER_NAME'] == 'web182.noidofbuenavista.click') {
  $url1 = 'https://web182.noidofbuenavista.click/sas/phase01/public';
  $url2 = 'https://web182.noidofbuenavista.click/sas/phase02/public';
  $url3 = 'https://web182.noidofbuenavista.click/sas/phase03/public';
  $url4 = 'https://web182.noidofbuenavista.click/sas/phase04/public';
  $url5 = 'https://web182.noidofbuenavista.click/sas/phase05/public';
  $urlHome = 'https://web182.noidofbuenavista.click/index.html';
}

// I couldn't get my page on Siteground to go to "...click/sas/phase0X/" it was redirecting to "...click/phase0X" so I used this if/elseif statement.
// I'm also not sure if my index page at "...click/sas/" was the most current version and not a cached one since I reuploaded it so many times.

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Web182 - SAS</title>
    <link href="css/main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <h1>Southern Appalachian Salamanders</h1>
    <p>This is the home page for the Southern Appalachian Salamanders project phases.</p>

    <ul>
      <li><a href="<?= $url1; ?>">Phase01</a></li>
      <li><a href="<?= $url2; ?>">Phase02</a></li>
      <li><a href="<?= $url3; ?>">Phase03</a></li>
      <li><a href="<?= $url4; ?>">Phase04</a></li>
      <li><a href="<?= $url5; ?>">Phase05</a></li>
    </ul>

    <p><a href="<?= $urlHome; ?>">Click here</a> to return to the home page.</p>
  </body>
</html>
