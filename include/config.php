<?php
$link = mysqli_connect("localhost", "zakaria", "zakaria", "formDB");
if ($link === false) {
    die("Couldnot connct to DB" . mysqli_connect_error());
}
