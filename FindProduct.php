<form action="FindProduct.php" method="POST">
    <label for="sku">SKU:</label>
    <input type="text" name="sku" />
    <input type="submit" value="Submit">
</form>

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

    $query = "SELECT PRODUCT.name AS product_name, quantity, DEPARTMENTS.name AS department_name FROM PRODUCT LEFT JOIN DEPARTMENTS ON PRODUCT.department_id = DEPARTMENTS.did WHERE sku=" . $_POST["sku"];
    $result = $conn->query( $query );

    if ( $result->num_rows > 0 )
    {
        while ( $row = $result->fetch_assoc() )
        {
            echo "Product Name: " . $row["product_name"] . " | Department: " . $row["department_name"] . " | Available Quantity: " . $row["quantity"] . "<br>"; 
        }
    } else {
        echo "No employee found for that employee ID.";
    }
}

?>