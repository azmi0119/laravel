<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Image Download</title>
    <link rel="stylesheet" href="https://www.littlesnippets.net/css/codepen-result.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
        /* Icon set - http://ionicons.com */
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,700);
        @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
        .snip1268 {
        font-family: 'Raleway', Arial, sans-serif;
        position: relative;
        overflow: hidden;
        margin: 10px;
        min-width: 220px;
        max-width: 310px;
        width: 100%;
        color: #333333;
        text-align: center;
        background-color: #ffffff;
        line-height: 1.6em;
        }
        .snip1268 * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.6s ease;
        transition: all 0.6s ease;
        }
        .snip1268 .image {
        position: relative;
        }
        .snip1268 img {
        max-width: 100%;
        vertical-align: top;
        -webkit-transition: opacity 0.35s;
        transition: opacity 0.35s;
        }
        .snip1268 .icons,
        .snip1268 .add-to-cart {
        position: absolute;
        left: 20px;
        right: 20px;
        opacity: 0;
        }
        .snip1268 .icons {
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
        top: 20px;
        display: flex;
        justify-content: space-between;
        }
        .snip1268 .icons a {
        width: 32.5%;
        background: #ffffff;
        }
        .snip1268 .icons a:hover {
        background: #000000;
        }
        .snip1268 .icons a:hover i {
        color: #ffffff;
        opacity: 1;
        }
        .snip1268 .icons i {
        line-height: 46px;
        font-size: 20px;
        color: #000000;
        text-align: center;
        opacity: 0.7;
        margin: 0;
        }
        .snip1268 .add-to-cart {
        position: absolute;
        bottom: 20px;
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
        font-size: 0.8em;
        color: #000000;
        line-height: 46px;
        letter-spacing: 1.5px;
        background-color: #ffffff;
        font-weight: 700;
        text-decoration: none;
        text-transform: uppercase;
        }
        .snip1268 .add-to-cart:hover {
        background: #000000;
        color: #ffffff;
        }
        .snip1268 figcaption {
        padding: 20px 20px 30px;
        }
        .snip1268 h2,
        .snip1268 p {
        margin: 0;
        text-align: left;
        }
        .snip1268 h2 {
        margin-bottom: 10px;
        font-weight: 700;
        }
        .snip1268 p {
        margin-bottom: 15px;
        font-size: 0.85em;
        font-weight: 500;
        }
        .snip1268 .price {
        font-size: 1.3em;
        opacity: 0.5;
        font-weight: 700;
        text-align: right;
        }
        .snip1268:hover img,
        .snip1268.hover img {
        opacity: 0.8;
        }
        .snip1268:hover .icons,
        .snip1268.hover .icons,
        .snip1268:hover .add-to-cart,
        .snip1268.hover .add-to-cart {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
        }

    </style>
</head>
<body>

    <figure class="snip1268 hover">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample17.jpg" alt="sq-sample17"/>
          <div class="icons">
            <a href="#"><i class="ion-star"></i></a>
            <a href="#"> <i class="ion-share"></i></a>
          </div>
          <a href="#" class="add-to-cart">Download</a>
        </div>   
    </figure>

    <figure class="snip1268">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
          <div class="icons">
            <a href="#"><i class="ion-star"></i></a>
            <a href="#"> <i class="ion-share"></i></a>
          </div>
          <a href="#" class="add-to-cart">Download</a>
        </div>
    </figure>

    <figure class="snip1268">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
          <div class="icons">
            <a href="#"><i class="ion-star"></i></a>
            <a href="#"> <i class="ion-share"></i></a>
          </div>
          <a href="#" class="add-to-cart">Download</a>
        </div>
    </figure>

    <figure class="snip1268">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
          <div class="icons">
            <a href="#"><i class="ion-star"></i></a>
            <a href="#"> <i class="ion-share"></i></a>
          </div>
          <a href="#" class="add-to-cart">Download</a>
        </div>
    </figure>

    <figure class="snip1268">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
          <div class="icons">
            <a href="#"><i class="ion-star"></i></a>
            <a href="#"> <i class="ion-share"></i></a>
          </div>
          <a href="#" class="add-to-cart">Download</a>
        </div>
    </figure>

    <figure class="snip1268">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
          <div class="icons">
            <a href="#"><i class="ion-star"></i></a>
            <a href="#"> <i class="ion-share"></i></a>
          </div>
          <a href="#" class="add-to-cart">Download</a>
        </div>
    </figure>

    <figure class="snip1268">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
          <div class="icons">
            <a href="#"><i class="ion-star"></i></a>
            <a href="#"> <i class="ion-share"></i></a>
          </div>
          <a href="#" class="add-to-cart">Download</a>
        </div>
    </figure>

    <figure class="snip1268">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
          <div class="icons">
            <a href="#"><i class="ion-star"></i></a>
            <a href="#"> <i class="ion-share"></i></a>
          </div>
          <a href="#" class="add-to-cart">Download</a>
        </div>
    </figure>
    <figure class="snip1268">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
          <div class="icons">
            <a href="#"><i class="ion-star"></i></a>
            <a href="#"> <i class="ion-share"></i></a>
          </div>
          <a href="#" class="add-to-cart">Download</a>
        </div>
    </figure>
    <figure class="snip1268">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
          <div class="icons">
            <a href="#"><i class="ion-star"></i></a>
            <a href="#"> <i class="ion-share"></i></a>
          </div>
          <a href="#" class="add-to-cart">Download</a>
        </div>
    </figure>
    <figure class="snip1268">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
          <div class="icons">
            <a href="#"><i class="ion-star"></i></a>
            <a href="#"> <i class="ion-share"></i></a>
          </div>
          <a href="#" class="add-to-cart">Download</a>
        </div>
    </figure>
    <figure class="snip1268">
        <div class="image">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample15.jpg" alt="sq-sample15"/>
          <div class="icons">
            <a href="#"><i class="ion-star"></i></a>
            <a href="#"> <i class="ion-share"></i></a>
          </div>
          <a href="#" class="add-to-cart">Download</a>
        </div>
    </figure>
     

    <script>
        /* Demo purposes only */
        $(".hover").mouseleave(
            function () {
            $(this).removeClass("hover");
            }
        );
    </script>
</body>
</html>                                		