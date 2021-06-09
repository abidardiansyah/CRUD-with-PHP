<?php
include 'koneksi.php';
$name = $_GET['name'];
$sqlDelete = "DELETE FROM mid11825 WHERE name='$name'";
mysqli_query($conn, $sqlDelete);
header("location: tampil.php");
