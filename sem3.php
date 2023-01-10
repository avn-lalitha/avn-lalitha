<?php
    include_once('connection.php');
    include_once('authentication.php');
    session_start();

    $username = $_SESSION['user'];

    // SEM - 2-1 DATA RETREIVAL 
    $sem3_query = "select * from r20_2_1 where Regd_No = '$username'";
    $temp3 = $con->query($sem3_query);
    $array3 = mysqli_fetch_array($temp3,MYSQLI_ASSOC);
    $result3 = implode(",",$array3);
    $data3 = preg_split("/\,/", $result3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2-1</title>
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
        <h1>2-1 Semester Results</h1>
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Internal</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tr>
                        <td><h5>M-III</h5></td>
                        <td><h5><?php print_r($data3[3]) ?></h5></td>
                        <td><h5><?php print_r($data3[4]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>OOP C++</h5></td>
                        <td><h5><?php print_r($data3[6]) ?></h5></td>
                        <td><h5><?php print_r($data3[7]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Operating Systems</h5></td>
                        <td><h5><?php print_r($data3[9]) ?></h5></td>
                        <td><h5><?php print_r($data3[10]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Software Engineering</h5></td>
                        <td><h5><?php print_r($data3[12]) ?></h5></td>
                        <td><h5><?php print_r($data3[13]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>MFCS</h5></td>
                        <td><h5><?php print_r($data3[15]) ?></h5></td>
                        <td><h5><?php print_r($data3[16]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>C++ LAB</h5></td>
                        <td><h5><?php print_r($data3[18]) ?></h5></td>
                        <td><h5><?php print_r($data3[19]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>OS LAB</h5></td>
                        <td><h5><?php print_r($data3[21]) ?></h5></td>
                        <td><h5><?php print_r($data3[22]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>SE LAB</h5></td>
                        <td><h5><?php print_r($data3[24]) ?></h5></td>
                        <td><h5><?php print_r($data3[25]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>WAD</h5></td>
                        <td><h5><?php print_r($data3[27]) ?></h5></td>
                        <td><h5><?php print_r($data3[28]) ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>CI</h5></td>
                        <td><h5><?php print_r($data3[30]) ?></h5></td>
                        <td><h5><?php print_r($data3[31]) ?></h5></td>
                    </tr>
    </table>
</body>
</html>