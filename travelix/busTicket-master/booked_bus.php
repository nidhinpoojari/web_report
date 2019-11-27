<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>user info</title>
    <link rel="stylesheet" href="travelix/busTicket-master/css/bootstrap.min.css">
    <link rel="stylesheet" href="travelix/more_info/css/animate.min.css">
    <style>
        th{
            background-color: darkgray;
        }
        td{
            background-color: whitesmoke;
        }
    </style>
    <?php include 'pro_header.php'; ?>
    <style>
        .ui{
            width: 33.0%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 182px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <a href="user_information.php" class="ui">User information</a>
    <a href="" class="ui">Booked bus with seat number</a>
    <a href="booked_acomodation.php" class="ui">Booked Accomodations</a>
</head>
<body>
<header>
    <table style="text-align: center;width: 100%;margin-top: 15px" border="1">
        <tr>
            <th>Email</th>
            <th>Bus ID</th>
            <th>Seat Number</th>
        </tr>
        <?php
        include 'database.php';
        $query = "select * from payment";
        $results=mysqli_query($db, $query);
        while ($row=mysqli_fetch_array($results))
        {
            echo"<tr><td>".$row['email']."</td><td>".$row['busId']."</td><td>".$row['ticket']."</td></tr>";
        }
        ?>
    </table>
</header>
</body>
</html>
<?php

?>