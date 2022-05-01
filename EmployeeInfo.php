<?php 

if (isset($_POST["name"]))
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

    $query = "INSERT INTO EMPLOYEE (eid, name, birthday, ssn, department_id) VALUES ("
    . $_POST["id"] . ", "
    . "\"" . $_POST["name"] . "\"" . ", "
    . "'" . $_POST["birthday"] . "'" . ", "
    . $_POST["ssn"] . ", "
    . $_POST["department"] . ");";

    if ( $conn->query( $query ) === TRUE )
    {
        echo "Successfully inserted Employee";
    } else {
        echo "Error";
        echo $conn->error;
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
    <div><h1>Employee Information</h1></div>
    <form action='EmployeeInfo.php' method="POST">
        <label for="name">Name: </label><br>
        <input type='text' name='name' id="e.name" required/><br><br>

        <label for="id">ID: </label><br>
        <input type='text' name='id' id="e.id" required/><br><br>

        <label for="ssn">SSN: </label><br>
        <input type='password' name='ssn' id="ssn" required/><br><br>

        <label for="birthday">Birthday: </label><br>
        <input type='date' name='birthday' id="birthday" required/><br><br>

        <label for="department">Department: </label><br>
        <input type='text' name='department' id="e.department" required/><br><br>

        <input type="submit">
    </form>
</body>
</html>