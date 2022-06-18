<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Table Task List</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<style type="text/css">
	.container {
		  padding: 2rem 0rem;
		}

		h4 {
		  margin: 2rem 0rem 1rem;
		}

		.table-image {
		  td,
		  th {
		    vertical-align: middle;
		  }
		}

	</style>
</head>
<body>
	<div class="container">
	  <div class="row">
	    <div class="col-12">
			<table class="table table-image">
			  	<thead>
				    <tr>
				      <th scope="col">Day</th>
				      <th scope="col">Task Name</th>
				      <th scope="col">Action</th>
				    </tr>
			  	</thead>
			  	<tbody>
				    <tr>
				      	<td>1</td>
				      	<td>This is simple Data Table only list data</td>
				      	<td>
				      		<a href="{{url('yajra-index')}}" target="_blank" class="btn btn-primary">View</a>
				      	</td>
				    </tr>
				    <tr>
				      	<td>2</td>
				      	<td>Add and Edit Column</td>
				      	<td>
				      		<a href="{{url('yajra-edit-add-column')}}" target="_blank" class="btn btn-primary">View</a>
				      	</td>
				    </tr>
			  	</tbody>
			</table>   
	    </div>
	  </div>
	</div>

</body>
</html>