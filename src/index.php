<?php
  $msql = '';
  try{
    $connection = new PDO('mysql:host=mysql;dbname=dbsample', 'mysql_user', 'lessSecurePassword');
    $mysql = 'MYSQL';
  } catch (Exception $e) {
    $mysql = ':( '.$e->getMessage();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
  </head>
  <body>
    NGINX - <?= 'PHP' ?> - <?= $mysql ?>
  </body>
</html>