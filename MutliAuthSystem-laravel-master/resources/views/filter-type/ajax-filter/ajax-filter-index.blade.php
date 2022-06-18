<!DOCTYPE html>
<html>
<head>
	<title>Movie Searching</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style type="text/css">
	body {
    background-color: gray
	}

	.card {
	    border: none;
	    background: #eee
	}

	.search {
	    width: 100%;
	    margin-bottom: auto;
	    margin-top: 20px;
	    height: 50px;
	    background-color: #fff;
	    padding: 10px;
	    border-radius: 5px
	}

	.search-input {
	    color: white;
	    border: 0;
	    outline: 0;
	    background: none;
	    width: 0;
	    margin-top: 5px;
	    caret-color: transparent;
	    line-height: 20px;
	    transition: width 0.4s linear
	}

	.search .search-input {
	    padding: 0 10px;
	    width: 100%;
	    caret-color: #536bf6;
	    font-size: 19px;
	    font-weight: 300;
	    color: black;
	    transition: width 0.4s linear
	}

	.search-icon {
	    height: 34px;
	    width: 34px;
	    float: right;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    color: white;
	    background-color: #536bf6;
	    font-size: 10px;
	    bottom: 30px;
	    position: relative;
	    border-radius: 5px
	}

	.search-icon:hover {
	    color: #fff !important
	}

	a:link {
	    text-decoration: none
	}

	.card-inner {
	    position: relative;
	    display: flex;
	    flex-direction: column;
	    min-width: 0;
	    word-wrap: break-word;
	    background-color: #fff;
	    background-clip: border-box;
	    border: 1px solid rgba(0, 0, 0, .125);
	    border-radius: .25rem;
	    border: none;
	    cursor: pointer;
	    transition: all 2s
	}

	.card-inner:hover {
	    transform: scale(1.1)
	}

	.mg-text span {
	    font-size: 12px
	}

	.mg-text {
	    line-height: 14px
	}
</style>
</head>
<body>
	<div class="container mt-4">
	    <div class="row d-flex justify-content-center">
	        <div class="col-md-9">
	            <div class="card p-4 mt-3">
	                <h3 class="heading mt-5 text-center">Searching with Ajax</h3>
	                <div class="d-flex justify-content-center px-5">
	                    <div class="search"> 
                            <input type="text" class="search-input" name="search" id="search" placeholder="Search...">  
                        </div>
	                </div>
	                <div class="row mt-4 g-1 px-4 mb-5 dynamic-row">
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                <img src="https://thumbs.dreamstime.com/z/male-avatar-icon-portrait-handsome-young-man-face-businessman-suit-necktie-vector-illustration-%D0%B3%D1%9F%D0%B3%D2%91%D0%B3%C2%B7%D0%B3-%D0%B3%D1%96%D0%B3%D1%98-187127093.jpg" width="50">
                                <div class="text-center mg-text"> 
                                    <span class="mg-text">Abdullah</span> 
                                </div>
                            </div>
                        </div>
                        
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

</body>
</html>