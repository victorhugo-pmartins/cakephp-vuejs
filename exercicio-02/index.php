<?php
if ($_SESSION['loggedin'] == true or $_COOKIE['Loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
}