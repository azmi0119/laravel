<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Single Posts</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
	<style type="text/css">
		img{
			height:150px;
			width:100%;
		}

		.item{
			padding-left:5px;
			padding-right:5px;
		}
		.item-card{
			transition:0.5s;
			cursor:pointer;
		}
		.item-card-title{  
			font-size:15px;
			transition:1s;
			cursor:pointer;
		}
		.item-card-title i{  
			font-size:15px;
			transition:1s;
			cursor:pointer;
			color:#ffa710
		}
		.card-title i:hover{
			transform: scale(1.25) rotate(100deg); 
			color:#18d4ca;

		}
		.card:hover{
			transform: scale(1.05);
			box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
		}
		.card-text{
			height:80px;  
		}

		.card::before, .card::after {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			transform: scale3d(0, 0, 1);
			transition: transform .3s ease-out 0s;
			background: rgba(255, 255, 255, 0.1);
			content: '';
			pointer-events: none;
		}
		.card::before {
			transform-origin: left top;
		}
		.card::after {
			transform-origin: right bottom;
		}
		.card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
			transform: scale3d(1, 1, 1);
		}
	</style>
</head>
<body>
	<div class="container mt-2">
		<div class="row">
			<div class="col-md-3 col-sm-6 item">
				<div class="card item-card card-block">
					<h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
					<img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
					<h5 class="item-card-title mt-3 mb-3">{{ $data['title'] }}</h5>
					<p class="card-text">{{ $data['body'] }}</p> 
				</div>
			</div>
		</div>
	</div>
</body>
</html>