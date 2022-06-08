<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	
</head>
<body class="container-fluid bg-info">
<div class="row"> <h2 class="text-center">Care Giving Management System</h2></div>
<hr />
	<div class="row">
			<h2 align="center"> Login As</h2>
	
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading ">Log in</div>
				<div class="panel-body">
				
					<form >
					 <div class="form-group">
								<select class="form-control" onchange = "page(this.value)" >
                                <option value = "admin.php">System Admin</option>
		                        <option value = "user.php">System User</option>

								</select>
							</div> 
							
							
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
    <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
