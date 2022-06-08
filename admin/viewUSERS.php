<?php
include_once '../includes/dbconnection.php';
$result = mysqli_query($con,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <?php include_once "../includes/header.php" ?>
<div class="container-fluid">

<div class="row">
    <?php include_once "sidebar.php" ?>
    <div class="col-10 bg-success">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        
    <div class="row ">
            <div class="col-lg-12 ">
        
    
          <h2> Registered Users</h2>
            
            </div> 
            <hr/>
            </div>
            </h4>
     </div>
     <!-- /.panel-heading -->
  <?php
if (mysqli_num_rows($result) > 0) {
?>   
         <table class="table table-light table-hover">
         <tr><th>S No.</th>
         
<th>FullName</th>
<th>Email</th>
<th>Phone_no</th>
<th>UserID</th>
<th>Gender</th>
<!-- <th>Picture</th> -->
<th>Age</th>
<th>Language</th>
    </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>           
 
            
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row ['FullName'];?></td>
        <td><?php echo $row ['Email'];?></td>
        <td><?php echo $row ['Phone_no'];?></td>
        <td><?php echo $row ['UserID'];?></td>
        <td><?php echo $row ['Gender'];?></td>
        <!-- <td width="50"><img src="<?php //echo $row['picture']; ?>" width="50" height="50" class="img-rounded"></td> -->
        <td><?php echo $row ['Age'];?></td>
        <td><?php echo $row ['Language'];?></td>
        
               </tr>
            <?php
            $i++;
            }
            ?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>

                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>

	
</div>	


</body>
</html>
