<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        {{-- Notification related link start --}}
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        {{-- Notification related link close --}}
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .btn-group{
                font-size: 25px;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /* notification css */
            @import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

                .navbar-icon-top .navbar-nav .nav-link > .fa {
                  position: relative;
                  width: 36px;
                  font-size: 24px;
                }

                .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
                  font-size: 0.75rem;
                  position: absolute;
                  right: 0;
                  font-family: sans-serif;
                }

                .navbar-icon-top .navbar-nav .nav-link > .fa {
                  top: 3px;
                  line-height: 12px;
                }

                .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
                  top: -10px;
                }

                @media (min-width: 576px) {
                  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
                    text-align: center;
                    display: table-cell;
                    height: 70px;
                    vertical-align: middle;
                    padding-top: 0;
                    padding-bottom: 0;
                  }

                  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa {
                    display: block;
                    width: 48px;
                    margin: 2px auto 4px auto;
                    top: 0;
                    line-height: 24px;
                  }

                  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa > .badge {
                    top: -7px;
                  }
                }

                @media (min-width: 768px) {
                  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
                    text-align: center;
                    display: table-cell;
                    height: 70px;
                    vertical-align: middle;
                    padding-top: 0;
                    padding-bottom: 0;
                  }

                  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa {
                    display: block;
                    width: 48px;
                    margin: 2px auto 4px auto;
                    top: 0;
                    line-height: 24px;
                  }

                  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa > .badge {
                    top: -7px;
                  }
                }

                @media (min-width: 992px) {
                  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
                    text-align: center;
                    display: table-cell;
                    height: 70px;
                    vertical-align: middle;
                    padding-top: 0;
                    padding-bottom: 0;
                  }

                  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa {
                    display: block;
                    width: 48px;
                    margin: 2px auto 4px auto;
                    top: 0;
                    line-height: 24px;
                  }

                  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa > .badge {
                    top: -7px;
                  }
                }

                @media (min-width: 1200px) {
                  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
                    text-align: center;
                    display: table-cell;
                    height: 70px;
                    vertical-align: middle;
                    padding-top: 0;
                    padding-bottom: 0;
                  }

                  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
                    display: block;
                    width: 48px;
                    margin: 2px auto 4px auto;
                    top: 0;
                    line-height: 24px;
                  }

                  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
                    top: -7px;
                  }
                }
                /* drop down menu start here */
                .dropbtn {
                background-color: #04AA6D;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                }

                .dropdown {
                position: relative;
                display: inline-block;
                }

                .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
                }

                .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                }

                .dropdown-content a:hover {background-color: #ddd;}

                .dropdown:hover .dropdown-content {display: block;}

                .dropdown:hover .dropbtn {background-color: #3e8e41;}
                
                /* drop down menu close here */
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">

                <div class="title m-b-md">
                    All Type Problems
                </div>
                    {{-- Notification start here --}}
                    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">
                                  <i class="fa fa-envelope-o">
                                    <span class="badge badge-warning"><strong>11</strong></span>
                                  </i>
                                  <h3 style="color: white"><strong>New User</strong></h3>
                                </a>
                              </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <i class="fa fa-envelope-o">
                                  <span class="badge badge-danger"><strong>11</strong></span>
                                </i>
                                <h3 style="color: white"><strong>New Teacher</strong></h3>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled" href="#">
                                <i class="fa fa-envelope-o">
                                  <span class="badge badge-warning"><strong>11</strong></span>
                                </i>
                                <h3 style="color: white"><strong>New Comment</strong></h3>
                              </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">
                                  <i class="fa fa-envelope-o">
                                    <span class="badge badge-warning"><strong>11</strong></span>
                                  </i>
                                  <h3 style="color: white"><strong>New Order</strong></h3>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled" href="#">
                                  <i class="fa fa-envelope-o">
                                    <span class="badge badge-warning"><strong>11</strong></span>
                                  </i>
                                  <h3 style="color: white"><strong>Link</strong></h3>
                                </a>
                            </li>
                            
                          </ul>
                          <ul class="navbar-nav ">
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <i class="fa fa-bell">
                                  <span class="badge badge-info"><strong>11</strong></span>
                                </i>
                                <h3 style="color: white"><strong>Link</strong></h3>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <i class="fa fa-globe">
                                  <span class="badge badge-success"><strong>11</strong></span>
                                </i>
                                <h3 style="color: white"><strong>Total Notification</strong></h3>
                              </a>
                            </li>
                          </ul>
                          <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                          </form>
                        </div>
                      </nav>
                
                    {{-- /Notification close here --}}

                    {{-- Navebar for menu start here --}}
                    <div class="dropdown">
                        <button class="dropbtn">Crud Type</button>
                        <div class="dropdown-content">
                            <a href="{{url('index')}}">Simple Crud</a>
                            <a href="{{url('ajax-index')}}">Crud + Ajax</a>
                            <a href="#">Inline Crud</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="dropbtn">Rating</button>
                        <div class="dropdown-content">
                            <a href="{{url('simple-rating-index')}}">Rating Simple</a>
                            <a href="{{url('ajax-rating-index')}}">Rating + Ajax</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="dropbtn">Payment Type</button>
                        <div class="dropdown-content">
                            <a href="">Paypal </a>
                            <a href="">PayUmony</a>
                            <a href="">Razure Pay</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="dropbtn">Filtering</button>
                        <div class="dropdown-content">
                            <a href="{{url('simple-filter-index')}}">Simple Filtering</a>
                            <a href="{{url('ajax-filter-index')}}">Filtering + Ajax</a>
                        </div>
                    </div>

                    <div class="dropdown">
                      <button class="dropbtn">Load Data</button>
                      <div class="dropdown-content">
                          <a href="{{url('simple-load-index')}}">Simple Load More</a>
                          <a href="{{url('ajax-load-index')}}">Ajax Load More</a>
                          <a href="{{url('lazy-load-index')}}">Lazy Load More</a>
                      </div>
                  </div>

                  <div class="dropdown">
                    <a href="{{url('socila-login-index')}}" class="dropbtn">Socila Login</a>
                  </div>
                    
                  <div class="dropdown">
                    <button class="dropbtn">E-commerce</button>
                      <div class="dropdown-content">
                        <a href="{{url('add-to-card-index')}}">Add to Cart</a>
                        <a href="{{url('place-order-index')}}">Place order</a>
                      </div>
                  </div>
                   
                  <div class="dropdown">
                    <a href="{{url('simple-map')}}" class="dropbtn">Maps</a>
                  </div>

                  <div class="dropdown">
                    <button class="dropbtn">Download</button>
                      <div class="dropdown-content">
                        <a href="{{url('simple-image-download')}}">Image Download</a>
                        <a href="{{url('simple-video-download')}}">Video Download</a>
                        <a href="#">Excel Download</a>
                        <a href="#">PDF Download</a>
                      </div>
                  </div>

              </div>
            </div>
        </div>
    </body>
</html>