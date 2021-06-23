<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
    <!-- <tr>
        <th>ID</th>
        <th>Client's First Name</th>
        <th>Client's Last Name</th>
        <th>Client's Email ID</th>
        <th>Date Of Business</th>
    </tr> -->
<?php
require 'config.php';
// echo "<br/>File Included";

/* $sql = "SELECT * FROM `clients` WHERE `lastname` = 'ferguson';";
$result = mysqli_query($conn, $sql);
$num_of_rows = mysqli_num_rows($result);
echo "Number Of Rows :- ".$num_of_rows;
if($num_of_rows <= 0) {
    echo "No Data Found in the Table";
}
else {
    while($data = mysqli_fetch_assoc($result)) {
        // echo "<br/>ID :- ". $data['id']."<br/>"."Name :- ". $data['firstname']." ".$data['lastname']."<br/>Email :- ".$data['email'];?>

            <tr>
                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['firstname'];?></td>
                <td><?php echo $data['lastname'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['business_date'];?></td>
            </tr>       
        <?php
    }
} */
?>
</table>
</body>
</html>

<?php
/* $sql = "UPDATE `clients` SET `email`='ac@gmail.com' WHERE `id` = 3";
$result = mysqli_query($conn, $sql);
if($result) {
    echo "<br/> Data Updated";
}
else {
    echo "<br/> Data couln't be updated".mysqli_error($conn);
} */

?> 

<?php
/* $sql = "DELETE FROM `clients` WHERE `id` = 3;";
$result = mysqli_query($conn, $sql);
if($result) {
    echo "<br/> Data Deleted";
}
else {
    echo "<br/> Data couldn't be deleted".mysqli_error($conn);
} */
?>
