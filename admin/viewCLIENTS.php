<?php
include_once '../includes/dbconnection.php';
$result = mysqli_query($con,"SELECT * FROM clients");
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
        
    
           Project documents List
            
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
<th>Name</th>
<th>Phone</th>
<th>Age</th>
<th>Gender</th>
<th>Picture</th>
<th>Location</th>
<th>Description</th>
    </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>           
 
            
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row ['username'];?></td>
        <td><?php echo $row ['phone'];?></td>
        <td><?php echo $row ['age'];?></td>
        <td><?php echo $row ['gender'];?></td>
        <td width="50"><img src="<?php echo $row['picture']; ?>" width="50" height="50" class="img-rounded"></td>
        <td><?php echo $row ['location'];?></td>
        <td><?php echo $row ['description'];?></td>
        
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
