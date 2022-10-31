<?php
$success=0;
$user=0;


if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    //$sql="insert into  `registration` (username,password)values('$username','$password')";
    //$result=mysqli_query($con,$sql);

    //if($result){
     //   echo "Data inserted seccessfully";
    //} else{
      //  die(mysqli_error($con));
    //}

    $sql="select * from `registration` where username='$username'";
    ////$sql="select * from `registration` where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result) {
        $num=mysqli_num_rows($result);
        if($num>0) {
            //   echo"User already exists";
            $user=1;
        }
        else {
            $sql="insert into  `registration` (username,password)values('$username','$password')";
            $result=mysqli_query($con,$sql);
            
                if($result){
                      //   echo"SignUp seccessful";
                      $success=1;
                   } else{
                     die(mysqli_error($con));
                   }
            
        }
    }

    
}

    


?>



<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account page- RedStore</title>
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
  if($user){
    echo '<div class="alert"  id="alert1">
    <strong> SORRY!</strong> 
    <p>User already exists.
    </p>
    
    </div>';
  }



?>

<?php
  if($success){
    echo '<div class="alert"  id="alert2">
    <strong> CONGRATULATIONS!</strong> 
    <p>You are successfully signed up.
    </p></div>';
  }



?>

  
    <div class="container">
      <div class="navbar">
      <div class="logo">
            <a href="home.php"><img src="fashion cult.png" width="125px" /></a>
          </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="home.php">Home</a></li>
            <li><a href="all products.php">Products</a></li>
            <li><a href="">Account</a></li>
          </ul>
        </nav>
        <a href="cart.php"><img src="cart.png" width="30px" height="33px" />
        </a>
        
        <img
          src="menu.png"
          class="menu-icon"
          onclick="menutoggle()"
        />
      </div>
    </div>

    <!------------account page----------->
    <div class="account-page">
      <div class="container">
        <div class="row">
          <div class="col-2">
            <img src="image1.png" width="100%" />
          </div>
          <div class="col-2">
            <div class="form-container">
              <div class="form-btn">
             <!--- <a href="login.php">Login</a>--->
                <span onclick="register()">Register</span>
                <!---<hr id="indicator">--->
              </div>
              <!----
              <form id="LoginForm" action="connect.php" method="post" >
                <input type="text" placeholder="Username" name="username" />
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password" />
                <input type="submit" class="btn" ></button>
                <a href=""> Forgot Password</a>
                --->
                
                
                <!-----
                
                
                ???????????????????????????????????????????????????????????????????????????????????????????????
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    include 'connect.php';
                $sql="select * from `registration` where username='$username' and password='$password'";
                if($result) {
                    $num=mysqli_num_rows($result);
                    if($num>0) {
                       echo "LOGIN SUCCESSFUL";
                    } else{
                        echo "INVALID CREDIDENT";
                    }
                }
             }
                ?>
    





    --------->
              </form>
              
              <form id="RegForm" action="signup.php" method="post">
                <input type="text" placeholder="Username" name="username" />
                <!---<input type="email" placeholder="Email" name="email" /> --->
                <input type="password" placeholder="Password" name="password" />
                <button type="submit" class="btn" >Register</button>  
                <p >Already have an account?<a href="login.php"> Login Here</a></p>
                
               
             </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!----------footer------->
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

<script>
    var LoginForm=document.getElementById("LoginForm");
    var RegForm=document.getElementById("RegForm");
    var Indicator=document.getElementById("Indicator");
    function register(){
        RegForm.style.transform="translateX(0PX)";
        LoginForm.style.transform="translateX(0px)";
        indicator.style.transform="translateX(100px)";
    }
    function login(){
        RegForm.style.transform="translateX(300PX)";
        LoginForm.style.transform="translateX(300px)";
        indicator.style.transform="translateX(0px)";
    }
</script>









  </body>
</html>
