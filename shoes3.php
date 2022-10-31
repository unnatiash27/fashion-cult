<!-----Red-Black Sport Shoes------->
<!---------Roster wrist watch----------->

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detailed Products- Fashion Cult</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap"
    />
    <link rel="stylesheet"
    href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
    />
  </head>
  <body>
    <div class="container">
      <div class="navbar">
      <div class="logo">
            <a href="home.php"><img src="fashion cult.png" width="125px" /></a>
          </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="home.php">Home</a></li>
            <li><a href="all products.php">Products</a></li>
            <li><a href="signup.php">Signup</a></li>
          </ul>
        </nav>
        <a href="cart.php"
          ><img src="cart.png" width="30px" height="33px"
        /></a>
        <img
          src="menu.png"
          class="menu-icon"
          onclick="menutoggle()"
        />
      </div>
    </div>
    <!--------single products details---------->
    <div class="small-container single-product">
    <form action="manage_cart.php" method="POST">
      <div class="row">
        <div class="col-2">
          <img src="shoes2e.PNG" width="100%" id="productImg" />

          <div class="small-img-row">
            <div class="small-img-col">
              <img
                src="shoes2e.PNG"
                width="100%"
                class="small-img"
              />
            </div>
            <div class="small-img-col">
              <img
                src="shoes2dIV.PNG"
                width="100%"
                class="small-img"
              />
            </div>
            <div class="small-img-col">
              <img
                src="shoes2b.PNG"
                width="100%"
                class="small-img"
              />
            </div>
            <div class="small-img-col">
              <img
                src="shoes2c.PNG"
                width="100%"
                class="small-img"
              />
            </div>
          </div>
        </div>
        <div class="col-2">
          <p>Home / shoes</p>
          <h1>Crystal-13 Black Sports Transparent Sole Technology Running Shoes For Men  (Black, Red)</h1>
          <h4>₹1,259</h4>
          <select>
            <option>Select Size</option>
            <option>XXL</option>
            <option>XL</option>
            <option>L</option>
            <option>M</option>
            <option>S</option>
          </select>
          <input type="number" value="1" />
          <button type="submit" name="Add_to_cart" style="    border: 1px solid red;
    width: 91px;
    height: 42px;">Add to cart</button>
           <input type="hidden" name="Item_Name" value="Crystal-13 Shoes ">
           <input type="hidden" name="Price" value="1259">
          <h3>Product Details <i class="fa fa-indent"></i></h3>
          <br />
          <p>Color
Black, Red
</br>
Outer material
Fabric
</br>
Model name
Crystal-13 Black Sports Transparent Sole Technology
</br>
Ideal for
Men
</br>
Occasion
Sports
</br>
Sole material
Phylon
</br>
Closure
Lace-Ups
</br>
Upper Pttern
Solid</p>
        </div>
      </div>
      </form>
    </div>
    
    <!----------footer------------->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Lorem ipsum dolor e, laudantium officiis?</p>
            <div class="app-logo">
              <img src="play-store.png" />
              <img src="app-store.png" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="fashion cult.png">
            <p>Our purpose is to provide you with the best experience.</p>
          </div>
          <div class="footer-col-3">
            <h3>Useful links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>youtube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="Copyright">Copyright 2022 - Fashion Cult</p>
      </div>
    </div>
    <!-------js for togglemenu----------->
    <script>
      var MenuItems = document.getElementById("MenuItems");
      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
    <!-------js for prod gallary-->
    <script>
      var productImg = document.getElementById("productImg");
      var smallImg = document.getElementsByClassName("small-img");
      smallImg[0].onclick = function () {
        productImg.src = smallImg[0].src;
      };
      smallImg[1].onclick = function () {
        productImg.src = smallImg[1].src;
      };
      smallImg[2].onclick = function () {
        productImg.src = smallImg[2].src;
      };
      smallImg[3].onclick = function () {
        productImg.src = smallImg[3].src;
      };
    </script>
  </body>
</html>
