<?php
include_once('connections/connection.php');
$con = con();

$id = $_GET['id_number'];

$sql = "SELECT * FROM info WHERE id= $id";
$person =$con->query($sql) or die($con->error);
$row = $person->fetch_assoc();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
       
        <form action="">
            <h2>Employee Information</h2>
            <div class="row">
                <div class="col">
                    <label for="">lastname</label>
                    <input type="text" name="lastname" value="<?php echo $row['lastname']?>">
                </div>

                <div class="col">
                    <label for="">firstname</label>
                    <input type="text" name="firstname" value="<?php echo $row['firstname']?>">
                </div>

                <div class="col">
                    <label for="">Middle Initial</label>
                    <input type="text" name="middle" value="<?php echo $row['middle']?>">
                </div>

                <div class="col">
                    <label for="">Email Address</label>
                    <input type="email" name="email" value="<?php echo $row['email']?>">
                </div>

                <div class="col">
                    <label for="">Contact Number</label>
                    <input type="number" name="contact" value="<?php echo $row['contact']?>">
                </div>

            </div> <!---end of row-->

            <div class="row">
                <div class="col">
                    <label for="">Degree</label>
                    <input type="text" value="<?php echo $row['degree']?>">
                </div>

                <div class="col">
                    <label for="">Job Title</label>
                    <input type="text" value="<?php echo $row['job_title']?>">
                </div>

                <div class="col">
                    <label for="">Employment Status</label>
                    <input type="text" value="<?php echo $row['status']?>">
                </div>

                <div class="col">
                    <label for="">Salary</label>
                    <input type="number" name="salary" value="<?php echo $row['salary']?>">
                </div>

            </div><!---end of row-->

            <h2>Other Information</h2>

            <div class="row">
                <div class="col">
                    <label for="">Nationality </label>
                    <input type="text" value="<?php echo $row['nationality']?>">
                </div>

                <div class="col">
                    <label for="">Gender </label>
                    <input type="text" value="<?php echo $row['gender']?>">
                </div>

                <div class="col">
                    <label for="">Birthdate</label>
                    <input type="date" name="birthdate" value="<?php echo $row['birthdate']?>">
                </div>

            </div><!---end of row-->

            <div class="row">
                <div class="col">
                    <label for="">Street</label>
                    <input type="text" name="street" value="<?php echo $row['street']?>">
                </div>

                <div class="col">
                    <label for="">Barangay</label>
                    <input type="text" name="barangay" value="<?php echo $row['barangay']?>">
                </div>

                <div class="col">
                    <label for="">Town</label>
                    <input type="text" name="town" value="<?php echo $row['town']?>">
                </div>

                <div class="col">
                    <label for="">Province</label>
                    <input type="text" name="province" value="<?php echo $row['province']?>">
                </div>

            </div><!---end of row-->
        </form>
    </div>
</body>
</html>