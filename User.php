<?php
class User {
    
    
    public static function register($first_name, $last_name, $email, $password) {
        $link = mysqli_connect("localhost", "root", "", "auth");

        $password = md5($password);

        $result = mysqli_query($link, "INSERT INTO `users` (first_name, last_name, email, password) VALUES('$first_name', '$last_name', '$email', '$password')");
        mysqli_close($link);
        $email1 = $email;

        
    }

    public static function login($email, $password) {
        // TODO: validate user input
        $link = mysqli_connect("localhost", "root", "", "auth");

        $password = md5($password);

        $result = mysqli_query($link, "SELECT * FROM `users` WHERE email='$email' AND password='$password'");
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        mysqli_close($link);

        if(!empty($row)) {
            $_SESSION['user'] = $row;
            header("Location: http://localhost/");
            die();
        }
        else {
            header("Location: http://localhost/login.php");
            die();
        }
        $email1 = $email;

    }

    public static function logout() {
        session_destroy();
        header("Location: http://localhost/login.php");
        die();
    }

    public function dataBaseUpload($fileNameNew, $id) {
        
        $link = mysqli_connect("localhost", "root", "", "auth");
        
        $command = "UPDATE users SET pic_name = '$fileNameNew' WHERE ID = '$id'";
        
        if (mysqli_query($link, $command)) {
            echo "Record updated successfully";
            header("Location: http://localhost");

        } else {
            echo "Error updating record: " . mysqli_error($link);
        }
        mysqli_close($link);
}


}