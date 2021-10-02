<?php
include 'conect.php';

$sq="delete from  where id='$_SESSION[id]'";
mysqli_query($con,$sq);
header('location:viewall.php');
?>