<?php 
require_once "reg/connect.php";
$products = mysql_query("SELECT * FROM `products`");



while ($var = mysql_fetch_assoc($products)) {
  $vars[$var["id"]] = $var["name"];
}


?>
<!DOCTYPE html>

<head>
<meta charset="utf-8">

 <?php
     $title = "Продукция";
     require_once "blocks/head.php";
 ?>
</head>
<body>
  
<div id="wrapper">
  <!-- start header -->
  <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Главная</a></li> 
                        <li><a href="about.php">О нас</a></li>
                        <li><a href="services.php">Сервис</a></li>
                        <li><a href="portfolio.php">Сотрудники</a></li>
                        <li class="active"><a href="pricing.php">Продукция</a></li>
                        <li><a href="contact.php">Контакты</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter" >Войти</li></a>
                        <li><a href="shop/cart.html">
                            <span class="icons c5 fa fa-shopping-cart" style="font-size: 24px"></span>
                            <span id="total-cart-count" class="badge"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
  </header><!-- end header -->
  
    
<section id="inner-headline" class="bg-img">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="pageTitle">Продукция</h2>
        </div>
      </div>
    </div>
    </section>
    
    <div class="row" style="background-image: url(/img/.png)">
      <section id="projects" >
        <ul id="thumbs" class="content" >

    <br>
       
        <div class="thumbnail" style="float: left; width:18%; margin-left: 40px;">
          <div class="caption text-center">
              <div class="position-relative">
                <a href="shop/shop1.php"><img  src="img/car/Bkm.jpg" alt="Card image cap"></a>
              </div>
              <h4 id="thumbnail-label"><a href="shop/shop1.php" ><?php echo $vars["1"]; ?></a></h4>
          </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script>
        $(document).ready(function()
        {
         $(".position-relative").find("img").css("transition", "transform 500ms ease-in-out");
         $(".position-relative").hover( 
         function()
         {
         $(this).find("img").css("transform", "scale(1.07)");
         },
         function()
         {
         $(this).find("img").css("transform", "scale(1)");
         }
         );
        });
        </script>

      
        <div class="thumbnail" style="float: left; width:18%; margin-left: 20px;">
          <div class="caption text-center">
              <div class="position-relative">
                <a href="shop/shop2.php"><img  src="img/car/Gomselmash.jpg" alt="Card image cap"> </a>
              </div>
              <h4 id="thumbnail-label"><a href="shop/shop2.php" ><?php echo $vars["2"]; ?></a></h4>
          </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script>
        $(document).ready(function()
        {
         $(".position-relative").find("img").css("transition", "transform 500ms ease-in-out");
         $(".position-relative").hover( 
         function()
         {
         $(this).find("img").css("transform", "scale(1.07)");
         },
         function()
         {
         $(this).find("img").css("transform", "scale(1)");
         }
         );
        });
        </script>

      
        <div class="thumbnail" style="float: left; width:18%; margin-left: 20px;">
          <div class="caption text-center">
              <div class="position-relative">
                <a href="shop/shop3.php"><img  src="img/car/KamAZ.jpg" alt="Card image cap"> </a>
              </div>
              <h4 id="thumbnail-label"><a href="shop/shop3.php" ><?php echo $vars["3"]; ?></a></h4>
          </div>
        </div><script src="js/jquery.min.js"></script>
        <script>
        $(document).ready(function()
        {
         $(".position-relative").find("img").css("transition", "transform 500ms ease-in-out");
         $(".position-relative").hover( 
         function()
         {
         $(this).find("img").css("transform", "scale(1.07)");
         },
         function()
         {
         $(this).find("img").css("transform", "scale(1)");
         }
         );
        });
        </script>

      
        <div class="thumbnail" style="float: left; width:18%; margin-left: 20px;">
          <div class="caption text-center">
              <div class="position-relative">
                <a href="shop/shop4.php"><img  src="img/car/KrAZ.jpg" alt="Card image cap"> </a>
              </div>
              <h4 id="thumbnail-label"><a href="shop/shop4.php" ><?php echo $vars["4"]; ?></a></h4>
          </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script>
        $(document).ready(function()
        {
         $(".position-relative").find("img").css("transition", "transform 500ms ease-in-out");
         $(".position-relative").hover( 
         function()
         {
         $(this).find("img").css("transform", "scale(1.07)");
         },
         function()
         {
         $(this).find("img").css("transform", "scale(1)");
         }
         );
        });
        </script>


        <div class="thumbnail" style="float: left; width:18%; margin-left: 20px;">
          <div class="caption text-center">
              <div class="position-relative">
                <a href="shop/shop5.php"><img src="img/car/Maz.jpg" alt="Card image cap"> </a>
              </div>
              <h4 id="thumbnail-label"><a href="shop/shop5.php" ><?php echo $vars["5"]; ?></a></h4>
          </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script>
        $(document).ready(function()
        {
         $(".position-relative").find("img").css("transition", "transform 500ms ease-in-out");
         $(".position-relative").hover( 
         function()
         {
         $(this).find("img").css("transform", "scale(1.07)");
         },
         function()
         {
         $(this).find("img").css("transform", "scale(1)");
         }
         );
        });
        </script>


        <br>
     
        <div class="thumbnail" style="float: left; width:18%; margin-left: 40px;">
          <div class="caption text-center">
              <div class="position-relative">
                <a href="shop/shop6.php"><img  src="img/car/Mmz.jpg" alt="Card image cap"> </a>
              </div>
              <h4 id="thumbnail-label"><a href="shop/shop6.php" ><?php echo $vars["6"]; ?></a></h4>
          </div>
        </div><script src="js/jquery.min.js"></script>
        <script>
        $(document).ready(function()
        {
         $(".position-relative").find("img").css("transition", "transform 500ms ease-in-out");
         $(".position-relative").hover( 
         function()
         {
         $(this).find("img").css("transform", "scale(1.07)");
         },
         function()
         {
         $(this).find("img").css("transform", "scale(1)");
         }
         );
        });
        </script>

      
      
        <div class="thumbnail" style="float: left; width:18%; margin-left: 20px;">
          <div class="caption text-center">
              <div class="position-relative">
                <a href="shop/shop7.php"><img  src="img/car/Mtz.jpg" alt="Card image cap"></a>
              </div>
              <h4 id="thumbnail-label"><a href="shop/shop7.php" >Автоэлектроника для <br>МТЗ</a></h4>
          </div>
        </div><script src="js/jquery.min.js"></script>
        <script>
        $(document).ready(function()
        {
         $(".position-relative").find("img").css("transition", "transform 500ms ease-in-out");
         $(".position-relative").hover( 
         function()
         {
         $(this).find("img").css("transform", "scale(1.07)");
         },
         function()
         {
         $(this).find("img").css("transform", "scale(1)");
         }
         );
        });
        </script>

      
        <div class="thumbnail" style="float: left; width:18%; margin-left: 20px;">
          <div class="caption text-center">
              <div class="position-relative">
                <a href="shop/shop8.php"><img  src="img/car/Neman.jpg" alt="Card image cap"></a>
              </div>
              <h4 id="thumbnail-label"><a href="shop/shop8.php" ><?php echo $vars["8"]; ?></a></h4>
          </div>
        </div><script src="js/jquery.min.js"></script>
        <script>
        $(document).ready(function()
        {
         $(".position-relative").find("img").css("transition", "transform 500ms ease-in-out");
         $(".position-relative").hover( 
         function()
         {
         $(this).find("img").css("transform", "scale(1.07)");
         },
         function()
         {
         $(this).find("img").css("transform", "scale(1)");
         }
         );
        });
        </script>

      
        <div class="thumbnail" style="float: left; width:18%; margin-left: 20px;">
          <div class="caption text-center">
              <div class="position-relative">
                <a href="shop/shop9.php"><img  src="img/car/Paz.jpg" alt="Card image cap"></a>
              </div>
              <h4 id="thumbnail-label"><a href="shop/shop9.php" >Автоэлектроника для <br>ПАЗ</a></h4>
          </div>
        </div><script src="js/jquery.min.js"></script>
        <script>
        $(document).ready(function()
        {
         $(".position-relative").find("img").css("transition", "transform 500ms ease-in-out");
         $(".position-relative").hover( 
         function()
         {
         $(this).find("img").css("transform", "scale(1.07)");
         },
         function()
         {
         $(this).find("img").css("transform", "scale(1)");
         }
         );
        });
        </script>

      
      
        <div class="thumbnail" style="float: left; width:18%; margin-left: 20px;">
          <div class="caption text-center">
              <div class="position-relative">
                <a href="shop/shop10.php"><img src="img/car/Ural.jpg" alt="Card image cap"></a>
              </div>
              <h4 id="thumbnail-label"><a href="shop/shop10.php" ><?php echo $vars["10"]; ?></a></h4>
          </div>
        </div><script src="js/jquery.min.js"></script>
        <script>
        $(document).ready(function()
        {
         $(".position-relative").find("img").css("transition", "transform 500ms ease-in-out");
         $(".position-relative").hover( 
         function()
         {
         $(this).find("img").css("transform", "scale(1.07)");
         },
         function()
         {
         $(this).find("img").css("transform", "scale(1)");
         }
         );
        });
        </script>

  </ul>
  </section>
  </div>




