<?php

include 'Usluga.php';
include 'Rezervacija.php';
include 'dbbroker.php';

$mysqli= new Mysqli('localhost','root','root','itehdomacibaza');
$mysqli->set_charset('utf8');
$db = new DBBroker($mysqli);
   echo '<script>console.log("Your stuff here")</script>';



