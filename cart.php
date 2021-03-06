<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->

    <link rel="stylesheet" href="assets/css/cart.css">
    <script src="https://kit.fontawesome.com/46def20446.js" crossorigin="anonymous"></script>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Additional CSS Files -->
    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   

    <link rel="stylesheet" href="assets/css/cart.css">

    <link rel="stylesheet" href="assets/css/owl1.css">

    <title>Cart Page</title>
    
    <link rel="stylesheet" href="assets/css/owl.css">
    </head>
    <body>
        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
          <div class="jumper">
              <div></div>
              <div></div>
              <div></div>
          </div>
      </div>  
      <!-- ***** Preloader End ***** -->

       <!-- Header -->
          <header class=""></header>
            <nav class="navbar navbar-expand-lg" style="top:-80px; background-color: #000; position: relative; bottom: 100px;height: 95px;">
              <div class="container">
                <a class="navbar-brand" href="index.php"><img  style="margin-bottom: 0px !important;width: 100px;margin-left: 30px;"class="logo" src="./assets/images/deep drones.jpeg" alt="deep drones logo"></a>
                <button style ="width: 56px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto" style="background-color: #000;">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>           
                  
                    <li class="nav-item">
                      <a class="nav-link" href="shop.php">Shop
                        <span class="sr-only">(current)</span>
                      </a>
                    </li>
                  
                    

                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    
                    <li class="cart nav-item" style="background-color:#ffa93f ; color:#000 ">
                      <a class=" nav-link" href="cart.php">
                        <ion-icon name="cart-outline"></ion-icon> Cart <span>0</span>
                    </a>
                    </li>

                    <li class="cart nav-item" style="background-color:#ffa93f ; color:#000 ">
                      <a class=" nav-link" href="new folder/account setting.php">
                          Account settings
                    </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
              
                       <!--header ends-->
            
   
 
         <nav  class="navbar navbar-light bg-light justify-content-between" style="margin-top: -77px;">
          <h1 class="navbar-brand">SHOPPING CART</h1>
          <form class="form-inline">
            <div class=".float-sm-left">
            <div class="form-group">
            <button style="margin-right: 3%;" class="btn btn-success"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> Sign-in </button>
            </div>
            </div>
            

               <!--Pop up of Sign IN form -->
        <div id="id01" class="modal container-fluid " >
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <div class="centre signin-box" >
            <div class="container-1">
                <h1>Sign In</h1> <hr>
            <form action="#">
                <div class="data">
                    <label for="email"><b>Email or Mobile number</b></label>
                    <input style="text-align: center;"  type="text" autocomplete="email" placeholder="Email" maxlength="50" placeholder="Enter Email" name="email" required>
                </div>

                <div class="data">
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                </div>
                    
                <div class="forgot-pass"><a href="#">Forgot Password?</a></div>
                      
                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <button type="submit" class="signinbtn">SIGN IN</button>
                </div>

                <div class="signin-link">Not a member?  <a href="signup.php">Create a account</a></div>
              </form>
            </div>
        </div>
              
              <script>
              // Get the modal
              var modal = document.getElementById('id01');
              
              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                }
              }
              </script>
              </div>    <!--Pop up of Sign IN form ends-->
            </div>
          </nav>
        </form>
 
        <div class="form-group">
          <button id="clear-cart" class="btn btn-danger my-2 my-sm-0" type="submit">Clear-Cart</button>
        </div>
        <div class="products-container">
          <div class="product-header">
              <p class="product-title">Product</p>
              <p class="product-price">Price</p>
              <p class="quantity">Quantity </p> 
              <p class="total">Total</p>
          </div>
          <div class="products">
            <div>
              <ul id="show-cart">
                  <li >???????</li>
              </ul>
         
              
              <div style="float: right; position: relative; ">Total Cart:$<span id="total-cart" class="basketTotal"></span></div>
          </div>
          </div>
      </div>
      <div>
   
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript"> 
          AOS.init({
            once: true,
            easing: 'ease-in-out'
          }
          );
          $(".signin-box").removeClass('aos-animate');
          
          var iconButtonOpen = $(".sign-in");
          var iconBox = $(".signin-box");
          iconButtonOpen.on("click", function() {
            
            setTimeout(function() {
            $(iconBox).addClass('aos-animate');
            }, 400);
        });
        var iconButtonClose = $(".close");
        iconButtonClose.on("click", function() {
          $(iconBox).removeClass('aos-animate');
      });
      var iconButtonClose1 = $(".modal");
          iconButtonClose1.on("click", function() {
          $(iconBox).removeClass('aos-animate');
      });
        </script>
        <script src="assets/js/shoppingCart.js"></script>
        <script type="text/javascript">

            $(".add-to-cart").click(function(event){
                event.preventDefault();
                var name = $(this).attr("data-name");
                var price = Number($(this).attr("data-price"));

                shoppingCart.addItemToCart(name, price, 1);
                displayCart();
            });

            $("#clear-cart").click(function(event){
                shoppingCart.clearCart();
                displayCart();
            });

            function displayCart() {
                var cartArray = shoppingCart.listCart();
                
                var output = "";

                for (var i in cartArray) {
                    output += "<li class='product-list'>"
                      +"<div class='products-container'>"
                      
                        +" <button class='delete-item btn-danger' data-name='"
                        +cartArray[i].name+"'>X</button>"
                        +" <img src='assets/images/"+cartArray[i].name+".jpg'>"
                        +"<p >"
                        +cartArray[i].name +"&nbsp "
                        +"</p>"    
                        +"<p >"     
                        +cartArray[i].price 
                        +"</p>"
                        +" <button class='plus-item btn-primary' data-name='"
                        +cartArray[i].name+"'>+</button>"
                        +"<p>" 
                        +cartArray[i].count
                        +"</p>"
                        +" <button class='subtract-item btn-primary' data-name='"
                        +cartArray[i].name+"'>-</button>"
                        +"<p class='totals' style='width:6%'>"
                        +cartArray[i].total;
                        +"</p>"
                        +"</div>"
                        +"</li>"

                        
                }

                $("#show-cart").html(output);
                $("#count-cart").html( shoppingCart.countCart() );
                $("#total-cart").html( shoppingCart.totalCart() );
            }

            $("#show-cart").on("click", ".delete-item", function(event){
                var name = $(this).attr("data-name");
                shoppingCart.removeItemFromCartAll(name);
                displayCart();
            });

            $("#show-cart").on("click", ".subtract-item", function(event){
                var name = $(this).attr("data-name");
                shoppingCart.removeItemFromCart(name);
                displayCart();
            });

            $("#show-cart").on("click", ".plus-item", function(event){
                var name = $(this).attr("data-name");
                shoppingCart.addItemToCart(name, 0, 1);
                displayCart();
            });

            $("#show-cart").on("change", ".item-count", function(event){
                var name = $(this).attr("data-name");
                var count = Number($(this).val());
                shoppingCart.setCountForItem(name, count);
                displayCart();
            });

            displayCart();

        </script>
        
     <!-- Footer Starts Here -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4 footer-item">
              <h4>Additional Pages</h4>
              <ul class="menu-list">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Shop</a></li>
              
            </ul>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 footer-item">
            <h4>Legal Notices</h4>
            <ul class="menu-list">
              <li><a href="Terms & Conditions.php">Terms and Conditions</a></li>
              <li><a href="privacy policy.php">Privacy Policy</a></li>
            </ul>
          </div>
         
          <div class="col-md-4 footer-item last-item">
            <h4>Write To Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2021 Deep Drones .All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/wow.min.js"></script>
   
<script language = "text/Javascript"> 
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }
  </script>

  </body>
</html>
