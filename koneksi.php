<?php 
$mysqli = new mysqli('localhost', 'root', '', 'db_toko_uas');

if($mysqli->connect_errno){
  echo "failed to connect to MYSQL " . $mysqli->connection_error;
  exit();
}