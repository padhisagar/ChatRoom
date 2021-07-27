<?php
$room = $_POST['room'];
if(strlen($room)>20 or strlen($room)<2){
    $message = "Please chose less 20 and more than 2 character";
    echo ' <script language="javascript">';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/chatRoom";';
    echo '</script>';
}
else{
    include 'datab.php';
}
$check = "SELECT * FROM `room` WHERE roomname = '$room'";
$result = mysqli_query($conn,$check);
if($result){
    if(mysqli_num_rows($result)> 0){
        $message = "please choose different name";
        echo '<script>
            alert("'.$message.'");
            window.location="http://localhost/chatRoom";
        </script>';    
    }
    else{
        $datainsert = "INSERT INTO `room`(`roomname`, `stime`) VALUES ('$room',NOW())";
        if(mysqli_query($conn,$datainsert)){
            echo '<script>
                alert("Your Room is ready");
                window.location = "http://localhost/chatRoom/room.php?roomname=' . $room.'";
            </script>';
        }
        
    }
}
?>