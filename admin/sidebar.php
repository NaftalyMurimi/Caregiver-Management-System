<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
?>
<?php
$uid=$_SESSION['adminid'];
$ret=mysqli_query($con,"select Username from admin where id='$uid'");
$row=mysqli_fetch_array($ret);
$username=$row['Username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
    a{
        height:40px;
        margin-bottom:4px ;
        padding-left: 20px;
        text-decoration: none;
        text-align:start;
        line-height:40px;
    }
    .h{
        min-height: 580px;
    }
</style>
</head>
<body>
    
   
		
        <!-- sidebar -->
		
            <div class="col-2 bg-light h">
              <div class="list-group mb-3">
                 <div href="#" class="list-group-item ">
                   <div class="row align-items-center">
                       <div class="col"> <i class="bi bi-person-square " style="font-size: 4rem;"> </i></div>
                        <div class="col"><h6><?php echo $username; ?></h6> </div>
                        
                    </div>
                </div>
              <hr>
                <a href="addCLIENTS.php" class="list-group-item-primary"><i class="bi bi-person-plus-fill"> &nbsp;</i>Add clients</a>
                <a href="viewCLIENTS.php" class="list-group-item-secondary"><i class="bi bi-person-lines-fill"> &nbsp;</i>View Clients</a>
                <a href="viewUSERS.php" class="list-group-item-success"><i class="bi bi-person-video3"> &nbsp; </i>View Users</a>
                <a href="#" class=" list-group-item-danger"> <i class="bi bi-person-bounding-box">&nbsp;</i> Profile</a>
                <a href="../logout.php" class=" list-group-item-warning"> <i class="bi bi-box-arrow-left">&nbsp;</i>Log Out</a>
            </div>
       </div>
       


	
</body>
</html>