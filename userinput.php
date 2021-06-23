<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>User Operations - Insertion</title>
  </head>
  <body>
      <h1 class="text-center">Enter The Details</h1>
      <div class="container">
      <form class="row g-3" action = "userinput.php" method = "POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Enter First Name</label>
    <input type="name" class="form-control" id="inputEmail4" name = "fname">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Enter Last Name</label>
    <input type="text" class="form-control" id="inputPassword4" name = "lname">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Enter Email</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="example@abc.com" name = "email">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Enter Date Of Business</label>
    <input type="datetime-local" class="form-control" id="inputAddress" placeholder="example@abc.com" name = "dob">
  </div>

  <div class="col-12">
    <input type="submit" class="btn btn-primary" name = "sub"  value ="Enter">
  </div>
</form>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
  </body>
</html>

<?php
include 'config.php';
if(isset($_POST['sub'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $date = $_POST['dob'];
    // echo $fname, $lname, $email, $date;
    $sql = "INSERT INTO `clients`(`firstname`, `lastname`, `email`, `business_date`) VALUES ('$fname','$lname','$email','$date')";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "Data Inserted Successfully";
    }
    else {
        die('Data couldn\'t be inserted'.mysqli_error($conn));
    }
}
?>