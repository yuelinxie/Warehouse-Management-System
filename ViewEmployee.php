<form action="ViewEmployee.php" method="POST">
    <label for="eid">Employee ID:</label>
    <input type="text" name="eid" />
    <input type="submit" value="Submit">
</form>

<?php 

if ( isset($_POST["eid"] ) )
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

    $query = "SELECT EMPLOYEE.name AS name, birthday, DEPARTMENTS.name AS department_id FROM EMPLOYEE LEFT JOIN DEPARTMENTS ON EMPLOYEE.department_id = DEPARTMENTS.did WHERE eid=" . $_POST["eid"];
    $result = $conn->query( $query );

    if ( $result->num_rows > 0 )
    {
        while ( $row = $result->fetch_assoc() )
        {
            echo "Name: " . $row["name"] . " | Birthday: " . $row["birthday"] . " | Department: " . $row["department_id"] . "<br>"; 
        }
    } else {
        echo "No employee found for that employee ID.";
    }
}

?>