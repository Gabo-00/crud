<?php
include_once('connections/connection.php');
$con = con();

$id = $_GET['id_number'];

$sql = "SELECT * FROM info WHERE id= $id";
$person =$con->query($sql) or die($con->error);
$row = $person->fetch_assoc();

if(isset($_POST['submit'])){

    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middle = $_POST['middle'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $degree = $_POST['degree'];
    $job = $_POST['job'];
    $status = $_POST['status'];
    $salary = $_POST['salary'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $street = $_POST['street'];
    $barangay = $_POST['barangay'];
    $town = $_POST['town'];
    $province = $_POST['province'];
  
   $sql = "UPDATE `info` SET `lastname` ='$lastname', `firstname` ='$firstname',`middle`='$middle', `email`='$email',`contact`='$contact',`degree`='$degree', `job_title`='$job',`status`='$status', `salary`='$salary', `nationality`='$nationality', `gender`='$gender',`birthdate`='$birthdate',`street`='$street', `barangay`='$barangay',`town`='$town',`province`='$province' WHERE id= '$id' ";
  
   $con->query($sql) or die($con->error);
  
   echo header("Location: index.php");
  
  
  }

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
        <form action="" method="POST">
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
                    <select name="degree" id="" >
                        <option value="College">College</option>
                        <option value="HighSchool">HighSchool</option>
                        <option value="Elementary">Elementary</option>
                    </select>
                </div>

                <div class="col">
                    <label for="">Job Title</label>
                    <select name="job" id="" >
                        <option value="College">College</option>
                        <option value="HighSchool">HighSchool</option>
                        <option value="Elementary">Elementary</option>
                    </select>
                </div>

                <div class="col">
                    <label for="">Employment Status</label>
                    <select name="status" id="" >
                        <option value="College">Contactual</option>
                        <option value="HighSchool">HighSchool</option>
                        <option value="Elementary">Elementary</option>
                    </select>
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
                    <select name="nationality" id="" >
                        <option value="College">Filipino</option>
                        <option value="HighSchool">American</option>
                        <option value="Elementary">Others</option>
                    </select>
                </div>

                <div class="col">
                    <label for="">Gender </label>
                    <select name="gender" id="" >
                        <option value="College">Male</option>
                        <option value="HighSchool">Female</option>
                        <option value="Elementary">Others</option>
                    </select>
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
            <button name="submit">Submit</button>
        </form>
    </div>
</body>
</html>