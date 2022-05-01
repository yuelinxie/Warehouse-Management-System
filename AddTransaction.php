<?php 

if ( isset($_POST["sku"] ) )
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

    $query = "INSERT INTO TRANSACTIONS (sku, customer, amount) VALUES (" . $_POST["sku"] . ", " . $_POST["cid"] . ", " . $_POST["amount"] . ");";

    if ( $conn->query( $query ) === TRUE )
    {
        echo "Successfully added " . $_POST["transaction"] . "!";
    } else {
        echo "An error occured when adding this product. Please try again.";
    }
}

?>

<h1>Add a Transaction</h1>
<form action="AddTransaction.php" method="POST">
    <label for="sku">SKU:</label><br>
    <input type="text" name="sku"><br><br>
    <label for="cid">Customer ID:</label><br>
    <input type="text" name="cid"><br><br>
    <label for="amount">Amount:</label><br>
    <input type="text" name="amount"><br><br>
    <input type="submit" value="Submit">
</form>