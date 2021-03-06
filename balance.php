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
				<form class="m-auto ">
					<h1 class="text-center"><a class="" href="index.html"><span class="fa fa-spinner mr-2" aria-hidden="true"></span>Oneshot killers</a></h1>
					<div class="form-group mt-2">
						<label>Card holder's name</label>
					<input type="text" placeholder="Card holder's name" class="form-control">
					</div>
					<div class="form-group">
					<label>Card number</label>
					<input type="number" placeholder="Card number" class="form-control">
					</div>
					<div class="form-group">
						<label>Expire Date</label>
						<input type="date" placeholder="dd/mm/yy" class="form-control">
					</div>
					<div class="form-group">
						<label>CVC</label>
						<input type="text" placeholder="CVC" class="form-control">

					</div>
					<div class="text-center">
						<button type="button" class="btn btn-primary m-auto">Submit</button>
					</div>
				</form>
		</div>
	</section>
</body>

</html>