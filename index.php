<?php
$servername = "sql308.infinityfree.com";
$username = "if0_36972160";
$password = "86VWqIT2HtB";

try {
  $conn = new PDO("mysql:host=$servername;dbname=if0_36972160_mirejder", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

 $sorgu = $baglanti->query("INSERT INTO data(username, mail, password, newpassword) VALUES(əmirejder, mirejder@gmai.com , 12341234, 12341234)");


?>
