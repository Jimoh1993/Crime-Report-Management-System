<?php
session_start();
include 'crime.php';
$id=$_GET['m'];
$d=date('d-M-Y, h:i a');
$s=mysql_query("UPDATE criminals SET pyrs='$d',sta='nlk' WHERE id='$id'");
header('location:criminals.php');
?>