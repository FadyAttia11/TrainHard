<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
	$user_name = $user_data['user_name'];

    if($user_data['user_role'] == 'trainee') {
		header('Location: TraineeProgram.php');
	  } else if (!$user_data) {
		header('Location: index.php');
	}

	$query = "select * from trainer_programs where trainer_name = '$user_name'";
	$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Trainer Program</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
	<!-- main banner -->
	<div class="userprofile" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<!-- nav -->
				<nav class="py-lg-4 py-3 px-xl-5 px-lg-3 px-2">
					<div id="logo">
						<h1><a class="" href="index.php"><span class="fa fa-spinner mr-2" aria-hidden="true"></span>Oneshot killers</a></h1>
					</div>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu mt-2">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="TrainerProgram.php">My Programs</a></li>
						<li><a href="Questions.php">Answer Questions</a></li>
						<li><a href="TrainerSupplement.php">My Supplements</a></li>
						<li><a href="addNewProgram.php">Add New Program</a></li>
						<li><a href="userprofile.php"><?php echo $user_data['user_role']; ?>: <?php echo $user_data['user_name']; ?></a></li>
						<li><a href="logout.php" class="text-danger">Logout</a></li>
					</ul>
				</nav>
				<!-- //nav -->
			</div>
		</header>
		<!-- //header -->
	</div>
<section class="mt-4 ml-2">
	<div class="container" style="max-width: 50vw; display: flex; justify-content: center;">
		<a href="addNewProgram.php" class="btn btn-primary mb-4 mr-4">Add New Program</a>
		<a href="programsApplied.php" class="btn btn-primary mb-4 ml-4">Show Programs Applied</a>
	</div>
	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			$program_id = $_POST['program_id'];
			
			$delete_query = "delete from trainer_programs where id = ('$program_id')";
			$delete_result = mysqli_query($con, $delete_query);

			if($delete_result) {
				echo "Successfully deleted Your Program";
				header('Location: TrainerProgram.php');
			}
		}
		
		while($row = mysqli_fetch_array($result)) {
	?>
	<div class="row col-sm-12 ">
		<div class="col-sm-6 m-auto">
			<div class="card">
				<img src=<?php echo "./images/". $row['type']. ".jpg" ?> class="card-img-top" alt="card_img">
				<div class="card-body">
					<h5 class="card-title">Fitness Program</h5>
					<h6><?php echo $row['type']. " program" ?></h6>
					<p class="card-text"><?php echo $row['description'] ?></p>
					<p class="card-text">Monthly Price: $<?php echo $row['price'] ?></p>
					<p class="card-text">Total Period: <?php echo $row['period'] ?> Hours</p>
					<div class="text-right">
						<!-- <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#myModal">Edit</button> -->
						<form method="post">
							<input type="hidden" name="program_id" value=<?php echo $row['id'] ?>>
							<input type="submit" value="Delete" class="btn btn-danger mt-2">
						</form>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<?php } ?>

</section>

<div class="footer mt-5">
	<div class="container-fluid footer_content">
		<div class="row">
			<div class="col-sm-4">
					<h2>Subscribe <span>Newsletter</span></h2>
					<p class="subscribe_footer">By subscribing to our mailing list you will always get latest news from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
					
				
			</div>
			<div class="col-sm-4">
					<h2>Our <span>Links</span> </h3>
					  <ul class="links">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Mail Us</a></li>
						</ul>
			</div>
			<div class="col-sm-4">
					<h2>Contact <span>Us</span></h2>
						<ul class="con_inner_text">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span>Cairo <label> Egypt.</label></li>
							<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@example.com</a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> +1234 567 567</li>
						</ul>

					<ul class="social_agileinfo">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
		</div>
		<div class="copyright text-center mt-5">
			<p>© 2020 gym. All rights reserved</a>
			</p>
		</div>
	</div>
</div>
	<div class="modal" id="myModal">
		<div class="modal-dialog">
		  <div class="modal-content">
	  
			<!-- Modal Header -->
			<div class="modal-header">
			  <h4 class="modal-title">Trainer Program</h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
	  
			<!-- Modal body -->
			<div class="modal-body">
				<div>
					<form>
					<div class="form-group">
						<label >Name Of Program</label>
						<input type="text" placeholder="Name Of Program" class="form-control" />
					</div>
					<div class="form-group">
						<label >Type</label>
						<select class="form-control">
							<option></option>
							<option></option>
						</select>
					</div>
					<div class="form-group">
						<label >picture</label>
						<input type="file" class="form-control" />
					</div>
					<div class="form-group">
						<label >Description</label>
						<textarea class="form-control">
							</textarea>
					</div>
			
					
					
				
					</form>
				</div>
			</div>
	  
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
			  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
	  
		  </div>
		</div>
	  </div>
	<!-- //footer -->
<script src="./js/jquery.js"></script>
<script src="./js/propper.js"></script>
<script src="./js/bootstrap.min.js"></script>


</body>

</html>