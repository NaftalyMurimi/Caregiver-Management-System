<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit'])//&&$_FILES['userfile']['size']>0
)
  {
 
 $username = $_POST['username'];
 $phone = $_POST['phone'];
 $description = $_POST['description'];
 $age = $_POST['age'];
 $gender = $_POST['gender'];
 $clientid = $_POST['clientid'];
 $location = $_POST['location'];
          $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
          $image_name= addslashes($_FILES['image']['name']);
          $image_size= getimagesize($_FILES['image']['tmp_name']);
    
          move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/" . $_FILES["image"]["name"]);      
          $upimage="../uploads/" . $_FILES["image"]["name"];
          
          
          $con->query("INSERT INTO `clients`(`id`, `username`, `phone`, `age`, `gender`, `location`, `description`, `picture`, `ClientID`)
		   VALUES ('null',' $username',' $phone',' $age','$gender','$location','$description','$upimage','$clientid')")or die(mysql_error());
        $msg="You have submitted the clients successfully.";
        }
        else { 
         // header('location:../View/View.php');   
       // $msg1="Failed!!!! Try again.";

        }
   
}



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
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main list-group-item-primary">
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"> <h2>Register Clients</h2></div>
<hr>
<div class="panel-body">
<p style="font-size:16px; color:green" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
<div class="col-12">
							
<form name="Myform" id="Myform" action="" method="POST" enctype="multipart/form-data">
       <!-- <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>-->
 <div class="col-5 float-end">
		<label for="phone" class="form-label">Phone No:</label>
		<input type="text" class="form-control"  name="phone" required="true">
	  </div>
	   <div class="col-5">
    <label for="name" class="form-label">Client Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="username" required="true">
    </div>
 
	<div class="col-5 float-end">
		<label for="age" class="form-label">Age:</label>
		<input type="number" class="form-control"  name="age" required="true">
	  </div>
	<div class="col-5">
		<label  class="form-label">Gender:</label>
		<select class="form-control" name="gender" required="true" >
		<option>Male</option>
		<option>Female</option>
		
	  </select>
	  
	</div>
  <div class="col-5 float-end">
    <label for="date" class="form-label">Picture:</label>
	<input type="file" class="form-control" id="" name="image" required="true">
	
  </div>
  <div class="col-5 ">
    <label for="date" class="form-label">Location:</label>
    <input type="text" class="form-control"  name="location" required="true">
  </div>
  
  
  <div class="col-5 float-end">
<!-- code to generate the pass UserId -->
<?php
  function passFunc($len, $set = "")
    {
      $gen = "";
      for($i = 0; $i < $len; $i++)
        {
          $set = str_shuffle($set);
          $gen.= $set[0]; 
        }
      return $gen;
    } 
    
?> 
<!-- function to be used to generate the passwords -->
<?php $change =  passFunc(8, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');?> 
            <label  class="form-label">User Id:</label>
              
<input class="form-control col-5"  style="width:300px;" type = "text" name="clientid"  id = "pass" required="true" readonly="readonly"> <br>
  <input type = "button" value = "Generate" onclick = "document.getElementById('pass').value = '<?php echo $change?>'">         
            </div>
  
  <div class="col-5">
    <label for="age" class="form-label">Health Description:</label>
    <textarea class="form-control" id="" rows="4" name="description" required="true"></textarea>
  </div>
  <div class="col-md-5 my-3">
    <button type="submit" class="btn btn-primary" name ="submit">Submit </button>
  </div>
        
    </form>     
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->

      		
		

          
    </div>
</div>

	
</div>	


</body>
</html>
