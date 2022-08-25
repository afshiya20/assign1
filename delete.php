<?php

include 'connect.php';

$id = $_GET['id'];

$q = " DELETE FROM `tb` WHERE id = $id ";

mysqli_query($con, $q);

header('location:index.php');

?>
