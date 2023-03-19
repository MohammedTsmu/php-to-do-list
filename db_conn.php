<?php

$sName = "localhost";
$uName = "root2";
$pass = "1234";
$db_name = "to_do_list";

try {
  $conn = new PDO(
    "mysql:host=$sName;dbname=$db_name",
    $uName,
    $pass
  );
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed : " . $e->getMessage();
}
