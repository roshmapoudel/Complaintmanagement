<?php
# -- this is delete.php --

/**
 * The follwing Condition checks whether an admin requested the delete.php through
 * the POST method with the u_complaint_id
 * 
 * 
 */
if (isset($_POST['u_complaint_id']) ) :

    # Database Connection my_test_db is the Database name.
    $db_conn = mysqli_connect("localhost", "root", "", "my_test_db");

    # Assigning user data to variables for easy access later.
    $complaint_id = $_POST['u_complaint_id'];
    
    # SQL query for Deleting the Form Data from the users table.
	
    $sql = "DELETE FROM `users` WHERE id = $complaint_id ";

    # Executing the Above SQL query.
    $query = mysqli_query($db_conn, $sql);

    # Checks that the query executed successfully
    if ($query) {
        echo 'Data deleted successfully <center> <a href="./dashboard.php"> Go Back</a> </center>';
    } else {
        echo "Failed to delete data.";
    }
    exit;
endif;

/**
 * This message occurs when a user tries to access Delete.php without -
 * the required method and credentials.
 */
echo '404 Page Not Found. <a href="./index.html">Go Home</a>';