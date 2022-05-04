<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>OrdiShop</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Righteous&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css?v=1"/>
    <link rel="icon" href="images/icon.png">
  </head>

  <body>
    <header>
      <nav>
        <div id="div1">

          <a href="home.php"><h id="shop">OrdiShop</h></a>
          <ul class="nav">
            <li class="nav-item">
              <a class="home" href="home.php" style=" border : 2px solid midnightblue">Home</a>
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
              <a class="login" href="login.php">Log in</a>
            </li>
            <li class="nav-item0">
              <a class="signup" href="signup.php">Sign up</a>
            </li>

          <?php } 
            else { ?>
              <div id="logout">
                <h1>Welcome <?php echo $_SESSION['uName'] ?> </h1>
                <img src="images/pprofile.png" onclick="logoutMenu()">
              </div>
          <?php
            }
          ?>

          <li class="nav-item1" onclick="menuDown()">
              <a class="menu" href="#"><img src="images/menu.png"></a>
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

    <section class="section1">
    <div class="banniere">
      <h1>Welcome to our Online Shop !<br/> OrdiShop provides you with a variety of workstation and laptop computers as well as gaming set ups. <br/>Find your computer here !</h1>
      <img src="images/banniere.png">
    </div>
    </section>
    <div class="brands">
      <h1>Available brands</h1>
    </div>
    <section class="section2">
      <div id="div2">
        <div class="cercle1"></div>
        <div class="cercle2"></div>
        <div class="cercle3"></div>
      </div>
    </section>
    <section class="section3">  
      <div class="availbrands">
        <div class="pc">
          <img src="images/lenovo.png" id="lenovo">
          <h1>LENOVO</h1>
          <a href="products.php #lenovolaps">View Lenovo products</a>
        </div>
        <div class="pc">
          <img src="images/dell.webp" id="dell">
          <h1>DELL</h1>
          <a href="products.php #delllaps">View Dell products</a>
        </div>
        <div class="pc">
          <img src="images/hp.png" id="hp">
          <h1>HP</h1>
          <a href="products.php #hplaps">View HP products</a>
        </div>
        <div class="pc">
          <img src="images/asus.png" id="asus">
          <h1>ASUS</h1>
          <a href="products.php #asuslaps">View Asus products</a>
        </div>
        <div class="pc">
          <img src="images/acer.png" id="acer">
          <h1>ACER</h1>
          <a href="products.php #acerlaps">View Acer products</a>
        </div>
        <div class="pc">
          <img src="images/toshiba.png" id="toshiba">
          <h1>TOSHIBA</h1>
          <a href="products.php #toshibalaps">View Toshiba products</a>
        </div>
      </div>
    </section>

    <footer>
        <div id="div3">
            <div id="about">
                <h2>About Us</h2><br/>
                <p>This website is a project carried out by a group of four students studying at the National School of Arts and Crafts of Rabat as part of engineering studies in the first year of the Electrical Energy and Digital Industry field.
                </p>
                <ul id="icons">
                    <li>
                      <a href="https://facebook.com/">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://instagram.com/">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li> 
                    <li>
                      <a href="https://twitter.com/">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://youtube.com/">
                        <i class="fa fa-youtube-play"></i>
                      </a>
                    </li> 
                </ul>
            </div>
            <div id="contact">
                <h2>Contact Info</h2><br/>
                <ul>
                    <li>
                        <i class="fa fa-map-marker" ></i>
                        <p>ENSAM, BP 6207 Avenue of the Royal Armed Forces, Rabat - Morocco</p>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <a id="tel" href="tel:555">+212 5375-64062</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:ordishop@gmail.com">ordishop@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="copyright">
          <p>Copyright &copy; 2021 OrdiShop WEB Project. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
