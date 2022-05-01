<?php

if ( isset( $_POST["sku"] ) )
{
    $servername = "localhost";
    $username = "test";
    $password = "P@ssword1!";
    $dbname = "647Project";

    $conn = new mysqli( $servername, $username, $password, $dbname );
    if ( $conn->connect_error )
    {
        die("Connection failed: " . $conn->connect_error );
    }

    $query = "INSERT INTO PRODUCT (sku, name, quantity, department_id) VALUES ("
    . $_POST["sku"] . ", "
    . "\"" . $_POST["name"] . "\", "
    . $_POST["aq"] . ", "
    . $_POST["department"] . ");";

    if ( $conn->query( $query ) === TRUE )
    {
        echo "Successfully added " . $_POST["name"] . "!";
    } else {
        echo "An error occured when adding this product. Please try again.";
    }

    $conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
    <title>Project</title>
</head>

<body bgcolor="#ffffff">
    <div><h1>Product Information</h1></div>
    <form action='AddProduct.php' method="POST">
        <label for="p.name">Name: </label><br>
        <input type='text' name='name' id="p.name" required/><br><br>

        <label for="sku">SKU NUmber: </label><br>
        <input type='text' name='sku' id="sku" required/><br><br>

        <label for="aq">Available Quantity: </label><br>
        <input type='text' name='aq' id="aq" required/><br><br>

        <label for="department">Department ID: </label><br>
        <input type="text" name="department" id="department" required /><br><br>

        <input type='submit' name='submit' id="submit"/>
    </form>
</body>
</html>