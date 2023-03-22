<!--
    DOOR LEVER INVENTORY ASSIGNMENT - addProduct.php
    Developed by Bailey Camp on 15/3/2023
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Acme Hardware - Add Product</title>
        <link rel="stylesheet" type="text/css" href="./style.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans">
    </head>
    <body>
        <?php
            // Declares the MySQL connection and the database name
            $conn = @mysqli_connect("localhost:3306","root","");
            // Declares blank error <span> variables to use later
            $nameErr = "";
            $usageErr = "";
            $costErr = "";
            $finishErr = "";
            $invalidData = false;
    
            // Checks if the MySQL connection was successful
            if (mysqli_connect_errno())
            {
                echo "<p>Failed to connect to MySQL: " . mysqli_connect_error() . "</p>";
            }
            else
            {
                // echo "<p>Connected to SQL server</p>";
          
                // Attempts to connect to the database, and if it fails, runs the code contained in 'createDB.php'
                if(!mysqli_select_db($conn, "acme_products")) {
                    include("./includes/createDB.php");
                } else {
                    // echo "<p>Connected to test DB</p>";
                }
            }

            
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$prodName = checkInput($_POST["prodInput"]);
                $prodUsage = checkInput($_POST["prodUsage"]);
                $prodCost = checkInput($_POST["prodCost"]);
                $prodFinish = checkInput($_POST["prodFinish"]);
		
				if ($prodName == ""){
					$nameErr = "Product name must not be blank.";
					$invalidData = true;
				} else {
					$nameErr = "Product name must not be blank.";
				}

				if ($prodUsage == ""){
					$usageErr = "Product usage must not be blank.";
					$invalidData = true;
				} else {
					$usageErr = "Product usage must not be blank.";
				}

                if ($prodCost == ""){
					$costErr = "Product cost must not be blank.";
					$invalidData = true;
				} else {
					$costErr = "Product cost must not be blank.";
				}

                if ($prodFinish == ""){
					$finishErr = "Product finish must not be blank.";
					$invalidData = true;
				} else {
					$finishErr = "Product finish must not be blank.";
				}

				if ($invalidData == false) {
					header('Location: index.php');
					exit();
				}
			}
			
			function checkInput($inputData) {
				$inputData = trim($inputData);
				$inputData = stripslashes($inputData);
				$inputData = htmlspecialchars($inputData);
				return $inputData;
			}
        ?>
        <h1 class="acmeTitle">Acme Hardware</h1>
		<a href="./addProduct.php">Add Product</a> | <a href="./updateProduct.php">Update Product</a> | <a href="./deleteProduct.php">Delete Product</a>
		<h3><i>Add Product</i></h3>
		<h4>* - required field</h4>
        <form id="form1" name="form1" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
			<label for="prodName">Product name:</label> <input name="prodInput" id="prodInput" type="text"/> <span class="error"><?php echo $nameErr;?></span><br /><br />
			<label for="prodUsage">Product description:</label> <input name="prodUsage" id="prodUsage" type="text"/> <span class="error"><?php echo $usageErr;?></span><br /><br />
			<label for="prodCost">Product price: $ </label> <input name="prodCost" id="prodCost" type="text"></input> <span class="error"><?php echo $costErr;?></span><br /><br />
			<label for="prodFinish">Product finish:</label> <input name="prodFinish" id="prodFinish" type="text" /> <span class="error"><?php echo $finishErr;?></span><br /><br />
			<label for="imageFile">Image file: </label><input type='file' id='userfile' name='userfile'><br /><br />
			<input name="submit" type="submit" value="Submit"/>
			<input type="reset" name="reset" value="Reset" title="Reset"/>
		</form>
        <a href="./index.php"><i>Log out</i></a>
    </body>
</html>
