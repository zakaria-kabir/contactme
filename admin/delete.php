<?php
if (isset($_GET[0]) && isset($_GET[1]) && !empty($_GET[0]) && !empty($_GET[1])) {
    require_once "../include/config.php";
    $sql = "DELETE FROM contactmeTbl WHERE email = '$_GET[0]' AND messages='$_GET[1]'";
    if (!mysqli_query($link, $sql)) {
        echo "failed" . mysqli_error($link);
    } else {
        header("location: index.php");
        exit();
    }
}
mysqli_close($link);
