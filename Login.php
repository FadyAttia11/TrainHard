<?php
session_start();

    include("connection.php");
    include("functions.php");
?>

<!DOCTYPE html>
<html>

<head>
	<title>oneshot killers</title>
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
	<section class="login">
		<div class="form">
				<form class="m-auto" method="post">
					<h1 class="text-center"><a class="" href="index.php"><span class="fa fa-spinner mr-2" aria-hidden="true"></span>Oneshot killers</a></h1>
					<?php
						if($_SERVER['REQUEST_METHOD'] == "POST") {
							//something was posted
							$user_name = $_POST['username'];
							$password = $_POST['password'];
					
							if(!empty($user_name) && !empty($password)) {
								//read from database
								$query = "select * from users where user_name = '$user_name' limit 1";
					
								$result = mysqli_query($con, $query);
					
								if($result) {
									if($result && mysqli_num_rows($result) > 0) {
										$user_data = mysqli_fetch_assoc($result);
										if($user_data['password'] === $password) {
											$_SESSION['user_id'] = $user_data['user_id'];
											
											if($user_data['user_role'] === 'trainee') {
												header('Location: TraineeHome.php');
											} else if($user_data['user_role'] === 'trainer') {
												header('Location: Trainer.php');
											} 
											die;
										}
									}
								}
					
								echo "Wrong username or password!";
							}else {
								echo "Please enter some valid information!";
							}
						}
					?>
					<div class="form-group">
						<label>User Name</label>
					<input type="text" placeholder="User Name" class="form-control" name="username" required>
					</div>
					<div class="form-group">
					<label>Password</label>
					<input type="password" placeholder="Password" class="form-control" name="password" required>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary m-auto">Login</button>
					</div>
					<div class="text-right mt-3">
						<a href="./signup.php" class="signup">Don't have an account? Create an Account</button>
					</div>
				</form>
		</div>
	</section>
</body>

</html>