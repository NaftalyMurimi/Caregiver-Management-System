<?php
include_once '../includes/dbconnection.php';
$result = mysqli_query($con,"SELECT * FROM jobs");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CGMS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <?php include_once "../includes/header.php" ?>
<div class="container-fluid">

<div class="row">
    <?php include_once "sidebar.php" ?>
    <div class="col-10 list-group-item-primary">
    <div class="modal-body">
    
    <div class="col-md-12">
    <?php
if (mysqli_num_rows($result) > 0) {
    
?> 					
		<div class="table-responsive">
            <table class="table table-bordered  table-hover">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Applicant Name</th>
                  <th>Applicant ID</th>
                  <th>Client Name</th>
                  <th>Client ID</th>
                  <th>Job Status</th>
                  <th>Action</th>
                </tr>
              </thead>
<?php
while($row = mysqli_fetch_array($result)) {
    $id=$row['id'];
    $cnt=$cnt+1; 
?>    
              <tbody>
                <tr>
                  <td><?php echo $cnt;?></td>
                  <td><?php  echo $row['UserName'];?></td>
                  <td><?php  echo $row['UserIDNO'];?></td>
                  <td><?php  echo $row['ClientName'];?></td>
                  <td><?php  echo $row['ClientID'];?></td>
				  <td><?php  echo $row['Status'];?></td>
                  
                    <!-- create a form to approve or decline job applications -->
                     <td style="text-align:center">
                    <a href="jobValidate.php?id=<?php echo $row["id"]; ?>" class='btn btn-success btn-outline'>Validate</a>

                </td>
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

              </tbody>
            </table>
          </div>
		</div>      
	
    </div>
			 	
 

  

         
 
            

              
            </div>

	
</div>	



</body>
</html>
