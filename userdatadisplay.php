<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>User Operations - Data Display</title>
  </head>
  <body>
      <h1 class ="display-1 text-center">User Data</h1>
        <?php
        include 'config.php';
        $sql = "SELECT * FROM clients";
        $result = mysqli_query($conn, $sql);
        $num_of_rows = mysqli_num_rows($result);
        if($num_of_rows <= 0) {
            echo "No Data Found";
        }
        else {
            ?>
            <table border = "1">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Date Of Business</th>
                    <th>Actions</th>
                </tr>
            <?php
            while($data = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $data['id'];?></td>
                    <td><?php echo $data['firstname'];?></td>
                    <td><?php echo $data['lastname'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><?php echo $data['business_date'];?></td>
                    <td><button class="btn btn-danger">Delete</button>
                    <button class="btn btn-warning">Update</button></td>
                </tr>
                <?php
            }
        }
        ?>
        </table>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>