<!--    

    <ul class="link-list">
                                <li>
                                    <a href="tables/t1.php"><?php echo $vars["1"]; ?></a>
                                </li>

                                <li>
                                    <a href="tables/t2.php"><?php echo $vars["2"]; ?></a>
                                </li>

                                <li>
                                    <a href="tables/t3.php"><?php echo $vars["3"]; ?></a>
                                </li>

                                <li>
                                    <a href="tables/t4.php"><?php echo $vars["4"]; ?></a>
                                </li>

                                <li>
                                    <a href="tables/t5.php"><?php echo $vars["5"]; ?></a>
                                </li>

                                <li>
                                    <a href="tables/t6.php"><?php echo $vars["6"]; ?></a>
                                </li>

                                <li>
                                    <a href="tables/t7.php"><?php echo $vars["7"]; ?></a>
                                </li>

                                <li>
                                    <a href="tables/t8.php"><?php echo $vars["8"]; ?></a>
                                </li>

                                <li>
                                    <a href="tables/t9.php"><?php echo $vars["9"]; ?></a>
                                </li>

                                <li>
                                    <a href="tables/t10.php"><?php echo $vars["10"]; ?></a>
                                </li>
                            </ul>
                            <br>
                            <br>
    
  

  
 -->


  <?php require_once "blocks/footer.php"?>

 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="text-center py-2">Авторизация</h2>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="login.php" method="post">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
              <input name="login" type="text" class="form-control" placeholder="Ваш логин">
            </div>
          </div>
          <hr class="hr-xs">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
              <input name="password" type="password" class="form-control" placeholder="Ваш пароль">
            </div>
          </div>
          <br>
          <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Войти</button>
            
         
      </div>
      <div class="modal-footer">
        <div class="text-center">
          <p>
          У вас нет аккаунта? - <a href="reg.php">Зарегистрируйтесь</a>!
        </p>
        

        </div>
        
        </div>
    
      </div>
    </div>
  </div>
</div>

</form>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
