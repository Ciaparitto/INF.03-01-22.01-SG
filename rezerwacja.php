<?php
$conn = mysqli_connect("localhost","root","","restauracja");
$data = $_POST['data'];
$ilosc = $_POST['ilosc'];
$numer = $_POST['numer'];
$query = mysqli_query($conn,"INSERT INTO rezerwacje VALUES (NULL,NULL,'$data','$ilosc','$numer')");
mysqli_close($conn);
?>