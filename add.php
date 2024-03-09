<?php
include_once('connections/connection.php');
$con = con();

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
  
    $sql = "INSERT INTO `info`(  `lastname`,`firstname`,`middle`,`email`,`contact`,`degree`,`job_title`,`status`,`salary`,`nationality`,`gender`,`birthdate`,`street`,`barangay`,`town`,`province`) VALUES ('$lastname','$firstname','$middle','$email','$contact','$degree','$job','$status','$salary','$nationality','$gender','$birthdate','$street','$barangay','$town','$province')";
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
                    <input type="text" name="lastname" >
                </div>

                <div class="col">
                    <label for="">firstname</label>
                    <input type="text" name="firstname" >
                </div>

                <div class="col">
                    <label for="">Middle Initial</label>
                    <input type="text" name="middle" >
                </div>

                <div class="col">
                    <label for="">Email Address</label>
                    <input type="email" name="email" >
                </div>

                <div class="col">
                    <label for="">Contact Number</label>
                    <input type="number" name="contact" >
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
                    <input type="number" name="salary" >
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
                    <input type="date" name="birthdate" >
                </div>

            </div><!---end of row-->

            <div class="row">
                <div class="col">
                    <label for="">Street</label>
                    <input type="text" name="street" >
                </div>

                <div class="col">
                    <label for="">Barangay</label>
                    <input type="text" name="barangay" >
                </div>

                <div class="col">
                    <label for="">Town</label>
                    <input type="text" name="town" >
                </div>

                <div class="col">
                    <label for="">Province</label>
                    <input type="text" name="province" >
                </div>

            </div><!---end of row-->
            <button name="submit">Register</button>
        </form>
        <button onclick="document.location='index.php'" >Cancel</button>
    </div>
</body>
</html>