<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Scroll Load More Data With Ajax</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>
<body>

	<div class="container table-responsive py-5"> 
	<table class="table table-bordered table-hover" id="post-data">
	  	@include('LoadMore.data')
	</table>
	
	</div>

	<!-- Sweet Alert -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> 

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script type="text/javascript">
		$(document).ready(function(){

			$(".deleteRecord").click(function() {
			   	var id = $(this).data("id");
			   	var token = $("meta[name='csrf-token']").attr("content");
			   	$.ajax({
			      	url: "/delete-scroll-more-data/" + id,
			      	type: 'POST',
			      	data: {
			         	"id": id,
			         	"_token": token,
			      	},
			      	success: function(response) {
			        	// window.location.reload();
			        	swal({
			               title: 'Deleted!',
			               text: 'Data has been deleted.',
			               type: 'success',
			               timer: 2000,
			            });

			      	}
			   	});
			});

		});
	</script>


</body>
</html>