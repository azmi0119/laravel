<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Country, State, City</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		option {
		  margin: 0.5em;
		}
	</style>
</head>
<body>
	<!-- Based on https://codepen.io/bahiirwa/pen/OjNYZb -->
	<div class="container">
	  	<center><h2>Dependent Country, State and City with Ajax</h2></center><br>
	  	<div class="row">
	  			<!-- Country Selection -->
			    <div class="col-md-3">
			      	<select class="form-control" name="country" id="country">
				        <option value="">Select Country</option>
				        @foreach($country as $value)	
				        	<option value="{{ $value->id }}">{{ $value->name }}</option>
				        @endforeach
				         
			      	</select>
			    </div>

			    <!-- State Selection -->
			    <div class="col-md-3">
			      	<select class="form-control" name="state" id="state">
				         
			      	</select>
			    </div>

			    <!-- City Selection -->
			    <div class="col-md-3">
			      	<select class="form-control" name="city" id="city">
				        <option value="">Select City</option>
			      	</select>
			    </div>

		    <div class="col-md-3">
		      	<input class="form-control" type="text" placeholder="Order name" id="order-name">
		    </div>
	  	</div>
	  	 
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			// Fetch country 
			$("#country").change(function(){

				// if you select country then city also should be blank 
				$("#city").html('<option value="">Select City</option>');

				// get the id of country 
				let cid = $(this).val();

				// now you can start ajax
				$.ajax({
					url : '/getState',
					type : 'post',
					data: {
					        "_token": "{{ csrf_token() }}",
					        "cid": cid
				        },
					success: function(result){
						$("#state").html(result);
					}
				});
			});

			// Fetch state 
			$("#state").change(function(){
				// get the id of state 

				let sid = $(this).val();
				// now you can start ajax
				$.ajax({
					url : '/getCity',
					type : 'post',
					data: {
					        "_token": "{{ csrf_token() }}",
					        "sid": sid
				        },
					success: function(result){
						 
						$("#city").html(result);
					}
				});
			});


		});
	</script>
</body>
</html>