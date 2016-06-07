<?php include ("login.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Journey</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.navbar-brand {
			font-size:1.8em;
		}
		#topContainer {
			background-image:url("images/background.jpg");
			height:400px;
			width:100%;
			background-size: cover;
			background-position: center;
		}
		#topRow {
			margin-top:100px;
			text-align:center;
		}
		#topRow h1 {
			font-size:300%;
		}
		#emailSignup {
			margin-top:50px;
		}
		.bold {
			font-weight:bold;
		}
		.marginTop {
			margin-top:30px;
		}
		.center {
			text-align:center;
		}
		.title {
			margin-top:100px;
			font-size:300%;
		}
		#footer {
			background-color:#B0D1FB;
			padding-top:70px;
			width:100%;
		}
		.marginBottom {
			margin-bottom:30px;
		}
		.appstoreImage {
			width:250px;
		}		
	</style>
</head>
<body data-target=".navbar-collapse">

	<div class="navbar navbar-inverse navbar-fixed-top">

		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="http://hadjbenseddik.com/mysql/diary.php" class="navbar-brand">Diary</a>
			</div>

			<div class="collapse navbar-collapse">
				<form class="navbar-form navbar-right" method="post" autocomplete="off">
					<div class="form-group">
						<input type="loginemail" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
					</div>
					<div class="form-group">
						<input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
					</div>
					<input type="submit" name="submit" class="btn btn-success" value="Log In">
				</form>
			</div>

		</div>

	</div>

	<div class="container contentContainer" id="topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<h1 class="marginTop">Journal Entry</h1>
				<p class="lead">Document your journey securely. With you wherever you go.</p>
				<?php
				if ($error) {
					echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
				}
				if ($message) {
					echo '<div class="alert alert-success">'.addslashes($message).'</div>';
				}
				?>
				<p class="bold marginTop">Interested? Sign up below</p>

				<form class="marginTop" method="post" autocomplete="off">
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo addslashes($_POST['email']); ?>" />
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>"/>
					</div>
					<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop" />
				</form>

			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script>
		$(".contentContainer").css("min-height",$(window).height());
	</script>

</body>
</html>
