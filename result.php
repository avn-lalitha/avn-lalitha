<?php
    include_once('connection.php');
    include_once('session.php');

    $id = $_SESSION['user'];
    // SEM - 1-1 DATA RETREIVAL 
    $sem1_query = "select Name_of_the_Student from r20_2_2 where Regd_No = '$id'";
    $query = $con->query($sem1_query);
    $temp = mysqli_fetch_array($query,MYSQLI_ASSOC);
    $name = implode("",$temp);

    $sem1_query = "select * from r20_1_1 where Regd_No = '$id'";
    $temp1 = $con->query($sem1_query);
    $array1 = mysqli_fetch_array($temp1,MYSQLI_ASSOC);
    $result1 = implode(",",$array1);
    $data1 = preg_split("/\,/", $result1);
    $total1 = (($data1[4]*3)+($data1[6]*3)+($data1[8]*3)+($data1[10]*3)+($data1[12]*3)+($data1[14]*1.5)+($data1[16]*1.5)+($data1[18]*1.5));
    $credits1 = 19.5;
    $sgpa1 = $total1/$credits1;
    $percentage1 = (($sgpa1)-0.75)*10;

    $sem2_query = "select * from r20_1_2 where Regd_No = '$id'";
    $temp2 = $con->query($sem2_query);
    $array2 = mysqli_fetch_array($temp2,MYSQLI_ASSOC);
    $result2 = implode(",",$array2);
    $data2 = preg_split("/\,/", $result2);
    $total2 = (($data2[5]*3)+($data2[8]*3)+($data2[11]*3)+($data2[14]*3)+($data2[17]*3)+($data2[20]*1.5)+($data2[23]*1.5)+($data2[26]*1.5));
    $credits2 = 19.5;
    $sgpa2 = $total2/$credits2;
    $percentage2 = (($sgpa2)-0.75)*10;

    $sem3_query = "select * from r20_2_1 where Regd_No = '$id'";
    $temp3 = $con->query($sem3_query);
    $array3 = mysqli_fetch_array($temp3,MYSQLI_ASSOC);
    $result3 = implode(",",$array3);
    $data3 = preg_split("/\,/", $result3);
    $total3 = (($data3[5]*3)+($data3[8]*3)+($data3[11]*3)+($data3[14]*3)+($data3[17]*3)+($data3[20]*1.5)+($data3[23]*1.5)+($data3[26]*1.5)+($data3[29]*2));
    $credits3 = 21.5;
    $sgpa3 = $total3/$credits3;
    $percentage3 = (($sgpa3)-0.75)*10;

    $sem4_query = "select * from r20_2_2 where Regd_No = '$id'";
    $temp4 = $con->query($sem4_query);
    $array4 = mysqli_fetch_array($temp4,MYSQLI_ASSOC);
    $result4 = implode(",",$array4);
    $data4 = preg_split("/\,/", $result4);
    $total4 = (($data4[5]*3)+($data4[8]*3)+($data4[11]*3)+($data4[14]*3)+($data4[17]*3)+($data4[20]*1)+($data4[23]*2)+($data4[26]*1.5)+($data4[29]*2));
    $credits4 = 21.5;
    $sgpa4 = $total4/$credits4;
    $percentage4 = (($sgpa4)-0.75)*10;
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Result</title>
    <link rel="stylesheet" href="result.css">
</head>
<body>
    <div class="container">
        <div class = "logo">
            <img src="Logo.jpg" width="1200" height="100">
        </div>
            <div class="info">
                <div class="details">
                    <h1 class="student-heading">Student Details</h1>
                    <h2 class="rollno">Roll Number:</h2>
                    <h3 class="rn-data"><?php echo strtoupper($_SESSION['user'])?></h3>
                    <h2 class="namelabel">Name:</h2>
                    <h3 class="studentname"><?php echo strval($name)?></h3>
                </div>
                <div class="sem">
                    <table>
                        <tr>
                            <td class="sems"><a href="sem1.php" target="_blank" ><h2>1-1</h2></a></td>
                            <td class="sems"><a href="sem2.php" target="_blank" ><h2>1-2</h2></a></td>
                        </tr>
                        <tr>
                            <td class="sems"><a href="sem3.php" target="_blank" ><h2>2-1</h2></a></td>
                            <td class="sems"><a href="sem4.php" target="_blank" ><h2>2-2</h2></a></td>
                        </tr>
                        <tr>
                            <td class="sems"><h2>3-1</h2></td>
                            <td class="sems"><h2>3-2</h2></td>
                        </tr>
                        <tr>
                            <td class="sems"><h2>4-1</h2></td>
                            <td class="sems"><h2>4-2</h2></td>
                        </tr>
                    </table>
                </div>
                <div class="sgpa">
                        <table>
                            <thead>
                                <th><h5>Year-Semester</h5></th>
                                <th><h5>SGPA</h5></th>
                                <th><h5>Percentage</h5></th>
                            </thead>
                            <tr>
                                <td><h5>1-1</h5></td>
                                <td><?php echo round($sgpa1,2)?></td>
                                <td><?php echo round($percentage1,2)?></td>
                            </tr>
                            <tr>
                                <td><h5>1-2</h5></td>
                                <td><?php echo round($sgpa2,2)?></td>
                                <td><?php echo round($percentage2,2)?></td>
                            </tr>
                            <tr>
                                <td><h5>2-1</h5></td>
                                <td><?php echo round($sgpa3,2)?></td>
                                <td><?php echo round($percentage3,2)?></td>
                            </tr>
                            <tr>
                                <td><h5>2-2</h5></td>
                                <td><?php echo round($sgpa4,2)?></td>
                                <td><?php echo round($percentage4,2)?></td>
                            </tr>
                            <tr>
                                <td><h5>3-1</h5></td>
                                <td>- -</td>
                                <td>- -</td>
                            </tr>
                            <tr>
                                <td><h5>3-2</h5></td>
                                <td>- -</td>
                                <td>- -</td>
                            </tr>
                            <tr>
                                <td><h5>4-1</h5></td>
                                <td>- -</td>
                                <td>- -</td>
                            </tr>
                            <tr>
                                <td><h5>4-2</h5></td>
                                <td>- -</td>
                                <td>- -</td>
                            </tr>
                        </table>
                </div>
                <div class="overall">
                        <label class="cgpalabel">CGPA:</label>
                        <label class="percentage">Percentage:</label>
                        <label class="overallcgpa"><?php echo round((($sgpa1+$sgpa2+$sgpa3+$sgpa4)/4),2); ?></label>
                        <label class="overallpercentage"><?php echo round(($percentage1+$percentage2+$percentage3+$percentage4)/4,2);?></label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>