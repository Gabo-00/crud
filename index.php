<?php

include_once('connections/connection.php');
$con = con();

$sql = "SELECT * FROM info";
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
        <a class="btn btn-success" href="add.php">Add Student</a>
        <table>
            <thead>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Job Title</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <?php do{?>
            <tbody>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['firstname'];echo "&nbsp;"; echo $row['middle'];echo "&nbsp;";  echo $row['lastname'];?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['job_title']?></td>
                <td><?php echo $row['status']?></td>
                <td><button class="btn btn-success" onclick="document.location='edit.php?id_number=<?php echo $row['id'] ?>'">Edit</button>&nbsp;
                    <button class="btn btn-warning" onclick="document.location='view.php?id_number=<?php echo $row['id'] ?>'">View</button>&nbsp;
                    
                    <button class="btn btn-danger" onclick="document.location='delete.php?id_number=<?php echo $row['id'] ?>'">Delete</button></td>
                    
                    
            </tbody>
           <?php }while($row = $person->fetch_assoc()) ;?>
        </table>
    </div>

   
</body>
</html> 