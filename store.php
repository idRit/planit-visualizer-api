<?php
    $sourc = $_GET['source'];
    $dst = $_GET['dst'];

    $conn = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn, 'country');

    $sql = "insert into country(source, destination) values ('$sourc', '$dst')";

    if (mysqli_query($conn, $sql)) {
        echo "true";
    } else {
        echo "false";
    }
?>