<?php

require_once "User.php";

if($_SERVER['REQUEST_METHOD'] === "GET") {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="style.css">
</head>

<body >

<div class="container" style="margin-top: 30px">

    <h1 class="color" id="td"> Register  </h1>
    <form method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="namelabel" class="color">First name</label>
                    <input name="first-name" id="namelabel" type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col" id="LN">
                    <label for="surnamelabel" class="color">Last name</label>
                    <input name="last-name" id="surnamelabel" type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="color">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="color">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="color">Confirm Password</label>
            <input name="password2" type="password" class="form-control" id="exampleInputPassword1" placeholder="ReEnter Password">
        </div>
       
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-success" href="Login.php" id="login">Have an account? login.</a>
    </form>

</div>
</body>
</html>

<?php

}

elseif($_SERVER['REQUEST_METHOD'] === "POST") {
    $err=0;
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(strlen($first_name)<2 && strlen($first_name)>20) {
        echo "Not a valid name";
        $err=1;
        header("Location: http://localhost/register.php");
    }
    if(strlen($last_name)<2 && strlen($last_name)>20) {
        echo "Not a valid surname";
        $err=1;
        header("Location: http://localhost/register.php");
    }
    if(strlen($email)<2 && strlen($email)>40) {
        echo "Not a valid email";
        $err=1;
        header("Location: http://localhost/register.php");

    }
    if(strlen($password)<2 && strlen($password)>20) {
        echo "Not a valid wtf";
        $err=1;
        header("Location: http://localhost/register.php");
    }

    if($err!=1){
        User::register($first_name, $last_name, $email, $password);
    }
}
else {
    die("Method not allowed");
}