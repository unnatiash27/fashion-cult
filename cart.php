<!---------cart------------>
<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add to Cart- RedStore</title>
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
        <img src="cart.png" width="40px" height="40px" />
        <img
          src="menu.png"
          class="menu-icon"
          onclick="menutoggle()"
        />
      </div>
    </div>
    <!-----cart items delails----->
    <div class="container">
      <div class="row" >
           <div class="col-lg-9">
            <table class="table" style="    margin-right: 311px;     margin-top: 10px;">
              <thead class="text-center">
               <tr>
               <th scope="col">Serial No. </th>
               <th scope="col">Item Name </th>
               <th scope="col">Item Price </th>
               <th scope="col">Quantity </th>
               <th scope="col"></th>
               </tr>
              </thead>
              <tbody class="text-center">
               <?php
                $total=0;
                if(isset($_SESSION['cart']))
                {
                foreach($_SESSION['cart'] as $key =>$value) 
                {
                  $sr=$key+1;
                  $total=$total+$value['Price'];
                  echo"
                  <tr>
                   <td>$sr</td>
                   <td>$value[Item_Name]</td>
                   <td>$value[Price]</td>
                   <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'</td>
                    <td>
                     <form action='manage_cart.php' method='POST' >
                      <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                     </form>
                   </td>
                  </tr>
                  ";
                }
                }
               ?>
                
              </tbody>
              
            </table>
           </div> 
           <div class="col-lg-3" style="margin-top: 467px;">
             <div class="border bg-light rounded p-4"> 
               <h2 class="text" style="    margin-top: 540px;">Total:₹  <?php echo $total?></h2><br /><h3>&#8226; Cash On Delivery</h3>
               <form>
                
               <button  class="btn btn-primary btn-block">Make Purchase</button>
               </form>
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
  </body>
</html>
