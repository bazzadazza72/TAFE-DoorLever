<!--
    DOOR LEVER INVENTORY ASSIGNMENT - index.php
    Developed by Bailey Camp on 26/10/2022
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Acme Hardware - Add Product</title>
    </head>
    <body>
            <?php
            
            // Declares the MySQL connection and the database name for later use
            $conn = @mysqli_connect("localhost:3306","root","");
            //$dbName = "acmeprods";
    
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
        <form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
			<label for="name">Product name: <input type="text" name="name" id="name" size="20" value="<?php echo $userName;?>"><span class="error">* <?php echo $errMessageName;?></span><br /><br /></label>
			<label for="age">Product finish: <input type="text" name="age" id="age" size="20" value="<?php echo $userAge;?>"><span class="error">* <?php echo $errMessageAge;?></span><br /><br /></label>
			<input type="submit" name="submit" value="Submit">
		</form>
    </body>
</html>
