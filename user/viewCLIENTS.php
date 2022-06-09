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
    <?php include_once "sidebaruser.php" ?>
    <div class="col-10 list-group-item-primary">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main ">
        
    <div class="row ">
            <div class="col-lg-12 ">
        
    
          <h2> Registered List</h2>
            
            </div> 
            
            <hr/>
            </div>
            </h4>
     </div>
     <?php
if (mysqli_num_rows($result) > 0) {
?>

<div class="row">
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>  
<div class="col-4">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo $row['picture']; ?>" class="img-fluid rounded-start" alt="...">
       <!-- Button trigger modal -->
       <button type="button" class="btn btn-primary mt-3 mx-3">
       Apply
      </button>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><i><b>Name:</b></i>&nbsp <?php echo $row ['username'];?></h5>
        <p class="card-text"><i><b>Tel:</b></i>&nbsp <?php echo $row ['phone'];?></p>
        <p class="card-text"><i><b>Age:</b></i>&nbsp <?php echo $row ['age'];?></p>
        <p class="card-text"><i><b>Gender:</b></i>&nbsp <?php echo $row ['gender'];?></p>
        <p class="card-text"><i><b>Description:</b></i>&nbsp <?php echo $row ['description'];?></p>
        <p class="card-text"><i><b>Location:</b></i>&nbsp <small class="text-muted"><?php echo $row ['location'];?></small></p>
      </div>
     
    </div>
  </div>
</div>
</div>



     <!-- /.panel-heading -->

  

         
 
            
     
<?php } ?>

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
