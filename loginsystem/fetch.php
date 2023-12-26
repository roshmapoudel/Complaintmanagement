<?php session_start();       // Start the session ?>    
<?php include "header.php" ?>

<?php
if (!isset($_SESSION['id'])) {         // condition Check: if session is not set. 
  header('location: login.php');   // if not set the user is sendback to login page.
}
?>


<?php
if (isset($_POST['signout'])) {
  session_destroy();            //  destroys session 
  header('location: index.php');
}
?>

<div class="container col-12 border rounded mt-3">
  <h1 class=" mt-3 text-center">Welcome to Complain Management System of PKMC !! </h1>
  <hr>
  <h4> <?php echo $_SESSION['name']; ?> </h4>

  <table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <?php echo $_SESSION['id']; ?></td>
        <td> <?php echo $_SESSION['name']; ?></td>
        <td> <?php echo $_SESSION['email']; ?></td>
      </tr>
    </tbody>
  </table>

  <form action="" method="post">
    <button type="submit" name='signout' class=" btn btn-warning mb-3"> Sign Out</button>
  </form>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, age, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Age: " . $row["age"]. " - Email: " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>