<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>

<head>
<meta charset="utf-8">

 <?php
     $title = "Контакты";
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
                        <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"/></a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="about.php">О нас</a></li>
						    <li><a href="services.php">Сервис</a></li>
                            <li><a href="portfolio.php">Сотрудники</a></li>
                            <li><a href="pricing.php">Продукция</a></li>
                            <li class="active"><a href="contact.php">Контакт</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter" >Войти</li></a>
                        </ul>
                    </div>
                </div>
            </div>
	       </header><!-- end header -->
    </div>

	<section id="inner-headline" class="bg-img">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Контакты</h2>
			</div>
		</div>
	</div>
	</section>

	<section id="content">
	 
	<div class="container">
	
							<div class="row">
								<div class="col-lg-12">
								
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="overflow:hidden;height:300px;width:100%;">
	<div id="gmap_canvas" style="height:300px;width:100%;"></div>
	<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
	<a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a>
</div>
<script type="text/javascript"> 
    function init_map()
    {var myOptions = {zoom:15,center:new google.maps.LatLng(52.7021,25.3470),mapTypeId: google.maps.MapTypeId.ROADMAP};
         map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
         marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(52.7021, 25.3470)});
         infowindow = new google.maps.InfoWindow({content:"<b>ИФ ОАО Экран</b><br/>ул. Заводская,33<br/> Брестская область" });
         google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
         infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
								</div>
							</div>
	<div class="row">
            <div class="col-md-8">
                
                    
                        <h2 class="text-center py-2"> Есть вопросы? Напишите нам! </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Пожалуйста, заполните все поля ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Ваше сообщение было успешно отправлено ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    
                    <div class="contact-form">

                        <form method="post" action="contact1.php"id="contactform" class="contact">

                            <div class="form-group has-feedback">
                                <input type="email" name="Email" placeholder="Email" class="form-control">
                            </div>

                            <div class="form-group has-feedback">
                                <input type="text" name="Subject" placeholder="ФИО" class="form-control">
                            </div>

                            <div class="form-group has-feedback">
                            <textarea name="msg" class="form-control" rows="6" placeholder="Напишите ваше сообщение"></textarea>
                            <button class="btn btn-success" name="btn-send"> Отправить </button>
                            </div>
                        </form>
                    </div>
                						
            </div>
	                    
                            <div class="col-md-4">
                                <address>
                                   <strong>ИФ ОАО "Экран"</strong><br>
                                   ул. Заводская,33<br>
                                   Брестская область, г.Ивацевичи<br>
                                   <abbr title="Телефон">Тел.:</abbr> +375 (801645) 92288
                                </address>

                                <address>
                                  <strong>Почта</strong><br>
                                  <a href="mailto:#">ifekran@rambler.ru</a>
                                </address>
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
<script src="js/contact.js"></script>
<script src="js/custom.js"></script> 
</body>
</html>