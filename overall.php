<?php
    include_once('connection.php');

    error_reporting(0);

    if(isset($_POST['show'])) {
        if(!empty($_POST['department'] && $_POST['section'] && $_POST['semester'])) {
            $department = $_POST['department'];
            $section = $_POST['section'];
            $semester = $_POST['semester'];

            $department = stripcslashes($department);
            $section = stripcslashes($section);
            $semester = stripcslashes($semester);
            $department = mysqli_real_escape_string($con,$department);
            $section = mysqli_real_escape_string($con,$section);
            $semester = mysqli_real_escape_string($con,$semester);
            $query = '';
            $table = '';

            if($semester == '1-1') {
                $table = 'r20_1_1';
            }
            elseif($semester == '1-2') {
                $table = 'r20_1_2';
            }
            elseif($semester == '2-1') {
                $table = 'r20_2_1';
            }
            elseif($semester == '2-2') {
                $table = 'r20_2_2';
            }

            if($department == 'cse') {
                if($semester == '1-1') {
                    if($section == 'A') {
                        $query = 'SELECT * from r20_1_1 WHERE Regd_No>="20ME1A0501" AND Regd_No<="20ME1A0565"';
                    }
                    elseif($section == 'B') {
                        $query = 'SELECT * from r20_1_1 WHERE Regd_No>="20ME1A0566" AND Regd_No<="20ME1A05D0"';
                    }
                    elseif($section == 'C') {
                        $query = 'SELECT * from r20_1_1 WHERE Regd_No>="20ME1A05D1" AND Regd_No<="20ME1A05J2"';
                    }
                }
                elseif($semester == '1-2') {
                    if($section == 'A') {
                        $query = 'SELECT * from r20_1_2 WHERE Regd_No>="20ME1A0501" AND Regd_No<="20ME1A0565"';
                    }
                    elseif($section == 'B') {
                        $query = 'SELECT * from r20_1_2 WHERE Regd_No>="20ME1A0566" AND Regd_No<="20ME1A05D0"';
                    }
                    elseif($section == 'C') {
                        $query = 'SELECT * from r20_1_2 WHERE Regd_No>="20ME1A05D1" AND Regd_No<="20ME1A05J2"';
                    }
                }
                elseif($semester == '2-1') {
                    if($section == 'A') {
                        $query = 'SELECT * FROM `r20_2_1` WHERE (S_No>=1 AND S_No<=62) OR (S_No>=204 AND S_No<=206) OR (S_No>=185 AND S_No<=189)';
                    }
                    elseif($section == 'B') {
                        $query = 'SELECT * FROM `r20_2_1` WHERE (S_No>=63 AND S_No<=126) OR (S_No>=190 AND S_No<=193)';
                    }
                    elseif($section == 'C') {
                        $query = 'SELECT * FROM `r20_2_1` WHERE (S_No>=127 AND S_No<=184) OR (S_No>=194 AND S_No<=203)';
                    }
                }
                elseif($semester == '2-2') {
                    if($section == 'A') {
                        $query = 'SELECT * FROM `r20_2_2` WHERE (S_No>=1 AND S_No<=59) OR (S_No>=180 AND S_No<=184)';
                    }
                    elseif($section == 'B') {
                        $query = 'SELECT * FROM `r20_2_2` WHERE (S_No>=60 AND S_No<=122) OR (S_No>=185 AND S_No<=188)';
                    }
                    elseif($section == 'C') {
                        $query = 'SELECT * FROM `r20_2_2` WHERE (S_No>=123 AND S_No<=179) OR (S_No>=189 AND S_No<=198)';
                    }
                }
            }

            $exequery = mysqli_query($con,$query);
            $columnquery = $con -> query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'r20' AND TABLE_NAME = '$table'");
            $norows = mysqli_num_rows($exequery);
            while($row = $columnquery->fetch_assoc()) {
                $rows[] = $row;
            }
            $columnArr = array_column($rows,'COLUMN_NAME');
        }
    }
