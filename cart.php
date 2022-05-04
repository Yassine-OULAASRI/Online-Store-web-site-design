<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Cart</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Righteous&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="images/icon.png">
  </head>

  <body>
    <header>
    <nav id="productsnav">
      <div id="div1">
          <a href="home.php"><h id="shop">OrdiShop</h1></a>
          <ul class="nav">
            <li class="nav-item">
              <a class="home" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="ourteam" href="ourteam.php">Our Team</a>
            </li>
            <li class="nav-item">
              <a class="products" href="products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="contactus" href="contactus.php">Contact us</a>
            </li>
          </ul>
          <?php 
            session_start();
            if(! isset( $_SESSION['uName'])) {
          ?>
          <ul class="nav0">
            <li class="nav-item0">
            <a class="signup" href="cart.php" style="border:2px solid midnightblue">
              <i class="fa fa-shopping-cart"></i><span>0</span>
            </a>
            </li>
          <?php } else { ?>
          <ul class="nav0" style="margin-left: -15%;">
            <li class="nav-item0" style="margin-left: 70%;">
            <a class="signup" href="cart.php" style="border:2px solid midnightblue">
              <i class="fa fa-shopping-cart"></i><span>0</span>
            </a>
            </li>
          <?php }
            if(! isset( $_SESSION['uName'])) {
          ?>

            <li class="nav-item0">
              <a class="login" href="login.php">Log in</a>
            </li>
            <li class="nav-item0">
              <a class="signup" href="signup.php">Sign up</a>
            </li>
          <?php } 
            else { ?>
              </ul>
              <div id="logout">
                <h1>Welcome <?php echo $_SESSION['uName'] ?> </h1>
                <img src="images/pprofile.png" onclick="logoutMenu()">
              </div>
          <?php
            }
          ?>  
            <li class="nav-item1" onclick="menuDown()">
              <a class="menu"><img src="images/menu.png"></a>
            </li>
          </ul>
      </div>
    </nav> 
    <div id="logout1">
              <img src="images/pprofile.png" onclick="logoutMenu()">
        </div> 
    </header>

    <div class="goUp" onclick="up()">
      <img src="images/goup.png">
    </div>

    <?php 
      if(isset( $_SESSION['uName'])) {
    ?>
    <div id="logoutbox">
      <ul>
        <li>Welcome <?php echo $_SESSION['uName'] ?> </li>
        <li> <form action="#" method="GET"> <button>
          <i class="fa fa-user" aria-hidden="true"></i>  Profile</button> </form></li>
        <li> <form action="#" method="GET"> <button>
          <i class="fa fa-cog" aria-hidden="true"></i>  Settings</button> </form></li>
        <li> <form action="logout.php" method="GET"> <button id="logoutbutt">
          <i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</button> </form></li> 
      </ul>
    </div>
    <?php } else { ?>
    <div id="logoutbox" style="width:120px;">
      <ul>
        <li style="display: none;"> </li>
        <li style="padding-top: 18px;"> <form action="login.php" method="GET"> <button>Log In</button> </form></li>
        <li> <form action="signup.php" method="GET"> <button>Sign Up</button> </form></li>
      </ul>
    </div>
    <?php } ?>

    <div id="sideBar">
      <ul>
        <li> <a href="home.php"> Home </a> </li> 
        <li> <a href="ourteam.php"> Our Team </a> </li>
        <li> <a href="products.php"> Products </a> </li>
        <li> <a href="contactus.php"> Contact Us </a> </li>
      </ul>
    </div>

    <section class="section2">
      <div id="div2">
        <div class="cercle1"></div>
        <div class="cercle2"></div>
        <div class="cercle3"></div>
      </div>
    </section>

    <div id="cartcont">
      <div class="cart">
        <div class="caco">
          <h5 id="cartProd">PRODUCT</h5>
          <h5>PRICE</h5>
          <h5>QUANTITY</h5>
          <h5>SUM</h5>
        </div>

        <div class="product">
          
        </div>

        <div class="tnx">

        </div>

        <div class="tot">
          
        </div>
      </div>
    </div>

	<footer>
		<div id="copyright">
          <p>Copyright &copy; 2021 OrdiShop WEB Project. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>