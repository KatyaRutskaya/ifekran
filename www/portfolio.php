<?php 
require_once "reg/connect.php";
$portfolio = mysql_query("SELECT * FROM `portfolio`");

while ($var = mysql_fetch_assoc($portfolio)) {
  $vars[$var["id"]] = $var["title"];
}
?>

<!DOCTYPE html>

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->

 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php
  $title = "Портфолио";
  require_once "blocks/head.php"
?>
</head>
<body>
	
<div id="wrapper">
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
                        <li class="active"><a href="portfolio.php">Сотрудники</a></li>
                        <li><a href="pricing.php">Продукция</a></li>
                        <li><a href="contact.php">Контакты</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter" >Войти</li></a>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	
	<section id="inner-headline" class="bg-img">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Доска почета</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				<div class="clearfix">
				</div>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" >
							<?php 
							
							$img = mysql_query("SELECT * FROM `img`");
							if ( mysql_num_rows( $img ) > 0 )
							while ($vari = mysql_fetch_assoc($img)) {
							  $varsi[$vari["id"]] = $vari["image"];
							}
							?>
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $vars["1"]; ?>" href="img/works/<?php echo $varsi["1"]; ?>.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-search"></i></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/<?php echo $varsi["1"]; ?>.jpg" alt="">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-1" >
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $vars["2"]; ?>" href="img/works/<?php echo $varsi["2"]; ?>.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-search"></i></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/<?php echo $varsi["2"]; ?>.jpg" alt="">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-2" >
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $vars["3"]; ?>" href="img/works/<?php echo $varsi["3"]; ?>.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-search"></i></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/<?php echo $varsi["3"]; ?>.jpg" alt="">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" >
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $vars["4"]; ?>" href="img/works/<?php echo $varsi["4"]; ?>.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-search"></i></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/<?php echo $varsi["4"]; ?>.jpg" alt="">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<div class="port" style="font-size: 1px">
						<p> .</p>
					   </div>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-5" >
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $vars["5"]; ?>" href="img/works/<?php echo $varsi["5"]; ?>.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-search"></i></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/<?php echo $varsi["5"]; ?>.jpg" alt="">
						</li>
						<!-- End Item Project -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" >
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $vars["6"]; ?>" href="img/works/<?php echo $varsi["6"]; ?>.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-search"></i></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/<?php echo $varsi["6"]; ?>.jpg" alt="">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" >
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $vars["7"]; ?>" href="img/works/<?php echo $varsi["7"]; ?>.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-search"></i></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/<?php echo $varsi["7"]; ?>.jpg" alt="">
						</li>
						<!-- End Item Project -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" >
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $vars["8"]; ?>" href="img/works/<?php echo $varsi["8"]; ?>.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb"><i class="icon-info-blocks fa fa-search"></i></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/works/<?php echo $varsi["8"]; ?>.jpg" alt="">
						</li>
					</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
	</section>
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
    </div><!-- /.модальное окно-Содержание -->
  </div><!-- /.модальное окно-диалог -->
</div><!-- /.модальное окно -->

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