<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Products</title>
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
              <a class="products" href="products.php" style="border:2px solid midnightblue">Products</a>
            </li>
            <li class="nav-item">
              <a class="contactus" href="contactus.php">Contact us</a>
            </li>
          </ul>
          
          <?php 
            session_start();
            if(!isset( $_SESSION['uName'])) {
          ?>
            <ul class="nav0">
            <li class="nav-item0">
            <a class="signup" href="cart.php"><i class="fa fa-shopping-cart"></i><span>0</span></a>
            </li>
          <?php } else { ?>
            <ul class="nav0" style="margin-left: -15%;">
            <li class="nav-item0" style="margin-left: 70%;">
            <a class="signup" href="cart.php"><i class="fa fa-shopping-cart"></i><span>0</span></a>
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

    <div class="fixedcart">
      <a class="signup" href="cart.php"><i class="fa fa-shopping-cart"></i><span>0</span>
      </a>
    </div>

    <section class="section2">
      <div id="div2">
        <div class="cercle1"></div>
        <div class="cercle2"></div>
        <div class="cercle3"></div>
      </div>
    </section>
    <h1 id="ot">Products</h1>
    <div id="products">
      <div id="lenovolaps"></div>
      <div class="pcbrand"> Lenovo laptops</div>
        <div id="lenovopcs">
          <div class="pcs"> 
            <div class="c1">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>0</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo0 ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
            </div>
          </div>

          <div class="pcs">
            <div class="c2">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>1</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo1 ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
          </div>
          <div class="pcs">
            <div class="c3">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>2</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo2 ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
          </div>
          <div class="pcs">
            <div class="c4">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>3</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo3 ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div> 
          </div>
        </div>
        </div>
      
      <div id="delllaps"></div>
      <div class="pcbrand"> Dell laptops</div>
        <div id="lenovopcs">
          <div class="pcs">
          <div class="c5"> 
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
          </div>
          <div class="pcs">
            <div class="c6">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
          </div>
          <div class="pcs">
            <div class="c7">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
          </div>
          <div class="pcs">
            <div class="c8">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div> 
          </div>
        </div>
      </div>
      
      <div id="hplaps"></div>
      <div class="pcbrand"> HP laptops</div>
        <div id="lenovopcs">
          <div class="pcs">
            <div class="c9">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div> 
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
        </div>
          <div class="pcs">
            <div class="c10">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
        </div>
          <div class="pcs">
            <div class="c10">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
        </div>
          <div class="pcs">
            <div class="c12">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div> 
          </div>
        </div>
      </div>
      
      <div id="asuslaps"></div>
      <div class="pcbrand"> Asus laptops</div>
        <div id="lenovopcs">
          <div class="pcs"> 
            <div class="c13">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
        </div>
          <div class="pcs">
            <div class="c14">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
        </div>
          <div class="pcs">
            <div class="c15">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
        </div>
          <div class="pcs">
            <div class="c16">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div> 
          </div>
        </div>
        </div>
      
      <div id="acerlaps"></div>
      <div class="pcbrand"> Acer laptops</div>
        <div id="lenovopcs">
          <div class="pcs">
          <div class="c17"> 
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
        </div>
          <div class="pcs">
            <div class="c18">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
        </div>
          <div class="pcs">
            <div class="c19">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
        </div>
          <div class="pcs">
            <div class="c20">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div> 
          </div>
        </div>
        </div>
      
      <div id="toshibalaps"></div>
      <div class="pcbrand"> Toshiba laptops</div>
        <div id="lenovopcs">
          <div class="pcs">
          <div class="c21"> 
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
        </div>
          <div class="pcs">
            <div class="c22">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
        </div>
          <div class="pcs">
            <div class="c23">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div>
          </div>
        </div>
          <div class="pcs">
            <div class="c24">
            <div class="addcart">
              <a href="javascript:void(0);" class="addtocart">Add to Cart</a>
            </div>
            <div class="pcpic">
            <img src="images/c1.webp">
            </div>
            <div class="pcprice">
              <h2><span>8500</span>.00 Dh</h2>
            </div>
            <div class="pcname">
            <h2>Lenovo ideapad 3 15ADA05</h2>
            </div>
            <div class="specs">
            <h4>Specifications</h4>
            <ul> 
              <li><span>CPU</span> : AMD Ryzen™ 3 3250U</li>
              <li><span>RAM</span> : 12 GB DDR4 2400 MHz</li>
              <li><span>Storage</span> : 256 Go SSD M.2 PCIe</li>
              <li><span>Display</span> : 15,6″ Full-HD TN 1080 Pixels</li>
              <li><span>Communication</span> : Wi-Fi + Bluetooth</li>
              <li><span>OS</span> : Windows 10 Family 64 bits</li>
              <li><span>Keyboard</span> : Azerty Belgium</li>
            </ul>
            </div> 
          </div>
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