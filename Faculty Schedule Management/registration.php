<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300&display=swap" rel="stylesheet">
  
  <style>
body {
  background-image: url('image/pic4.jpg');
}
</style>
  
</head>
<body>






<section class="my-5">
	<div class="py-5">
		<h2 class="text-center" style="color:white;">Create Account</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label style="color:white;">Name</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>

             <div class="form-group">
				<label style="color:white;">Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>

             <div class="form-group">
				<label style="color:white;">E-mail</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>

			<div class="form-group">
				<label style="color:white;">Password</label>
				<input type="Password" name="password" autocomplete="off" class="form-control">
			</div>

  

			<button type="submit" class="btn btn-secondary" style="color:white;">Submit</button>


				
			</div>
			
		</form>
	</div>

</section>



  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>