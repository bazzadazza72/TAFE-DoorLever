<!--
DOOR LEVER INVENTORY ASSIGNMENT - Main
Developed by Bailey Camp on 26/10/2022
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acme Ceramics - Login</title>
    </head>
    <body>
        <?php
		    $conn = @mysqli_connect("localhost:33063","root","");

		    // Check connection
		    if (mysqli_connect_errno()){
			    echo "<p>Failed to connect to MySQL: " . mysqli_connect_error() . "</p>";
		    } else {
		    	echo "<p>Connected to DB</p>";
		    	//connect to the database
		    	if(!mysqli_select_db($conn,"test")){
		    		echo "<p>Failed to select test db: " . mysqli_error($conn) . "</p>";
		    	} else {
		    		echo "<p>Connected to test DB</p>";
		    		// Create table
	    			$query = "DROP DATABASE IF EXISTS acmelever;";
                    $query. = "CREATE DATABASE acmelever;";
                    $query. = "USE acmelever;";
                    $query. = "CREATE TABLE IF NOT EXISTS doorinv (id int not null auto_increment primary key, prodName varchar(30) not null, prodFinish varchar(30) not null, prodUsage varchar(30) not null, prodCost float(8,2) not null);";

                    if (mysql_multi_query($conn,$query)) {
                        echo "<p>Database and tables created successfully.</p>";
                        do {
                            mysqli_next_result($conn);
                        } while (mysqli_more_results($conn));
                    } else {
                        echo "<p>There was an error: " . mysqli_error($conn) ."</p>";
                    }
	    		}
	    	}
	    ?>
    </body>
</html>
