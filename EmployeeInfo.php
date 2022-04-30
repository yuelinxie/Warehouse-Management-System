<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
    <title>Project</title>
</head>

<body bgcolor="#ffffff">
    <div><h1>Employee Information</h1></div>
    <form action='connect.php' method="POST">
        <label for="e.name">Name: </label><br>
        <input type='text' name='e.name' id="e.name" required/><br><br>

        <label for="e.id">ID: </label><br>
        <input type='text' name='e.id' id="e.id" required/><br><br>

        <label for="ssn">SSN: </label><br>
        <input type='password' name='ssn' id="ssn" required/><br><br>

        <label for="birthday">Birthday: </label><br>
        <input type='date' name='birthday' id="birthday" required/><br><br>

        <label for="e.department">Department: </label><br>
        <input type='text' name='e.department' id="e.department" required/><br><br>
    </form>
</body>
</html>