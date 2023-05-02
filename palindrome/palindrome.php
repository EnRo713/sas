<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Palindrome Detector</title>
    <link href="css/main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <?php
      include('palindrome-functions.php');

      $input = $_POST['input'];

      removeSpaces($input);
      removePunctuation($inputModify);

      $lowercase = strtolower($inputModify);
      $reverse = strrev($lowercase);

      if ($lowercase == $reverse) {
        echo "<h1>Palindrome Entry: Confirmed</h1>";
        echo "<p>\"$input\" <i>is</i> a palindrome.</p>";
      } 
      else {
        echo "<h1>Palindrome Entry: Rejected</h1>";
        echo "<p>\"$input\" is <i>NOT</i> a palindrome.</p>";
      }

      $palindromeExamples = array("Are we not pure? 'No, sir!' Panama's moody Noriega brags. 'It is garbage!' Irony dooms a man—a prisoner up to new era.","Yo, banana boy!","1234321","Oozy rat in a sanitary zoo.","Mom","Madam, in Eden, I'm Adam.","Ed, I saw Harpo Marx ram Oprah W. aside.","Was it a car or a cat I saw?","Taco cat","Borrow or rob?","Amore, Roma.","UFO tofu?","Sit on a potato pan, Otis!","Ah... Satan sees Natasha.","Cigar? Toss it in a can. It is so tragic.","Did Hannah see bees? Hannah did.","Oh, who was it I saw? Oh, who?","Murder for a jar of red rum","Eva, can I see bees in a cave?","Evil olive!","Poor Dan is in a droop","Step on no pets","No parts? STRAP-ON!","Do geese see God?","A Santa Lived As a Devil At NASA.","Do not tell E.T. to nod.","Never odd or even.","Neil, an alien.","Dr. Awkward","Go hang a salami, I’m a lasagna hog.","Are we not drawn onward to new era?");

      $random = array_rand($palindromeExamples);

    ?>
    <p><small>Having trouble coming up with one? Try: &quot;<?= $palindromeExamples[$random]; ?>&quot;</small></p>

    <p><a href="index.html">Return to Palindrome Detector</a></p>
  </body>
</html>
