<?php
ob_start(); //Turns on output buffering
session_start();
date_default_timezone_set("America/New_York");

try {
  $con = new PDO("mysql:dbname=sheepflix;host=localhost", "root", "");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOexception $e) {
  exit("Connection failed" . $e->getMessage());
}
?>