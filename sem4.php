<?php
    include_once('connection.php');
    include_once('authentication.php');
    session_start();
    $username = $_SESSION['user'];
    // SEM - 2-2 DATA RETREIVAL 
    $sem4_query = "select * from r20_2_2 where Regd_No = '$username'";
    $temp4 = $con->query($sem4_query);
    $array4 = mysqli_fetch_array($temp4,MYSQLI_ASSOC);
    $result4 = implode(",",$array4);
    $data4 = preg_split("/\,/", $result4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2-2</title>
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
    <table>
        <h1>2-2 Semester Results</h1>
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Internal</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tr>
                        <td><h5>Probability and Statistics</h5></td>
                        <td><h5><?php print_r($data4[3]) ?></h5></td>
                        <td><h5><?php print_r($data4[4]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>DBMS</h5></td>
                        <td><h5><?php print_r($data4[6]) ?></h5></td>
                        <td><h5><?php print_r($data4[7]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>FLAT</h5></td>
                        <td><h5><?php print_r($data4[9]) ?></h5></td>
                        <td><h5><?php print_r($data4[10]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>JAVA</h5></td>
                        <td><h5><?php print_r($data4[12]) ?></h5></td>
                        <td><h5><?php print_r($data4[13]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>MEFA</h5></td>
                        <td><h5><?php print_r($data4[15]) ?></h5></td>
                        <td><h5><?php print_r($data4[16]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>DBMS LAB</h5></td>
                        <td><h5><?php print_r($data4[18]) ?></h5></td>
                        <td><h5><?php print_r($data4[19]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>R LAB</h5></td>
                        <td><h5><?php print_r($data4[21]) ?></h5></td>
                        <td><h5><?php print_r($data4[22]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Java LAB</h5></td>
                        <td><h5><?php print_r($data4[24]) ?></h5></td>
                        <td><h5><?php print_r($data4[25]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>SOC-II</h5></td>
                        <td><h5><?php print_r($data4[27]) ?></h5></td>
                        <td><h5><?php print_r($data4[28]) ?></h5></td>
                    </tr>
    </table>
</body>
</html>