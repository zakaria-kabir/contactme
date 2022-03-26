<?php
include './include/config.php';
?>
<?php
$sql = "CREATE TABLE IF NOT EXISTS contactmeTbl (name VARCHAR(32) NOT NULL , email VARCHAR(32) NOT NULL, number VARCHAR(20) NOT NULL, subject VARCHAR(50) NOT NULL, messages VARCHAR(512) NOT NULL, CONSTRAINT PK_contactmeTbl PRIMARY KEY (email, messages));";
if (!mysqli_query($link, $sql)) {
    echo "failed" . mysqli_error($link);
}
?>