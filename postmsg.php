<?php
include 'datab.php';
$msg = $_POST['text'];
$room = $_POST['room'];
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO `messages`(`msg`, `room`, `ip`, `timelog`) VALUES ('$msg','$room','$ip',NOW())";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);
?>