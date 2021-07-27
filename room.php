<?php
$roomname = $_GET['roomname'];
include 'datab.php';
$sql = "select * from room where roomname='$roomname'";
$result = mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)==0){
        echo '<script>
            alert("This Room does not exist");
            window.location = "http://localhost/chatRoom";
        </script>';
    }
}
else{
    echo "Error :".mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>ChatRoom</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="./Img/chaticon.png">
    <meta name="theme-color" content="#7952b3">

    <style>
        body {
            margin: 0 auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .container {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .container img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }

        .anyClass {
            height: 350px;
            overflow-y: scroll;
        }
    </style>
</head>

<body>

    <h2>Chat Messages -
        <?php echo $roomname ; ?>
    </h2>

    <div class="container">
        <div class="anyClass">

        </div>
    </div>
    <input type="text" class="form-control" name="user" id="mg" placeholder="Enter message">
    <br><br>
    <button class="btn btn-default" name="submit" id="submitmsg">Submit</button>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
       setInterval(runFunction , 1000);
       function runFunction(){
           $.post("htcont.php",{room : '<?php echo $roomname ?>'},
                function(data,status){
                    document.getElementsByClassName('anyClass')[0].innerHTML = data;
                }

           )
       } 


        var input = document.getElementById("mg");

        // Execute a function when the user releases a key on the keyboard
        input.addEventListener("keyup", function (event) {
            // Number 13 is the "Enter" key on the keyboard
            if (event.keyCode === 13) {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("submitmsg").click();
            }
        });
        $("#submitmsg").click(function () {
            var clientmsg = $("#mg").val();
            $.post("postmsg.php", { text: clientmsg, room: '<?php echo $roomname; ?>' },
                function (data, status) {
                    document.getElementsByClassName('anyClass')[0].innerHTML = data;});
                    $("#mg").val("");
            return false;
        });

    </script>
</body>

</html>