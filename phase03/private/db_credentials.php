<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
  define("DB_SERVER", "localhost");
  define("DB_USER", "sally");
  define("DB_PASS", "P@ssword1234");
  define("DB_NAME", "salamanders");
} elseif ($_SERVER['SERVER_NAME'] == 'web182.noidofbuenavista.click') {
  define("DB_SERVER", "localhost");
  define("DB_USER", "um87bmeeqisao");
  define("DB_PASS", ")<d1]3l#f>*1");
  define("DB_NAME", "dbxqg5etyborxp");
}

confirm_db_connect();
