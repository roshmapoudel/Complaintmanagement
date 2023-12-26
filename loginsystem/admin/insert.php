<?php
# -- this is insert.php --

/**
 * The follwing Condition checks whether a client requested the insert.php through
 * the POST method with the u_name, u_age, and u_email
 * 
 * u_name, u_age, and u_email - You can also see these in the HTML Form (index.html) -
 * These are keys to access the actual data provided by a user.
 */
if (isset($_POST['u_name']) && isset($_POST['u_age']) && isset($_POST['u_email'])) :

    # Database Connection my_test_db is the Database name.
    $db_conn = mysqli_connect("localhost", "root", "", "my_test_db");

    # Assigning user data to variables for easy access later.
    $name = $_POST['u_name'];
    $age = $_POST['u_age'];
    $email = $_POST['u_email'];

    # SQL query for Inserting the Form Data into the users table.
    $sql = "INSERT INTO `users` (`name`, `age`, `email`) VALUES ('$name', $age, '$email')";

    # Executing the Above SQL query.
    $query = mysqli_query($db_conn, $sql);

    # Checks that the query executed successfully
    if ($query) {
        echo 'New data inserted successfully <center> <a href="./dashboard.php"> Go Back</a> </center>';
    } else {
        echo "Failed to insert new data.";
    }
    exit;
endif;

/**
 * This message occurs when a user tries to access Insert.php without -
 * the required method and credentials.
 */
echo '404 Page Not Found. <a href="./index.html">Go Home</a>';