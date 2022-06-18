<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Load More Data With Ajax</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>
<body>

	<div class="container table-responsive py-5"> 
	<table class="table table-bordered table-hover">
	  	<thead class="thead-dark">
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">NAME</th>
		      <th scope="col">EMAIL</th>
		      <th scope="col">COLLAGE</th>
		      <th scope="col">COURSE</th>
		      <th scope="col" colspan="2">Acation</th>
		    </tr>
	  	</thead>
	  	<tbody>
	  		@foreach($data as $value)
			    <tr>
			      <th scope="row">{{ $value->id }}</th>
			      <td>{{ $value->name }}</td>
			      <td>{{ $value->email }}</td>
			      <td>{{ $value->collage }}</td>
			      <td>{{ $value->course }}</td>
			      <td>
			      	<button class="btn btn-primary" >Edit</button>
			      	<button class="deleteRecord btn btn-danger" data-id="{{ $value->id }}" >Delete</button>
			      </td>
			    </tr>
		    @endforeach
	  	</tbody>
	</table>
	<center><button>Load More Data</button></center>
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
			      	url: "/delete-load-more-data/" + id,
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