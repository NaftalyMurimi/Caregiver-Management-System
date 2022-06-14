<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['userid']==0)) {
  header('location:../logout.php');
  } else{

if(isset($_POST['submit']))
  {
 $userid=$_SESSION['userid'];
 //echo "working now";
 $username = $_POST['username'];
 $useridnumber = $_POST['useridnumber'];
 $clientid = $_POST['clientid'];
 $clientname = $_POST['clientname'];      
        if($con){
       
        $query = "INSERT INTO `jobs`(`id`, `userid`, `UserName`, `UserID_NO`, `ClientName`, `ClientID`) VALUES ('null','$userid','$username','$useridnumber','$clientname','$clientid')";
        mysqli_query($con,$query) or die('Error, query failed'); 
        mysqli_close($con);
        $msg="You have submitted your job request successfully.";
        }
        else { 
         // header('location:../View/View.php');   
          $msg1="Failed!!!! Try again.";
        }
   
}



}
  ?>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Application form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="col-12">
            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
            echo $msg;}  ?> </p>
            <p style="font-size:16px; color:red" align="center"> <?php if($msg1){
            echo $msg1;}  ?> </p>
            <p class="text-center"><i>Applicant details</i></p>
            <label for="name" class="form-label">User Name:</label>
            <input class="form-control" placeholder="User Name"  name="username" type="text" required="true">
          </div>
          <div class="col-12">
            <label for="name" class="form-label">User Id:</label>
            <input class="form-control" placeholder="User Name"  name="useridnumber" type="text" required="true">
          </div>
          <hr>
          <div class="col-12">
            <p class="text-center"><i>Client details</i></p>
            <label  class="form-label">Client Id:</label>
            <input class="form-control" placeholder="Client Id"  name="clientid" type="text" required="true" >            
          </div>
          <div class="col-md-12">
            <label  class="form-label">Client name:</label>
            <input type="text" class="form-control" name="clientname" placeholder="Client Name" required="true" >           
            </div>
            <button type="button" name="submit" class="btn btn-primary">Sumbit</button>
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
        
      </div>
      
    </div>
  </div>
</div>