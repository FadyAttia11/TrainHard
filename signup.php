<?php
session_start();

    include("connection.php");
    include("functions.php");

    $profile_pic = "";
?>

<!DOCTYPE html>
<html>

<head>
	<title>Oneshot killers</title>
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
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<section class="login">
		<div class="form">
				<form class="m-auto" method="post" enctype="multipart/form-data">
					<h1 class="text-center"><a class="" href="index.php"><span class="fa fa-spinner mr-2" aria-hidden="true"></span>Oneshot killers</a></h1>
					<?php
						if($_SERVER['REQUEST_METHOD'] == "POST") {
							//something was posted
							$user_name = $_POST['username'];
							$phone = $_POST['phone'];
							$email = $_POST['email'];
							$password = $_POST['password'];
							$gender = $_POST['gender'];
							$age = $_POST['age'];
							$user_role = $_POST['user_role'];;
					
							$target_dir = "uploads/";
							$target_file = $target_dir . time() . basename($_FILES["fileToUpload"]["name"]);
							$uploadOk = 1;
							$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
							// Check if image file is a actual image or fake image
							if(isset($_POST["submit"])) {
								$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
								if($check !== false) {
									// echo "File is an image - " . $check["mime"] . ".";
									$uploadOk = 1;
								} else {
									echo "File is not an image.";
									$uploadOk = 0;
								}
							}
					
							// Check file size
							if ($_FILES["fileToUpload"]["size"] > 500000) {
								echo "Sorry, your file is too large.";
								$uploadOk = 0;
							}
					
							// Allow certain file formats
							if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
								&& $imageFileType != "gif" ) {
								echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
								$uploadOk = 0;
							}
					
							// Check if $uploadOk is set to 0 by an error
							if ($uploadOk == 0) {
								echo "Sorry, your file was not uploaded.";
								// if everything is ok, try to upload file
								} else {
								if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
									$profile_pic = time() . basename($_FILES["fileToUpload"]["name"]);
									// echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
								} else {
									echo "Sorry, there was an error uploading your file.";
								}
							}
							
							if(!empty($user_name) && !empty($email) && !empty($password) && !empty($gender) && !empty($age) && !empty($phone) && !empty($user_role)) {
								//save to database
								$user_id = random_num(20);
								$query = "insert into users (user_id,user_name,email,password,phone,user_role,age,gender,image) values ('$user_id','$user_name','$email', '$password','$phone','$user_role','$age','$gender','$profile_pic')";
					
								$result = mysqli_query($con, $query);
								if($result) {
									$_SESSION['user_id'] = $user_id;
									if($user_role === 'trainee') {
										header('Location: TraineeHome.php');
									} else if($user_role === 'trainer') {
										header('Location: Trainer.php');
									}
								} else {
									echo  "username or email is already taken!";
								}
							} else {
									echo  "Please enter some valid information";
							}
						}
					?>
					<div class="row col-sm-12 mt-3">
						<div class="form-group col-sm-6">
							<label>User Name</label>
							<input type="text" placeholder="User Name" class="form-control" name="username" required>
							</div>
							<div class="form-group col-sm-6">
								<label>Phone Number</label>
								<input type="number" placeholder="Phone Number" class="form-control"  name="phone" required>
							</div>
							<div class="form-group col-sm-6">
								<label>Email</label>
								<input type="email" placeholder="Email" class="form-control" name="email" required>
							</div>
							<div class="form-group col-sm-6">
							<label>Password</label>
							<input type="password" placeholder="Password" class="form-control" name="password" required>
							</div>
							<div class="form-group col-sm-6">
								<label>Gender</label>
								<select class="form-control"  name="gender" required>
									<option>Male</option>
									<option>Female</option>
								</select>	
							</div>
							<div class="form-group col-sm-6">
								<label>Age</label>
								<input type="number" placeholder="Age" class="form-control"  name="age" required>
							</div>
							
								<div class="form-group col-sm-12">
									<label>Upload Image</label>
									<input type="file" class="form-control file_height" name="fileToUpload" required>
									</div>
									<div class="col-sm-6 d-flex justify-content-between">
										<div class="form-check">
										
											<input
											  class="form-check-input"
											  type="radio"
											  name="user_role"
											  id="flexRadioDefault1"
											  value="trainee"
											  checked
											/>
											<label class="form-check-label" for="flexRadioDefault1"> Trainee </label>
										  </div>
										  <div class="form-check">
											<input
											  class="form-check-input"
											  type="radio"
											  name="user_role"
											  id="flexRadioDefault2"
											  value="trainer"
											/>
											<label class="form-check-label" for="flexRadioDefault2">Trainer</label>
										  </div>										
									</div>
								



					</div>
					<div class="text-center mt-2">
						<button type="submit" class="btn btn-primary m-auto">Sign Up</button>
					</div>
					<div class="text-right mt-3">
						<a href="./Login.php" class="signup">Already have account</button>
							<a href="./gymSignUp.php" class="signup ml-2">/ Sign Up as Gym</button>
					</div>
				</form>
		</div>
	</section>
</body>

</html>