<?php
    $conn = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn, 'country');

    $sql = "select * from country";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '[';
       while($row = mysqli_fetch_assoc($result)) {
          echo "{'source': '" . $row["source"]. "', 'destination': '". $row["destination"] ."'},";
       }
       echo ']';
    } else {
       echo "false";
    }
?>