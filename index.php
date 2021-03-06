<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Weather scraper</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


	<style type="text/css" media="screen">
		html, body{
			height: 100%;
		}


		.container{
			background-image:url(assets/turbines.jpg) ;
			width: 100%;
			height: 100%;
			background-size: cover;
			background-position: center;
			padding-top: 160px;
		}

		.center{
			text-align: center;
		}

		.white{
			color: white;
		}

		.blue{
			color: blue;
		}

		p{
			padding-top: 15px;
			padding-bottom: 15px;
		}

		button{
			margin-top: 20px;
			margin-bottom: 20px;
		}

		.alert{
			margin-top: 20px;
			display: none;
		}

	</style>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<h1 class="white">Weather predictor</h1>
				<p class="lead white">Enter a city to get forecast of weather</p>

				<form>

					<div class="form-group">
						<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Nairobi ..." />
					</div>

					<button id="findMyWeather" class="btn btn-success btn-lg">Find my weather</button>

					<div id="success" class="alert alert-success">success!</div>
					<div id="fail" class="alert alert-danger">no such area!</div>
				</form>

			</div>

		</div>		
	</div>
	


	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	

	<script src="//code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>

	<script>
		
		$("#findMyWeather").click(function(event){

			event.preventDefault();
			//the line above prevents the page from submitting the code, if we remove it it will perform the default action

			if($("#city").val()!=""){

				$.get("scraper.php?city="+$("#city").val(), function(data){

					$("#success").html(data).fadeIn();

					if (data=="") {

						$("#success").hide();
						$("#fail").fadeIn();

					} else {

						$("#fail").hide();
						$("#success").html(data).fadeIn();
					}

				});

			}else{

				alert("enter a city");
			}

		});

	</script>

</body>
</html> 