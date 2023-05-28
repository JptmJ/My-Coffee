<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "reglog");
if (mysqli_connect_error()) {
    echo "Can't Connect";
}
?>