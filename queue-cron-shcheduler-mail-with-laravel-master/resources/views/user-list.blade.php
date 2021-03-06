<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel Send multiple mail using queue</title>

	<style type="text/css">
		
		h1{
		  font-size: 30px;
		  color: #fff;
		  text-transform: uppercase;
		  font-weight: 300;
		  text-align: center;
		  margin-bottom: 15px;
		}
		table{
		  width:100%;
		  table-layout: fixed;
		}
		.tbl-header{
		  background-color: rgba(255,255,255,0.3);
		 }
		.tbl-content{
		  height:300px;
		  overflow-x:auto;
		  margin-top: 0px;
		  border: 1px solid rgba(255,255,255,0.3);
		}
		th{
		  padding: 20px 15px;
		  text-align: left;
		  font-weight: 500;
		  font-size: 12px;
		  color: #fff;
		  text-transform: uppercase;
		}
		td{
		  padding: 15px;
		  text-align: left;
		  vertical-align:middle;
		  font-weight: 300;
		  font-size: 12px;
		  color: #fff;
		  border-bottom: solid 1px rgba(255,255,255,0.1);
		}


		/* demo styles */

		@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
		body{
		  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
		  background: linear-gradient(to right, #25c481, #25b7c4);
		  font-family: 'Roboto', sans-serif;
		}
		section{
		  margin: 50px;
		}


		/* follow me template */
		.made-with-love {
		  margin-top: 40px;
		  padding: 10px;
		  clear: left;
		  text-align: center;
		  font-size: 10px;
		  font-family: arial;
		  color: #fff;
		}
		.made-with-love i {
		  font-style: normal;
		  color: #F50057;
		  font-size: 14px;
		  position: relative;
		  top: 2px;
		}
		.made-with-love a {
		  color: #fff;
		  text-decoration: none;
		}
		.made-with-love a:hover {
		  text-decoration: underline;
		}


		/* for custom scrollbar for webkit browser*/

		::-webkit-scrollbar {
		    width: 6px;
		} 
		::-webkit-scrollbar-track {
		    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
		} 
		::-webkit-scrollbar-thumb {
		    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
		}
	</style>

</head>
<body>

	<form action="" method="post" id="frm">
		@csrf
		<section>
		  <!--for demo wrap-->
		  <h1>Fixed Table header</h1>
		  <input type="submit" name="submit" value="Send Mail" style="float: right;">
		  <a href="javascript:void(0)" id="Delete_all" onclick="Delete_all()" style="float: right;" class="btn btn-danger">All Delete</a>
		  <div class="tbl-header">
		    <table cellpadding="0" cellspacing="0" border="0">
		      <thead>
		        <tr>
		          <th>
		          	<input type="checkbox" name="checkbox_all[]" id="check_all">
		          </th>
		          <th>Name</th>
		          <th>Email</th>
		        </tr>
		      </thead>
		    </table>
		  </div>
		  <div class="tbl-content">
		    <table cellpadding="0" cellspacing="0" border="0">
		      <tbody>
		      	@foreach($data as $value)
		        <tr>
		        	<td>
		        		<input type="checkbox" name="checkbox[]" id="{{ $value->id }}" value="{{ $value->id }}">
		        	</td>
		        	<td>{{ $value->name }}</td>
		        	<td>{{ $value->email }}</td>
		        </tr>
		        @endforeach
		      </tbody>
		    </table>
		  </div>
		</section>
	</form>

	<!-- follow me template -->
	<div class="made-with-love">
	  Made with
	  <i>???</i> by
	  <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
	</div>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
	// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
	$(window).on("load resize ", function() {
	  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
	  $('.tbl-header').css({'padding-right':scrollWidth});
	}).resize();


	$(document).ready(function(){

		$("#check_all").on("change", function() {

			if($("#check_all").prop("checked")) {
				$("input[type=checkbox]").each(function() {
					$("#"+this.id).prop("checked",true);
					
				});
			} else {
				$("input[type=checkbox]").each(function() {
					$("#"+this.id).prop("checked",false);

				});
			}

		});

	});

	function Delete_all() {
		$.ajax({

			url : "{{ route('user.delete') }}",
			type : "POST",
			data : $("#frm").serialize(),
			success : function() {
				console.log('success');
				location.reload(true);
			} 

		});
	}

</script>

</body>
</html>