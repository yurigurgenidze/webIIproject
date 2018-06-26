<?php

session_start();

if(isset($_SESSION['user'])) {
    require_once "dashboard.php";
}
else {
    require_once "login.php";
}