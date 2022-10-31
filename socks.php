<!---------black HRX shoes----------->

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
           <img src="product-7.jpg" width="100%" id="productImg" />
           <div class="small-img-row">
             <div class="small-img-col">
               <img
                 src="product-7.jpg"
                width="100%"
                class="small-img"
               />
              </div>
              <div class="small-img-col">
               <img
                src="socks1b.PNG"
                width="100%"
                class="small-img"
                />
              </div>
              <div class="small-img-col">
               <img
                src="socks1c.PNG"
                width="100%"
                class="small-img"
                />
              </div>
              <div class="small-img-col">
               <img
                src="socks1d.PNG"
                width="100%"
                class="small-img"
                />
              </div>
            </div>
          </div>
         <div class="col-2">
           <p>Home / shoes</p>
           <h1>HRX Socks</h1>
           <h4>₹274</h4>
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
           <input type="hidden" name="Item_Name" value="HRX Socks">
           <input type="hidden" name="Price" value="274">
           <h3>Product Details <i class="fa fa-indent"></i></h3>
           <br />
           <p>The HRX Men's Running & Gym Training Socks are designed with an elasticized leg to fit securely so you don't worry about them slipping down while you run. They're breathable and comfortable so you can wear them throughout your workout. Available in a pack of three.Features
              Constructed with terry fabric for superior comfort and breathability
              Strategic heel and toe construction protects high-impact areas of feet
              Embedded arch support helps reduce foot fatigue
              Elasticized leg for secure fit
              Y heel gore fit</p>
          </div>
        </div>
      </form>
    </div>
    <!----title---->
    <div class="small-container">
      <div class="row row-2">
        <h2>Related Products</h2>
        
      </div>
    </div>
    <!------products------>
    <div class="small-container">
      <div class="row">
        <div class="col-4">
        <a href="watch1.php"><img src="watch1a.jpg" /></a>
          <a href="watch1.php"><h4>Roadster Wrist Watch</h4></a>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹949</p>
        </div>
        <div class="col-4">
        <a href="shoes3.php"><img src="shoes2eV.PNG" /></a>
        <a href="shoes3.php"><h4>Red-Black Sport Shoes</h4></a>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹1,259</p>
        </div>
        <div class="col-4">
        <a href="shoes2.php"><img src="shoes3a.PNG" /></a>
        <a href="shoes2.php"><h4>Grey Sports Shoes</h4></a>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>₹ 850</p>
        </div>
        <div class="col-4">
        <a href="trouser1.php"><img src="product-12.jpg" /></a>
        <a href="trouser1.php"><h4>Black Nike Trousers</h4></a>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹6,125</p>
        </div>
      </div>
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
