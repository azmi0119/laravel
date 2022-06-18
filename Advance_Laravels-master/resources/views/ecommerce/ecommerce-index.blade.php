<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-Commerce Practice</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style type="text/css"> 
		.glyphicon {
		  margin-right: 5px;
		}
		.thumbnail {
		  margin-bottom: 20px;
		  padding: 0px;
		  -webkit-border-radius: 0px;
		  -moz-border-radius: 0px;
		  border-radius: 0px;
		}

		.item.list-group-item {
		  float: none;
		  width: 100%;
		  background-color: #fff;
		  margin-bottom: 10px;
		}
		.item.list-group-item:nth-of-type(odd):hover,
		.item.list-group-item:hover {
		  background: #428bca;
		}

		.item.list-group-item .list-group-image {
		  margin-right: 10px;
		}
		.item.list-group-item .thumbnail {
		  margin-bottom: 0px;
		}
		.item.list-group-item .caption {
		  padding: 9px 9px 0px 9px;
		}
		.item.list-group-item:nth-of-type(odd) {
		  background: #eeeeee;
		}

		.item.list-group-item:before,
		.item.list-group-item:after {
		  display: table;
		  content: " ";
		}

		.item.list-group-item img {
		  float: left;
		}
		.item.list-group-item:after {
		  clear: both;
		}
		.list-group-item-text {
		  margin: 0 0 11px;
		}

	</style>
</head>
<body> 

<div class="container">
  <div class="well well-sm">
    <strong>Display</strong>
    <div class="btn-group">
      <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
        </span>List</a> 
        <a href="#" id="grid" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th"></span>Grid</a>
        <a href="#" id="add-product" class="btn btn-default btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
          Add New Product
        </a>
    </div>
  </div>
  <div id="products" class="row list-group">
    <div class="item  col-xs-4 col-lg-4">
      <div class="thumbnail">
        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
        <div class="caption">
          <h4 class="group inner list-group-item-heading">
            Product title</h4>
          <p class="group inner list-group-item-text">
            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <p class="lead">
                $21.000</p>
            </div>
            <div class="col-xs-12 col-md-6">
              <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item  col-xs-4 col-lg-4">
      <div class="thumbnail">
        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
        <div class="caption">
          <h4 class="group inner list-group-item-heading">
            Product title</h4>
          <p class="group inner list-group-item-text">
            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <p class="lead">
                $21.000</p>
            </div>
            <div class="col-xs-12 col-md-6">
              <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item  col-xs-4 col-lg-4">
      <div class="thumbnail">
        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
        <div class="caption">
          <h4 class="group inner list-group-item-heading">
            Product title</h4>
          <p class="group inner list-group-item-text">
            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <p class="lead">
                $21.000</p>
            </div>
            <div class="col-xs-12 col-md-6">
              <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item  col-xs-4 col-lg-4">
      <div class="thumbnail">
        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
        <div class="caption">
          <h4 class="group inner list-group-item-heading">
            Product title</h4>
          <p class="group inner list-group-item-text">
            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <p class="lead">
                $21.000</p>
            </div>
            <div class="col-xs-12 col-md-6">
              <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item  col-xs-4 col-lg-4">
      <div class="thumbnail">
        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
        <div class="caption">
          <h4 class="group inner list-group-item-heading">
            Product title</h4>
          <p class="group inner list-group-item-text">
            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <p class="lead">
                $21.000</p>
            </div>
            <div class="col-xs-12 col-md-6">
              <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item  col-xs-4 col-lg-4">
      <div class="thumbnail">
        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
        <div class="caption">
          <h4 class="group inner list-group-item-heading">
            Product title</h4>
          <p class="group inner list-group-item-text">
            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <p class="lead">
                $21.000</p>
            </div>
            <div class="col-xs-12 col-md-6">
              <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
 <!-- Model Starte Here -->
<!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form action="" method="" enctype="" class="form-inline">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container">
          <h2>Add Here New Product</h2>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
         
        </div>
      </div>
      <div class="modal-body">
        <div class="container">
           
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
          
        </div>
      </div>
      <div class="modal-body">
        <div class="container">
         
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
          
        </div>
      </div>
      <div class="modal-body">
        <div class="container">
          
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
           
        </div>
      </div>
    </form>
    </div>
  </div>
</div>
 <!-- /Modal End Here -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript"> 
	$(document).ready(function() {
	    $('#list').click(function(event){
	    		event.preventDefault();
	    	$('#products .item').addClass('list-group-item');
	    });
	    $('#grid').click(function(event){
	    		event.preventDefault();
	    	$('#products .item').removeClass('list-group-item');
	    	$('#products .item').addClass('grid-group-item');
	    });
	});
</script>

</body>
</html>