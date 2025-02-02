<!--
    DOOR LEVER INVENTORY ASSIGNMENT - updateProduct.php
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
        <h1 class="acmeTitle">Acme Hardware</h1>
        <a href="./addProduct.php">Add Product</a> | <a href="./updateProduct.php">Update Product</a> | <a href="./deleteProduct.php">Delete Product</a>
		<h3><i>Update Product</i></h3>
		<h4>* - required field</h4>
        <div>
            <form id="form1" name="form1" method="post">
                <label for="prodID">Product ID:</label> <input name="prodID" id="prodID" type="text"/>*<hr width="400px">
                <label for="prodName">Product name:</label> <input name="prodName" id="prodName" type="text"/>*<br /><br />
                <label for="prodUsage">Product description:</label> <input name="prodUsage" id="prodUsage" type="text"/>*<br /><br />
                <label for="prodCost">Product price: $ </label><input name="prodCost" id="prodCost" type="text"></input>*<br /><br />
                <label for="prodFinish">Product colour:</label> <input name="prodFinish" id="prodFinish" type="text" />*<br /><br />
                <label for="imageFile">Image file: </label><input type='file' id='userfile' name='userfile'>*<br /><br />
                <input name="submit" type="submit" value="Update"/>
                <input type ="reset" name="reset" value ="Reset" title="Reset Form"/>
            </form>
        </div>
        <br><br>
        <a href="./index.html"><i>Log out</i></a>
    </body>
</html>