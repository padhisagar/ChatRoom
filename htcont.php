<?php
$room = $_POST['room'];
include 'datab.php';
$sql = "SELECT * FROM `messages` WHERE room = '$room'";
$res = "";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $res = $res . '<div class="container">';
        $res = $res . $row['ip'];
        $res = "Says <p>" . $row['msg'];
        $res = $res .'</p> <span class="time-right">' . $row["timelog"] . '</span></div>';
        echo $res;
    }
}
?>