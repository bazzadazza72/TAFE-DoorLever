<!--
    DOOR LEVER INVENTORY ASSIGNMENT - deleteProduct.php
    Developed by Bailey Camp on 15/3/2023
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Acme Hardware - Delete Product</title>
		<link rel="stylesheet" type="text/css" href="./style.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans">
    </head>
        <h1 class="acmeTitle">Acme Hardware</h1>
		<a href="./addProduct.php">Add Product</a> | <a href="./updateProduct.php">Update Product</a> | <a href="./deleteProduct.php">Delete Product</a>
		<h3><i>Delete Product</i></h3>
		<h4>* - required field</h4>
        <form id="form1" name="form1" method="post">
			<label for="prodName">Product ID:</label> <input name="prodID" id="prodID" type="text"/>*<br /><br />
			<input name="submit" type="submit" value="Delete"/>
			<input type ="reset" name="reset" value ="Reset" title="Reset Form"/>
		</form>
		<br><br>
        <a href="./index.php"><i>Log out</i></a>
    </body>
</html>