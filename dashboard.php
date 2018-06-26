<?php

if(!isset($_SESSION['user']['first_name'])) {
    header("Location: http://localhost/login.php");
    die();
}
$link = mysqli_connect("localhost", "root", "", "auth");


$id = $_SESSION['user']['ID'];

$command = "SELECT * FROM users WHERE id = '$id'";

$result = mysqli_query($link, $command);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="profile1" style="border = 2px solid black">

</br>

<?php
    if($row['pic_name']){
        ?> <img src='uploads/<?=$row['pic_name'] ?>' width= 400px> <?php
    } 
    else {
        ?> <img src='uploads/default.png' width= 400px> <?php
    }
    ?>
<!-- <img src='uploads/<?=$row['pic_name'] ?>' width= 400px  > -->

<div class="profile1"> <?php print "Hello, ". $_SESSION['user']['first_name'] . " " . $_SESSION['user']['last_name']; ?> </div>
<div> You can choose your favorite profile picture here!</div>
</br>


<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">UPLOAD</button>
</form>
<br><a href="http://localhost/logout.php">LOGOUT</a>
</div>
</body>






