<h1>List of Products:</h1>
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

$query = "SELECT * FROM PRODUCT";

$result = $conn->query($query);
if ( $result->num_rows > 0 )
{
    while ( $row = $result->fetch_assoc() )
    {
        echo "SKU: " . $row["sku"] . " | Name: " . $row["name"] . " | Department: " . $row["department_id"] . " | Quantity: " . $row["quantity"] . "<br>"; 
    }
} else {
    echo "No employee found for that employee ID.";
}

?>