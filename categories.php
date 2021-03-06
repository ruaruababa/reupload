<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
      .list-food li img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
      }

      .list-food li {
        width: 350px;
        height: 400px;
        transition: 0.2s all;
      }
    </style>
  </head>

  <body>
    <nav>
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">
        <img src="./img/logo.png" alt="" class="img-logo" />
      </label>
      <ul class="navbar">
        <li><a class="active" href="./index.html">Home</a></li>
        <li><a href="./categories.html">Categories</a></li>
        <li><a href="./food.html">Foods</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <section id="section-collection">
      <div class="container-section-collection">
        <div class="explore-food">Explore Foods</div>
        <ul class="list-food" style="flex-wrap: wrap; gap: 30px 30px">
          <li class="item">
            <img src="./img/pizza.jpg" alt="" /><span>Pizza</span>
          </li>
          <li class="item">
            <img src="./img/burger.jpg" alt="" /><span>Burger</span>
          </li>
          <li class="item">
            <img src="./img/momo.jpg" alt="" /><span>Momo</span>
          </li>
          <li class="item">
            <img src="./img/pizza.jpg" alt="" /><span>Pizza</span>
          </li>
          <li class="item">
            <img src="./img/pizza.jpg" alt="" /><span>Pizza</span>
          </li>
          <li class="item">
            <img src="./img/pizza.jpg" alt="" /><span>Pizza</span>
          </li>
          <li class="item">
            <img src="./img/pizza.jpg" alt="" /><span>Pizza</span>
          </li>
          <li class="item">
            <img src="./img/pizza.jpg" alt="" /><span>Pizza</span>
          </li>
          <li class="item">
            <img src="./img/pizza.jpg" alt="" /><span>Pizza</span>
          </li>
        </ul>
      </div>
    </section>
    <footer style="padding-top: 40px">
      <div class="container-footer">
        <div class="social-network-icon">
          <div class="icon-fb">
            <a href="https://www.facebook.com/WowFoodPage"
              ><img src="./img/facebook_icon-icons.com_59205.png" alt=""
            /></a>
          </div>
          <div class="icon-insta">
            <a href="https://www.instagram.com/wowfoodrus/"
              ><img src="./img/intsa-icon.png" alt=""
            /></a>
          </div>
          <div class="icon-twitter">
            <a href="https://twitter.com/WOWFoodPics"
              ><img src="./img/twitter_socialnetwork_20007.png" alt=""
            /></a>
          </div>
        </div>
        <div class="license">
          <p>
            All rights reversed. Designed by <a href="">Nguy???n Ng???c Giang</a>
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
