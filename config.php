<?php

$conn = mysqli_connect('localhost', 'root', '', 'rare_finds') or die('connection failed');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    echo "connected to database";
}
