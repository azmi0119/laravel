<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resize image before uploading</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Resize Image Uploading Demo</h1>
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <strong>Whoops!</strong> There were some problems with your input.<br><br>
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	   
		@if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
		    <button type="button" class="close" data-dismiss="alert">×</button>    
		    <strong>{{ $message }}</strong>
		</div>
		<div class="row">
		    <div class="col-md-4">
		        <strong>Original Image:</strong>
		        <br/>
		        <img src="/images/{{ Session::get('imageName') }}" />
		    </div>
		    <div class="col-md-4">
		        <strong>Thumbnail Image:</strong>
		        <br/>
		        <img src="/thumbnail/{{ Session::get('imageName') }}" />
		    </div>
		</div>
		@endif
	   
		{!! Form::open(array('route' => 'resizeImagePost','enctype' => 'multipart/form-data')) !!}
		    <div class="row">
		        <div class="col-md-4">
		            <br/>
		            {!! Form::text('title', null,array('class' => 'form-control','placeholder'=>'Add Title')) !!}
		        </div>
		        <div class="col-md-12">
		            <br/>
		            {!! Form::file('image', array('class' => 'image')) !!}
		        </div>
		        <div class="col-md-12">
		            <br/>
		            <button type="submit" class="btn btn-success">Upload Image</button>
		        </div>
		    </div>
		{!! Form::close() !!}
	</div>


</body>
</html>