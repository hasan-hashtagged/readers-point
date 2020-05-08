<?php
  $host='localhost';
  $user='hasan';
  $psswd='asdf';
  $db='test';
  $mysqli=mysqli_connect($host,$user,$psswd,$db);
  $mysqli->query('
  CREATE TABLE `users`
  (
    `st_id` VARCHAR(10) NOT NULL PRIMARY KEY,
    `fname` VARCHAR(10) NOT NULL,
    `lname` VARCHAR(10) NOT NULL,
    `email` VARCHAR(20) NOT NULL,
    `password` VARCHAR(255) NOT NULL
  );') or die($mysqli->error);
  $mysqli->query('
  CREATE TABLE `test`.`book`
  (
    `o_id` varchar(10) NOT NULL,
    `name` varchar(20) NOT NULL,
    `thmumbs` BLOB,
    `Is_lent` BOOL NOT NULL DEFAULT 0,
    `l_id` VARCHAR(10),
    PRIMARY KEY(`o_id`,`name`)
  );') or die($mysqli->error);
?>
