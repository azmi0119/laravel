<!DOCTYPE html>
<html lang="en">
<head>
  	<title>How To Create Star Rating CSS Icons Classic UX Patterns</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
        .starRating {
            position: absolute;
            left: 50%;
            top: 45%;
            transform: translate(-50%, -50%);
            font-family: arial;
            text-align: center;
        }
        .starRating input {
            display: none;
        }
        .starRating label {
            font-size: 80px;
            float: right;
            margin: 0px 5px;
            color: #ddd;
        }
        .starRating label:before {
            content: '★';
        }
        .starRating input:checked ~ label {
            color: #FFC107;
        }
        .starRating:input:checked > label:hover,
        .starRating:input:checked > label:hover ~ label {
            color: #FFC107;
        }
        .starRating:not(:checked) > label:hover,
        .starRating:not(:checked) > label:hover ~ label {
            color: #FFC107;
        }
        .starRating .result:after {
            left: 0px;
            right: 0px;
            font-size: 20px;
            color: #FFC107;
            display: none;
        }
        .starRating input:checked ~ .result:after {
            display: block;
        }
        .starRating #fifth:checked ~ .result:after {
            content: "Excellent (5)";
        }
        .starRating #fourth:checked ~ .result:after {
            content: "Good (4)";
        }
        .starRating #thirth:checked ~ .result:after {
            content: "Average (3)";
        }
        .starRating #second:checked ~ .result:after {
            content: "Poor (2)";
        }
        .starRating #first:checked ~ .result:after {
            content: "Very Bad (1)";
        }
    </style>

</head>
<body>
	<div class="starRating">
        <h1>Simple Star Rating System</h1>
		<input type="radio" name="starRate" value="5" id="fifth">
		<label for="fifth"></label>
		<input type="radio" name="starRate" value="4" id="fourth">
		<label for="fourth"></label>
		<input type="radio" name="starRate" value="3" id="thirth">
		<label for="thirth"></label>
		<input type="radio" name="starRate" value="2" id="second">
		<label for="second"></label>
		<input type="radio" name="starRate" value="1" id="first">
		<label for="first"></label>
		<!-- Show Result  -->
		<span class="result"></span>
	</div>
</body>
</html>