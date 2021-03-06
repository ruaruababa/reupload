<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Food</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./reset.css" />
    <link rel="stylesheet" href="./order.css" />
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
    <section id="section-order">
      <img
        src="./bgorder.jpg"
        alt=""
        class="bgr"
        style="position: absolute; z-index: -1; height: 820px"
      />
      <div class="container-order">
        <form action="">
          <h3 class="title-order">Fill this form to confirm your order</h3>
          <div class="container-seclect-food">
            <div class="img-food">
              <!-- <label for="" class="seclect">Seclect Food</label> -->
              <img src="./img/menu-momo.jpg" alt="" class="bgr-item" />
            </div>
            <div class="content-food">
              <h6 class="title-item">Food title</h6>
              <span class="price-item">$2.5</span>
              <label for="" class="quantity">Quantity</label>
              <input type="number" min="1" max="100" class="inp-number" />
            </div>
          </div>
          <div class="container-delivery-title">
            <lable class="full-name">Full name</lable>
            <input type="text" placeholder="E.g Nguyen Ngoc Giang" />
            <lable class="phone-number">Phone Number</lable>
            <input type="text" placeholder="E.g 0934 xxx xxx" />
            <lable class="email">Email</lable>
            <input type="text" placeholder="E.g example@gmail.com" />
            <lable class="Address">Address</lable>
            <textarea
              name="address"
              id=""
              cols="30"
              rows="10"
              placeholder="175 Tay Son, Dong Da"
              style="resize: none; border-radius: 5px"
            ></textarea>
            <input
              type="button"
              value="Confirm Order"
              style="width: 100px; background-color: #e47b69; color: white"
            />
          </div>
        </form>
      </div>
    </section>
    <footer
      style="
        position: absolute;
        margin-top: 800px;
        left: 50%;
        transform: translateX(-50%);
      "
    >
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
