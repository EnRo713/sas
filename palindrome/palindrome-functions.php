<?php

function removeSpaces($input) {
  global $inputModify;
  $inputModify = str_replace(' ', '', $input);
  return $inputModify;
}

function removePunctuation($input) {
  global $inputModify;
  $inputModify = preg_replace('/[^A-Za-z0-9\-]/', '', $input);
  return $inputModify;
}

?>
