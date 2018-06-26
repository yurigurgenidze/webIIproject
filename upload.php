<?php

    session_start();
    include_once "User.php";
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];

        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');
        $email = $_SESSION['user']['email'];
        if (in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;

                    $fileDestination = 'uploads/'.$fileNameNew;

                    

                    move_uploaded_file($fileTmpName, $fileDestination);   

                    $link = mysqli_connect("localhost", "root", "", "auth");

                    $result = mysqli_query($link, "SELECT * FROM `users` WHERE email = '$email'");
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        

                    User::dataBaseUpload($fileNameNew,$row["ID"]);
                }
                else {
                    echo "Your file is too big!";
                }
            }
            else {
                echo "There was an error uploading your file!";
                echo $fileError;
            }

        }

        
            }
      ?> 



       