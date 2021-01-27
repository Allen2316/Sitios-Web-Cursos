<?php
    $conn= mysqli_connect("localhost", "root", "1234","gdlwebcamp");

    if ($conn->connect_error) {
        echo $error->$conn->connect_error;
    }