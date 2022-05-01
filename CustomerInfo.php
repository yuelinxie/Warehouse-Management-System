<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
    <title>Project</title>
</head>

<!-- <h1> Project </h1> -->
<body bgcolor="#ffffff">
    <div><h1>Customer Information</h1></div>
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
</body>
</html>