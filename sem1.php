<?php
    include_once('connection.php');
    include_once('authentication.php');
    include_once('session.php');

    $username = $_SESSION['user'];
    // SEM - 1-1 DATA RETREIVAL 
    $sem1_query = "select * from r20_1_1 where Regd_No = '$username'";
    $temp1 = $con->query($sem1_query);
    $array1 = mysqli_fetch_array($temp1,MYSQLI_ASSOC);
    $result1 = implode(",",$array1);
    $data1 = preg_split("/\,/", $result1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-1</title>
    <style>
    body {
        display: flex;
        justify-content: center;
        padding: 20px 20px 20px 20px;
        background-color: #f1f1f1;
        padding-top: 80px;
        overflow: scroll;
    }
    table {
        padding: 1px;
        background-color: white;
        width: 700px;
        height: 650px;
        border: 2px solid black;
        border-radius: 15px;
    }
    td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        border-radius: 15px;
    }
    h1 {
        position: absolute;
        top:2px;
        left: 620px;
    }
</style>
</head>
<body>
    <h1>1-1 Semester Results</h1>
    <table>
        <thead>
            <th><h5>Subject</h5></th>
            <th><h5>Grade</h5></th>
        </thead>
        <tr>
            <td><h5>English</h5></td>
            <td><h5><?php print_r($data1[3]) ?></h5></td>
        </tr>
        <tr>
            <td><h5>Mathematics-1</h5></td>
            <td><h5><?php print_r($data1[5]) ?></h5></td>
        </tr>
        <tr>
            <td><h5>Applied Physics</h5></td>
            <td><h5><?php print_r($data1[7]) ?></h5></td>
        </tr>
        <tr>
            <td><h5>PPSC</h5></td>
            <td><h5><?php print_r($data1[9]) ?></h5></td>
        </tr>
        <tr>
            <td><h5>CEW</h5></td>
            <td><h5><?php print_r($data1[11]) ?></h5></td>
        </tr>
        <tr>
            <td><h5>PPSC LAB</h5></td>
            <td><h5><?php print_r($data1[13]) ?></h5></td>
        </tr>
        <tr>
            <td><h5>AP LAB</h5></td>
            <td><h5><?php print_r($data1[15]) ?></h5></td>
        </tr>
        <tr>
            <td><h5>ENG LAB</h5></td>
            <td><h5><?php print_r($data1[17]) ?></h5></td>
        </tr>
    </table>
</body>
</html>