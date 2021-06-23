<?php
$conn = mysqli_connect('localhost', 'root', '', '2pmbatch');
if($conn) {
    // echo "Coonnection successful";
}
else {
    die('No connection to database'.mysqli_connect_error());
}
?>