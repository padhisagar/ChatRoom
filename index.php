<!doctype html>
<html lang="en">

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
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="Css/product.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Friends circle</h1>
                <p class="lead fw-normal">I Group where people can share opinon and talk with each other
                    and its a protype how actual chat group handle and work.
                </p>
                <form action="claim.php" method="POST">
                    yourname/<input type="text" name="room">
                    <button class="btn btn-outline-secondary" href="#">Book free room</button> 
                </form>
                <!-- <a  href="#">Book your free Room</a> -->
            </div>
        </div>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>

</html>