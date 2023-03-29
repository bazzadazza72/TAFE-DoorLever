<?php 
    $conn = @mysqli_connect("localhost", "root", "", "acme_products");
	 
    if ($conn === false) {
	    echo "The connection has failed: " . mysqli_connect_error();
    }
    else
    {
	    // echo "Successfully connected to mySQL!";
    }

    // if (!mysqli_select_db($conn, "acme_products")) {
    //     echo "<p>Could not open the database: " . mysqli_error($conn) . "</p>";	
    // } else {
    //     echo "<p>Database selection successful</p>";
    // }

    $insert = "INSERT INTO products (prodName, prodUsage, prodCost, prodFinish) VALUES ('$_POST[prodName]', '$_POST[prodUsage]', '$_POST[prodCost]', '$_POST[prodFinish]')";
    if (mysqli_query($conn, $insert)) {
            //update successful, retrieve the auto id - NameID
            $nameID = mysqli_insert_id($conn);
            // echo "<p>Your submission was successful.</p>";
        } else {
            echo "table query failed: " . mysqli_error($conn);
    }

	//Close the connection
	mysqli_close($conn);
?>