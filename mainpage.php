<? 
session_start();
include("connection.php");
$query = "SELECT diary FROM  `users` WHERE id='".$_SESSION['id']."' LIMIT 1"; /*Grab the diary entry of the current user*/
$result = mysqli_query($link, $query); /*Run the query and store it under $result*/
$row = mysqli_fetch_array($result); /*Returns an array that corresponds to the fetched row and moves the internal data pointer ahead.*/
$diary = $row['diary']; /*Create $diary and set it to the diary value of the row array*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diary</title>
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
			margin-top:80px;
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
<body data-spy="scroll" data-target=".navbar-collapse">
<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header pull-left">
				<a class="navbar-brand">Diary</a>
			</div>
			<div class="pull-right">
				<ul class="navbar-nav nav">
					<li><a href="diary.php?logout=1">Log Out</a></li> <!--Set logout link to homepage and set GET variable logout to 1. Used in the login.php script to destroy session id logout=1-->
				</ul>			
			</div>
		</div>
	</div>
	<div class="container contentContainer" id="topContainer">

		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
			<h3>Welcome</h2>
				<textarea class="form-control"><?php echo $diary;?></textarea>
			</div>
		</div>
	</div>			

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script>
		$(".contentContainer").css("min-height",$(window).height());
		$("textarea").css("height",$(window).height()-120);
		$("textarea").keyup(function(){
			$.post("updatediary.php", {diary:$("textarea").val()} );
		}); 
	</script>
</body>
</html>