?>
<!DOCTYPE html>
    <head>
        <title>Overall</title>
        <link rel="stylesheet" href="section.css">
    </head>
    <body>
        <div class="result">
            <h1><?php echo strtoupper($department) ?> <?php echo $section ?> <?php echo $semester ?> Results</h1>
            <div class="classes">
                <table>
                    <thead>
                        <th><?php print_r($columnArr[1])?></th>
                        <th><?php print_r($columnArr[2])?></th>
                        <th><?php print_r($columnArr[3])?></th>
                        <th><?php print_r($columnArr[4])?></th>
                        <th><?php print_r($columnArr[5])?></th>
                        <th><?php print_r($columnArr[6])?></th>
                        <th><?php print_r($columnArr[7])?></th>
                        <th><?php print_r($columnArr[8])?></th>
                        <th><?php print_r($columnArr[9])?></th>
                        <th><?php print_r($columnArr[10])?></th>
                        <th><?php print_r($columnArr[11])?></th>
                        <th><?php print_r($columnArr[12])?></th>
                        <th><?php print_r($columnArr[13])?></th>
                        <th><?php print_r($columnArr[14])?></th>
                        <th><?php print_r($columnArr[15])?></th>
                        <th><?php print_r($columnArr[16])?></th>
                        <th><?php print_r($columnArr[17])?></th>
                        <th><?php print_r($columnArr[18])?></th>
                        <th><?php print_r($columnArr[19])?></th>
                        <th><?php print_r($columnArr[20])?></th>
                        <th><?php print_r($columnArr[21])?></th>
                        <th><?php print_r($columnArr[22])?></th>
                        <th><?php print_r($columnArr[23])?></th>
                        <th><?php print_r($columnArr[24])?></th>
                        <th><?php print_r($columnArr[25])?></th>
                        <th><?php print_r($columnArr[26])?></th>
                        <th><?php print_r($columnArr[27])?></th>
                        <th><?php print_r($columnArr[28])?></th>
                    </thead>
                    <?php
                        if($norows>0) {
                            while($row = mysqli_fetch_assoc($exequery)) {
                                ?>
                                <tr>
                                    <td> <?php echo $row[$columnArr[1]]?></td>
                                    <td> <?php echo $row[$columnArr[2]]?></td>
                                    <td> <?php echo $row[$columnArr[3]]?></td>
                                    <td> <?php echo $row[$columnArr[4]]?></td>
                                    <td> <?php echo $row[$columnArr[5]]?></td>
                                    <td> <?php echo $row[$columnArr[6]]?></td>
                                    <td> <?php echo $row[$columnArr[7]]?></td>
                                    <td> <?php echo $row[$columnArr[8]]?></td>
                                    <td> <?php echo $row[$columnArr[9]]?></td>
                                    <td> <?php echo $row[$columnArr[10]]?></td>
                                    <td> <?php echo $row[$columnArr[11]]?></td>
                                    <td> <?php echo $row[$columnArr[12]]?></td>
                                    <td> <?php echo $row[$columnArr[13]]?></td>
                                    <td> <?php echo $row[$columnArr[14]]?></td>
                                    <td> <?php echo $row[$columnArr[15]]?></td>
                                    <td> <?php echo $row[$columnArr[16]]?></td>
                                    <td> <?php echo $row[$columnArr[17]]?></td>
                                    <td> <?php echo $row[$columnArr[18]]?></td>
                                    <td> <?php echo $row[$columnArr[19]]?></td>
                                    <td> <?php echo $row[$columnArr[20]]?></td>
                                    <td> <?php echo $row[$columnArr[21]]?></td>
                                    <td> <?php echo $row[$columnArr[22]]?></td>
                                    <td> <?php echo $row[$columnArr[23]]?></td>
                                    <td> <?php echo $row[$columnArr[24]]?></td>
                                    <td> <?php echo $row[$columnArr[25]]?></td>
                                    <td> <?php echo $row[$columnArr[26]]?></td>
                                    <td> <?php echo $row[$columnArr[27]]?></td>
                                    <td> <?php echo $row[$columnArr[28]]?></td>
                                </tr>
                                <?php
                            }
                        } 
                    ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>