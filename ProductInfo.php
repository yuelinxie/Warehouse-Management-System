<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
    <title>Project</title>
</head>

<body bgcolor="#ffffff">
    <div><h1>Product Information</h1></div>
    <form action='connect.php' method="POST">
        <label for="p.name">Name: </label><br>
        <input type='text' name='p.name' id="p.name" required/><br><br>

        <label for="sku">SKU NUmber: </label><br>
        <input type='text' name='sku' id="sku" required/><br><br>

        <label for="aq">Available Quantity: </label><br>
        <input type='text' name='aq' id="aq" required/><br><br>
    </form>
</body>
</html>