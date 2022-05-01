<h1>Transactions:</h1>
<?php 

$servername = "localhost";
$username = "test";
$password = "P@ssword1!";
$dbname = "647Project";

$conn = new mysqli( $servername, $username, $password, $dbname );
if ( $conn->connect_error )
{
    die("Connection failed: " . $conn->connect_error );
}

$query = "SELECT TRANSACTIONS.id AS id, PRODUCT.sku AS sku, PRODUCT.name AS product_name, cid, CUSTOMER.name AS customer_name, quantity FROM TRANSACTIONS LEFT JOIN CUSTOMER ON TRANSACTIONS.customer = CUSTOMER.cid LEFT JOIN PRODUCT ON TRANSACTIONS.sku = PRODUCT.SKU ORDER BY id DESC;";
$result = $conn->query( $query );

if ( $result->num_rows > 0 )
{
    echo "<table><th>Transaction ID</th><th>SKU</th><th>Product</th><th>CID</th><th>Customer</th></tr>";
    while ( $row = $result->fetch_assoc() )
    {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["sku"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["cid"] . "</td><td>" . $row["customer_name"] . "</td></tr>";
        //echo "<tr><td>" . $row["SKU"] . "</td><td>" . $row["name"] . "</td><td>" . $row["department_id"] . "</td><td>" . $row["quantity"] . "</td><tr>";
    }
    echo "</table>";
} else {
    echo "No results";
}
?>