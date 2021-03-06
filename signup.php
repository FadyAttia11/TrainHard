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
</head>

<body>
	<section class="login">
		<div class="form">
				<form class="m-auto ">
					<h1 class="text-center"><a class="" href="index.html"><span class="fa fa-spinner mr-2" aria-hidden="true"></span>Oneshot killers</a></h1>
					<div class="row col-sm-12 mt-3">
						<div class="form-group col-sm-6">
							<label>First Name</label>
							<input type="text" placeholder="First Name" class="form-control">
							</div>
							<div class="form-group col-sm-6">
								<label>Last Name</label>
								<input type="text" placeholder="Last Name" class="form-control">
							</div>
							<div class="form-group col-sm-6">
								<label>Gender</label>
								<select class="form-control">
									<option>Choose</option>
									<option>Male</option>
									<option>Female</option>
								</select>	
							</div>
							<div class="form-group col-sm-6">
								<label>Date of Birth</label>
								<input type="date" placeholder="dd/mm/yyyy" class="form-control">
							</div>
							<div class="form-group col-sm-6">
								<label>Email</label>
								<input type="email" placeholder="Email" class="form-control">
							</div>
							<div class="form-group col-sm-6">
							<label>Password</label>
							<input type="password" placeholder="Password" class="form-control">
							</div>
							<div class="form-group col-sm-6">
								<label>Confirm Password</label>
								<input type="password" placeholder="Confirm Password" class="form-control">
								</div>
								<div class="form-group col-sm-6">
									<label>Upload Image</label>
									<input type="file" class="form-control file_height">
									</div>
									<div class="col-sm-6 d-flex justify-content-between">
										<div class="form-check">
										
											<input
											  class="form-check-input"
											  type="radio"
											  name="flexRadioDefault"
											  id="flexRadioDefault1"
											/>
											<label class="form-check-label" for="flexRadioDefault1"> Trainee </label>
										  </div>
										  <div class="form-check">
											<input
											  class="form-check-input"
											  type="radio"
											  name="flexRadioDefault"
											  id="flexRadioDefault2"
											  checked
											/>
											<label class="form-check-label" for="flexRadioDefault2">Trainer</label>
										  </div>										
									</div>
								



					</div>
					<div class="text-center mt-2">
						<button type="button" class="btn btn-primary m-auto">Sign Up</button>
					</div>
					<div class="text-right mt-3">
						<a href="./Login.html" class="signup">Already have account</button>
							<a href="./gymSignUp.html" class="signup ml-2">/ Sign Up as Gym</button>
					</div>
				</form>
		</div>
	</section>
</body>

</html>