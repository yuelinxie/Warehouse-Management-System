<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
    {
        // Type table name in '//table name'
        $conn = mysqli_connect('localhost', 'root','','//table name') 
            or die("connection failed:" .mysqli_connect_error());
        //For CustomerInfo, name, id, address, phone number, credit card number
        if(isset($_POST['c.name']) && isset($_POST['c.id']) && isset($_POST['c.address']) && isset($_POST['c.phone#']) && isset($_POST['cc#']))
        {
            $name = $_POST['c.name'];
            $id = $_POST['c.id'];
            $address = $_POST['c.address'];
            $phone = $_POST['c.phone#'];
            $cc = $_POST['cc#'];

            $sql = "INSERT INTO 'users' ('c.name', 'c.id', 'c.address', 'c.phone#', 'cc#') VALUES ('$name', '$id', '$address', '$phone', '$cc')";

            $query = mysqli_query($connect, $sql);
            if($query)
            {
                echo'Entry Successful';
            }
            else
            {
                echo'Error Occurred';
            }
        }
    }
?>