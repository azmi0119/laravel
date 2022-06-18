<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoke Controller</title>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");
        body {
          background-color: #CCCCCC;
          box-sizing: border-box;
          color: #333333;
          font-family: "Poppins", sans-serif;
          line-height: 1.4;
          margin: 30px 50px;
          /*img
          * max-width: 100% */
          /*.boxes
          * display: grid
          * grid-gap: 20px
          * grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)) */
          /*.box
          * background: var(--primary)
          * text-align: center
          * padding: 1.5rem 2rem
          * box-shadow: var(--shadow) */
          /*.info
          * background: var(--primary)
          * box-shadow: var(--shadow)
          * display: grid
          * grid-gap: 30px
          * grid-template-columns: repeat(2, 1fr)
          * padding: 3rem */
          /*.portfolio
          * display: grid
          * grid-gap: 20px
          * grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)) */
          /*.portfolio img
          * width: 100%
          * box-shadow: var(--shadow) */
          /*footer
          * margin-top: 2rem
          * background: var(--dark)
          * color: var(--light)
          * text-align: center
          * padding: 1rem */
          /*@media (max-width: 700px) 
          * .top-container
          * grid-template-areas:
          * 'showcase showcase'
          * 'top-box-a top-box-b'
          *
          *
          * .showcase h1
          * font-size: 2.5rem
          *
          *
          * .main-nav ul 
          * grid-template-columns: 1fr
          *
          *
          * .info 
          * grid-template-columns: 1fr
          *
          *
          * .info .btn 
          * display: block
          * text-align: center
          * margin: auto */
          /*@media (max-width: 500px) 
          * .top-container 
          * grid-template-areas:
          * 'showcase'
          * 'top-box-a'
          * 'top-box-b' */
        }
        body .btn {
          background: #333333;
          border: 0;
          color: #FFFFFF;
          padding: 0.6rem 1.3rem;
          text-decoration: none;
        }
        body .wrapper {
          display: grid;
          grid-gap: 20px;
        }
        body .wrapper .main-nav ul {
          display: grid;
          grid-gap: 20px;
          grid-template-columns: repeat(4, 1fr);
          list-style: none;
          padding: 0;
        }
        body .wrapper .main-nav a {
          background: #DDDDDD;
          box-shadow: 0 1px 5px rgba(104, 104, 104, 0.8);
          color: #333333;
          display: block;
          font-size: 1.1rem;
          padding: 0.8rem;
          text-align: center;
          text-decoration: none;
          text-transform: uppercase;
        }
        body .wrapper .main-nav a:hover {
          background: #333333;
          color: #FFFFFF;
        }
        body .wrapper .top-container {
          display: grid;
          grid-gap: 20px;
          grid-template-areas: "showcase showcase top-box-a" "showcase showcase top-box-b";
          /*.top-box-a
          * grid-area: top-box-a */
          /*.top-box-b
          * grid-area: top-box-b */
        }
        body .wrapper .top-container .showcase {
          align-items: start;
          background: url(https://image.ibb.co/kYJK8x/showcase.jpg);
          background-position: center;
          background-size: cover;
          box-shadow: 0 1px 5px rgba(104, 104, 104, 0.8);
          display: flex;
          flex-direction: column;
          grid-area: showcase;
          justify-content: center;
          min-height: 400px;
          padding: 3rem;
        }
        body .wrapper .top-container .showcase h1 {
          color: #FFFFFF;
          font-size: 4rem;
          margin-bottom: 0;
        }
        body .wrapper .top-container .showcase p {
          color: #FFFFFF;
          font-size: 1.3rem;
          margin-top: 0;
        }
        body .wrapper .top-container .top-box {
          align-items: center;
          background: #DDDDDD;
          box-shadow: 0 1px 5px rgba(104, 104, 104, 0.8);
          display: grid;
          justify-items: center;
          padding: 1.5rem;
        }
        body .wrapper .top-container .top-box .price {
          font-size: 2.5rem;
        }
    </style>
</head>
<body>

    <div class="wrapper">
    <!-- Navigation -->
    <nav class="main-nav">
        <ul>
            <li> <a href="{{ route('page','home') }}">{{ __('Home') }}</a></li>
            <li> <a href="{{ route('page','contact') }}">{{ __('Contact') }}</a> </li>
            <li> <a href="{{ route('page','about') }}">{{ __('About') }}</a> </li>
            <li> <a href="{{ route('page','terms') }}">{{ __('Terms') }}</a> </li>
        </ul>
    </nav>
    <!-- Top Container -->
    <section class="top-container">
        <header class="showcase">
            <h1> Home Page</h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus itaque porro sequi, at dolor mollitia. </p>
            <a href="#" class="btn"> Read More </a>
        </header>
        <div class="top-box top-box-a">
            <!--
            <h4> Membership </h4>
            <p class="price">$199/mo</p>
            <a href="" class="btn"> Buy Now </a>
            -->
        </div>
        <div class="top-box top-box-b">
            <!--
            <h4> Pro Membership </h4>
            <p class="price">$299/mo</p>
            <a href="" class="btn"> Buy Now </a>
            -->
        </div>
    </section>
    <!-- Boxes Section -->
    <section class="boxes">
        <div class="box">
            <!--
            <i class="fas fa-chart-pie fa-4x"></i>
            <h3> Analytics </h3>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, doloremque? </p>
            -->
        </div>
        <div class="box">
            <!--
            <i class="fas fa-globe fa-4x"></i>
            <h3> Marketing </h3>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, doloremque? </p>
            -->
        </div>
        <div class="box">
            <!--
            <i class="fas fa-cog fa-4x"></i>
            <h3> Development </h3>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, doloremque? </p>
            -->
        </div>
        <div class="box">
            <!--
            <i class="fas fa-users fa-4x"></i>
            <h3> Support </h3>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, doloremque? </p>
            -->
        </div>
    </section>
    <!-- Info Section -->
    <section class="info">
        <!--
        <img src="https://image.ibb.co/j4Qz8x/pic1.jpg">
        -->
        <!--
        <div>
            <h2> Your Business On The Web </h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nostrum nesciunt ut, consequuntur vel voluptatibus est
                blanditiis eaque eos at corrupti nihil facere. Magni perspiciatis dignissimos, atque voluptates quam dicta.
            </p>
            <a href="#" class="btn"> Learn More </a>
        </div>
        -->
    </section>
    <!-- Portfolio Section -->
    <section class="portfolio">
        <!--
        <img src="https://source.unsplash.com/random/200x200">
        <img src="https://source.unsplash.com/random/201x200">
        <img src="https://source.unsplash.com/random/202x200">
        <img src="https://source.unsplash.com/random/203x200">
        <img src="https://source.unsplash.com/random/204x200">
        <img src="https://source.unsplash.com/random/205x200">
        <img src="https://source.unsplash.com/random/206x200">
        <img src="https://source.unsplash.com/random/207x200">
        <img src="https://source.unsplash.com/random/208x200">
        -->
    </section>
    <!-- Footer -->
    <footer>
        <!--
        <p> GridBiz &copy; 2020 </p>
        -->
    </footer>
</div>

</body>
</html>