<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
    <title>Project</title>
</head>

<h1> Project </h1>
<body bgcolor="#ffffff">
    <div><h2>Customer Information</h2></div>
    <form action='connect.php' method="POST">
        <label for="c.name">Name: </label><br>
        <input type='text' name='c.name' id="c.name" required/><br><br>

        <label for="c.id">Order ID: </label><br>
        <input type='text' name='c.id' id="c.id" required/><br><br>

        <label for="c.address">Address: </label><br>
        <input type='text' name='c.address' id="c.address" required/><br><br>

        <label for="c.phone#">Phone Number: </label><br>
        <input type='tel' name='c.phone#' id="c.phone#" required/><br><br>

        <label for="cc#">Credit Card Number: </label><br>
        <input type='text' name='cc#' id="cc#" required/><br><br>

        <input type='submit' name='submit' id="submit"/>
    </form>

    <div><h2>Employee Information</h2></div>
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

        <input type='submit' name='submit' id="submit"/>
    </form>

    <div><h2>Product Information</h2></div>
    <form action='connect.php' method="POST">
        <label for="p.name">Name: </label><br>
        <input type='text' name='p.name' id="p.name" required/><br><br>

        <label for="sku">SKU NUmber: </label><br>
        <input type='text' name='sku' id="sku" required/><br><br>

        <label for="aq">Available Quantity: </label><br>
        <input type='text' name='aq' id="aq" required/><br><br>

        <input type='submit' name='submit' id="submit"/>
    </form>

    <div><h2>Department: </h2></div>
    <form action='connect.php' method="POST">
        <label for="d.name">Name: </label><br>
        <input type='text' name='d.name' id="d.name" required/><br><br>

        <label for="d.id">ID: </label><br>
        <input type='text' name='d.id' id="d.id" required/><br><br>

        <input type='submit' name='submit' id="submit"/>
    </form>

</body>
</html>
