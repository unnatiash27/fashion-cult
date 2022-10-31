

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashion Cult | Ecommerce Website Design</title>
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
    <?php
    //echo $_SESSION['username'];
    ?>
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <a href="home.php"><img src="fashion cult.png" width="125px" /></a>
          </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="home.php">Home</a></li>
              <li><a href="all products.php">Products</a></li>
              <!--<li><a href="">About</a></li>
              <li><a href="">Contact</a></li>-->
              <li><a href="signup.php">Sign Up</a></li>
            </ul>
          </nav>
          <a href="cart.php"><img src="cart.png" width="30px" height="33px">
          </a>
          <img src="menu.png" class="menu-icon" 
          onclick="menutoggle()">
        </div>
        <div class="row">
          <div class="col-2">
            <h1>
              Gives your Workout<br />
              A New Style!
            </h1>
            <p>
              There are two types of people who will tell you that you cannot
              make a difference in this world: <br />those who are afraid to try
              <br />
              those who are afraid you will succeed.
            </p>
            <a href="all products.php" class="btn">Explore Now &#8594;</a>
          </div>
          <div class="col-2">
            <img src="image1.png" />
          </div>
        </div>
      </div>
    </div>
    <!------------featured categories------------>
    <div class="categories">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <img src="category-1.jpg" />
          </div>
          <div class="col-3">
            <img src="category-2.jpg" />
          </div>
          <div class="col-3">
            <img src="category-3.jpg" />
          </div>
        </div>
      </div>
    </div>
    <!--------featured products---------->
    <div class="small-container">
      <h2 class="title">Featured Products</h2>
      <div class="row">
        <div class="col-4">
          <a href="product.php"><img src="product-1.jpg" /></a>
          <a href="product.php"><h4>Red Printed T-Shirts</h4></a>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹900</p>
        </div>
        <div class="col-4">
        <a href="product2.php"><img src="product-2.jpg" /></a>
        <a href="product2.php"><h4>Black HRX Shoes</h4></a>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹ 3,090</p>
        </div>
        <div class="col-4">
        <a href="trouser2.php"><img src="trouser2Ih.PNG" /></a>
        <a href="trouser2.php"><h4>Grey Slim Trousers</h4></a>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p> ₹1,740</p>
        </div>
        <div class="col-4">
        <a href="tshirt.php"><img src="tshirt1aI.PNG" />
        <a href="tshirt.php"><h4> Puma Cotton T-Shirts </h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹ 2,299</p>
        </div>
      </div>
      <h2 class="title">Latest Products</h2>
      <div class="row">
        <div class="col-4">
        <a href="tshirt2.php"><img src="tshirt2.PNG" />
        <a href="tshirt2.php"><h4>Puma Printed T-Shirts</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹629</p>
        </div>
        <div class="col-4">
        <a href="socks.php"><img src="product-7.jpg" />
        <a href="socks.php"><h4>HRX Cotton Socks</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹274</p>
        </div>
        <div class="col-4">
        <a href="watch2.php"><img src="product-8.jpg" />
        <a href="watch2.php"><h4>Black Fossil WristWatch</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>₹ 4,200</p>
        </div>
        <div class="col-4">
        <a href="trouser3.php"><img src="trouser3a.PNG" />
        <a href="trouser3.php"><h4>Black Nike Trousers</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>₹1,247</p>
        </div>
      </div>
      
    </div>

    <!---offer-->
    <div class="offer">
      <div class="small-container">
        <div class="row">
          <div class="col-2">
            <a href="product.php"></a><img src="watch3aa.PNG" class="offer-img" />
          </div>
          <div class="col-2">
            <p>Exclusively avaliable on Fashion Cult</p>
            <h1>Smart Band 4</h1>
            <small
              >The Xiaomi Mi Smart Band 4 (Xiaomi Mi Band 4 in China) is a
              wearable activity tracker produced by Xiaomi Inc released in China
              on 16 June 2019,[2] in Europe on 26 June 2019[3] and in India on
              19 September 2019.
            </small>
            <a href="watch3.php" class="btn">Buy Now &#8594</a>
          </div>
        </div>
      </div>
    </div>
    <!-------testimonial-->
    <div class="testimonial">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
          <p>Cargo pants were first worn by British military personnel in the 1930s and 1940s.  After World war ii the pants pretty much became the standard in US military uniform.

Cargos had a revival in the 1990s, thanks to the music of the time. Many hip-hop stars wore the pants with oversized tees or crop tops.</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="user-1.png">
          <h3>
            Sean Parker
          </h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
        <p>Summer brights continue their mood-elevating impact long into Autumn. And With their most recent offering, the Desert Rose collection, House of Soi has taken note of this concept.The range comprises playful jumpsuits, co-ord sets, and breezy kaftans in a symphony of colours and prints, from shocking pink to bright green… trends that observe as wardrobe classics.</p>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <img src="user-2.png">
        <h3>
          Mike Smith
        </h3>
      </div>
      <div class="col-3">
        <i class="fa fa-quote-left"></i>
      <p>Maxi dresses are a great option for maintaining a professional look while dressing up for the office; they can also easily be dressed up for post-work dinners and parties. These are comfortable outfits that are great for lounging around the house and for the weekend. Today, maxi dresses are the go-to casual attire, so stock up on them.</p>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <img src="user-3.png">
      <h3>Mabel Joe</h3>
    </div>
      </div>
      </div>
    </div>

    <!-------brands------>
    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col-5">
            <img src="logo-godrej.png">
          </div>
          <div class="col-5">
            <img src="logo-oppo.png">
          </div>
          <div class="col-5">
            <img src="logo-coca-cola.png">
          </div>
          <div class="col-5">
            <img src="logo-paypal.png">
          </div>
          <div class="col-5">
            <img src="logo-philips.png">
          </div>
        </div>
      </div>
    </div>
    <!----------footer------------->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <P>Lorem ipsum dolor e, laudantium officiis?</P>
            <div class="app-logo">
              <img src="play-store.png">
              <img src="app-store.png">
            </div>
          </div>
          <div class="footer-col-2">
            <img src="fashion cult.png">
            <P>Our purpose is to provide you with the best experience.</P>
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
        <hr>
        <p class="Copyright">Copyright 2022 - Fashion Cult </p>
      </div>
    </div>
    <!-------js for togglemenu----------->
    <script>
      var MenuItems= document.getElementById("MenuItems");
      MenuItems.style.maxHeight="0px";

      function menutoggle(){
        if(MenuItems.style.maxHeight=="0px")
        {
          MenuItems.style.maxHeight="200px";
        }
        else{
          MenuItems.style.maxHeight="0px";
        }
      }
    </script>




  </body>
</html>
