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
&nbsp;

<center> <h1>Complaint Form</h1> </center>
<form action="./insert.php" method="POST">

<center> <label>Complaint: </label></center>
<center> <textarea type="text" name="u_complaint" placeholder="Your complaint here" rows="4" cols="50">
</textarea> </center>

<center> <label>Faculty: </label> </center>
<center> <input type="text" name="u_faculty" placeholder="Faculty"><br><br> </center>

<center> <label>Name: </label> </center>
<center> <input type="text" name="u_name" placeholder="Name"><br><br> </center>

<center> <label>Age: </label>
<center> <input type="number" name="u_age" placeholder="Age"><br><br> </center>

<center> <label>Email: </label></center>
<center> <input type="email" name="u_email" placeholder="Email"><br><br> </center>

<center> <input type="submit" value="Submit"> </center>
</form>



<?php include "footer.php" ?>