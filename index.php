<!--
    DOOR LEVER INVENTORY ASSIGNMENT - Main
    Developed by Bailey Camp on 26/10/2022
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Acme Door Lever - Add Product</title>
    </head>
    <body>
            <?php
            // Declares the MySQL connection and the database name for later use
            $conn = @mysqli_connect("localhost:3306","root","");
            $dbName = "acmeprods";
    
            // Checks if the MySQL connection was successful
            if (mysqli_connect_errno())
            {
                echo "<p>Failed to connect to MySQL: " . mysqli_connect_error() . "</p>";
            }
            else
            {
                echo "<p>Connected to SQL server</p>";
          
                // Attempts to connect to the database, and if it fails, runs the code contained in 'createDB.php'
                if(!mysqli_select_db($conn, "acmeprods")) {
                    include("./includes/createDB.php");
                } else {
                    echo "<p>Connected to test DB</p>";
                }
            }
        ?>
    </body>
</html>
