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
    echo "<table><tr><th>SKU</th><th>Name</th><th>Department ID</th><th>Quantity</th></tr>";
    while ( $row = $result->fetch_assoc() )
    {
        echo "<tr><td>" . $row["SKU"] . "</td><td>" . $row["name"] . "</td><td>" . $row["department_id"] . "</td><td>" . $row["quantity"] . "</td><tr>";
    }
    echo "</table>";
} else {
    echo "No employee found for that employee ID.";
}

?>