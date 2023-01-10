<?php
    include_once('connection.php');
    include_once('authentication.php');
    session_start();
    
    $username = $_SESSION['user'];
    // SEM - 1-2 DATA RETREIVAL 
    $sem2_query = "select * from r20_1_2 where Regd_No = '$username'";
    $temp2 = $con->query($sem2_query);
    $array2 = mysqli_fetch_array($temp2,MYSQLI_ASSOC);
    $result2 = implode(",",$array2);
    $data2 = preg_split("/\,/", $result2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-2</title>
    <link rel="stylesheet" href="result.css">
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
        width: 750px;
        height: 700px;
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
    <h1>1-2 Semester Results</h1>
    <table>
            <thead>
                <th>Subject</th>
                <th>Internal</th>
                <th>Grade</th>
            </thead>
            <tr>
                <td><h5>M-II</h5></td>
                <td><h5><?php print_r($data2[3]) ?></h5></td>
                <td><h5><?php print_r($data2[4]) ?></h5></td>
            </tr>
            <tr>
                <td><h5>Applied Chemistry</h5></td>
                <td><h5><?php print_r($data2[6]) ?></h5></td>
                <td><h5><?php print_r($data2[7]) ?></h5></td>
            </tr>
            <tr>
                <td><h5>Computer Organization</h5></td>
                <td><h5><?php print_r($data2[9]) ?></h5></td>
                <td><h5><?php print_r($data2[10]) ?></h5></td>
            </tr>
            <tr>
                <td><h5>Data Structures</h5></td>
                <td><h5><?php print_r($data2[12]) ?></h5></td>
                <td><h5><?php print_r($data2[13]) ?></h5></td>
            </tr>
            <tr>
                <td><h5>Python Programming</h5></td>
                <td><h5><?php print_r($data2[15]) ?></h5></td>
                <td><h5><?php print_r($data2[16]) ?></h5></td>
            </tr>
            <tr>
                <td><h5>AC LAB</h5></td>
                <td><h5><?php print_r($data2[18]) ?></h5></td>
                <td><h5><?php print_r($data2[19]) ?></h5></td>
            </tr>
            <tr>
                <td><h5>DS LAB</h5></td>
                <td><h5><?php print_r($data2[21]) ?></h5></td>
                <td><h5><?php print_r($data2[22]) ?></h5></td>
            </tr>
            <tr>
                <td><h5>Python LAB</h5></td>
                <td><h5><?php print_r($data2[24]) ?></h5></td>
                <td><h5><?php print_r($data2[25]) ?></h5></td>
            </tr>
            <tr>
                <td><h5>ES</h5></td>
                <td><h5><?php print_r($data2[27]) ?></h5></td>
                <td><h5><?php print_r($data2[28]) ?></h5></td>
            </tr>
    </table>
</body>
</html>