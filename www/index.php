<?php
session_start();
?>
<!DOCTYPE html>

<head>
<meta charset="utf-8">

    <?php
      $title = "Главная";
      require_once "blocks/head.php";
    ?>
</head>
<body>
    <div class="home-page" id="wrapper">
        <!-- start header -->
           <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span> 
                           <span class="icon-bar"></span>
                       </button>
                       <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"/></a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Главная</a></li>
                            <li><a href="about.php">О нас</a></li>
                            <li><a href="services.php">Сервис</a></li>
                            <li><a href="portfolio.php">Сотрудники</a></li>
                            <li><a href="pricing.php">Продукция</a></li>
                            <li><a href="contact.php">Контакты</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter" >Войти</li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </header><!-- end header -->
        <section id="banner">
            <!-- Slider -->

            <div class="flexslider" id="main-slider">
                <ul class="slides">
                    <li>
                        <img alt="" src="img/slides/1.jpg">

                        <div class="flex-caption wow fadeInLeft animated" data-wow-animation-name="none">
                            <h3>ИФ ОАО "ЭКРАН"</h3>

                            <p>Выпуск продукции производственно-технического назначения автомобильной тематики</p>
                        </div>
                    </li>

                    <li>
                        <img alt="" src="img/slides/2.jpg">

                        <div class="flex-caption wow fadeInRight animated" data-wow-animation-name="none">
                            <h3>ISO 9001-2015</h3>

                            <p>Мы предлагаем своим партнерам только качественную продукцию, доступные цены, техническую поддержку и консультации</p>
                        </div>
                    </li>
                </ul>
            </div><!-- end slider -->
        </section>

        <section class="hero-text">
            <div class="container">
                <div class="row"> 

                    <div class="col-lg-6 wow fadeInRight animated"
                    data-wow-animation-name="none">
                        <h2>СТБ ISO 9001-2015</h2> 
                        <p>Система менеджмента качества ОАО «Экран» сертифицирована
                         на соответствие требованиям СТБ ISO 9001-2015 в Национальной
                         системе подтверждения соответствия Республики Беларусь.<br>
                         Сертификат соответствия зарегистрирован в реестре под №
                         BY/112 05.01. 002.01 00132<br></p><br/> 
							<div class="btn-section"><a href="img\doc\iso 9001.pdf" class="btn-default">Подробнее</a></div>
                        
                    </div>
					<div class="col-lg-6 wow fadeInRight animated"
                    data-wow-animation-name="none">
                        <h2>IATF 16949:2016</h2> 
                        <p>После проведения сертификационного аудита, органом по
                        сертификации IATF выдан сертификат соответствия
                        системы менеджмента качества ОАО «Экран» требованиям ISO/TS
                        16949:2016.<br>
                        Сертификат соответствия зарегистрирован в реестре под № 54744/B/0001/SM/Ru<br></p><br/> 
							<div class="btn-section"><a href="img\doc\iatf 16949.pdf" class="btn-default">Подробнее</a></div>
                        
                    </div>
                </div>
            </div>
        </section>

		
        <section id="content" class="bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aligncenter">
                            <h2 class="aligncenter">Услуги</h2>
							<span></span>
                        </div> 
                    </div>
                </div>

                <div class="row">
                    <div class="skill-home">
                        <div class="skill-home-solid clearfix">
                            <div class="col-md-3 text-center"> 
                                <span class="icons c1 fa fa-wrench" style=
                                "font-style: italic"></span>

                                <div class="box-area">
                                    <h3> Гарантийная мастерская</h3>

                                    <p>Выполняет работы по гарантийному
                                     обслуживанию продукции, произведенной 
                                     ОАО «Экран».</p>
                                     <p>Начальник эксплуатационно-ремонтного отдела 
                                     - Чернухо Руслан Евгеньевич.</p>
                                     <p>Тел. (+375-177)-74-81-61.</p>
                                     <br>
                                </div> 
                            </div>

                            <div class="col-md-3 text-center">
                                <span class="icons c2 fa fa-link" style=
                                "font-style: italic"></span>

                                <div class="box-area">
                                    <h3>Испытательный центр</h3>

                                    
                                     <p>Проводит испытания изделий согласно ГОСТ 20.57.406 </p>
                                     <p> Начальник службы метрологии и испытаний
                                      Терещук Игорь Анатольевич</p>
                                      <p>Тел. (+375-177) 72-39-14</p>
                                      <br>
                                      <br>
                                      <br>
                                </div>
                            </div>

                            <div class="col-md-3 text-center">
                                <span class="icons c3 fa fa-flask" style=
                                "font-style: italic"></span>

                                <div class="box-area">
                                    <h3>Промышленная лаборатория</h3>

                                    <p>Проводит анализы сточных вод, воздуха рабочей зоны,
                                    микроклимата в помещениях, уровня шума, уровня
                                    освещенности в помещениях</p>
                                    <p>Начальник лабораториии
                                    - Невротова Ирина Михайловна</p>
                                    <p>Тел. (+375-177) 72-30-62</p>
                                </div>
                            </div>

                            <div class="col-md-3 text-center">
                                <span class="icons c4 fa fa-shopping-cart" style=
                                "font-style: italic"></span>

                                <div class="box-area">
                                    <h3>Магазин «Крынiца»</h3>

                                    <p>22514 Минская область, Борисовский район,
                                     г. Борисов, ул. Нормандия – Неман, 161 А</p>
                                     <p>Директор магазина - Бернст Валентина Григорьевна</p>
                                     <p>Тел. (+375-177) 79-77-80</p>
                                     <br>
                                     <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		    <section class="container-fluid">
          <div class="container container-pad" id="property-listings">
            <div class="row">
	
	<!-- /.feature image -->
			<div class="col-md-6 feature-2-pic wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
				<img src="img/img1.jpg" alt="image" class="img-responsive">
			</div>	
			
			<!-- /.feature content -->
			<div class="col-md-6 wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
				<h2>Сотрудничество </h2>
				<p>ОАО «ЭКРАН» приглашает к сотрудничеству юридических лиц и индивидуальных предпринимателей на  условиях взаимовыгодной работы на рынке автотракторного электрооборудования и автомобильной электроники для грузовых автомобилей и автобусов.
                    <br>
                 Предприятиям, заинтересованным в долгосрочном сотрудничестве с ОАО «ЭКРАН», будет присвоен соответствующий статус и представлены соответствующие преференции.
                 <br>
                 Все вопросы по сотрудничеству будут урегулированы в процессе переговоров и подписания контрактов
				</p>

					<div class="btn-section"><a href="img\doc\Partners.pdf" class="btn-default">Подробнее</a></div>
		
			</div>
			 			  
		</div>
	   </div><!-- End container -->
    </section>
		
          <section class="testimonial-area">
            <div class="testimonial-solid">
                <div class="container">
                    <div class="testi-icon-area">
                        <div class="quote fa fa-microphone" style=
                        "font-style: italic"></div>
                    </div>

                    <div class="carousel slide" data-ride="carousel" id=
                    "carousel-example-generic">
                        <ol class="carousel-indicators">
                            <li class="" data-slide-to="0" data-target=
                            "#carousel-example-generic">
                                <a href="#"></a>
                            </li>

                            <li class="" data-slide-to="1" data-target=
                            "#carousel-example-generic">
                                <a href="#"></a>
                            </li>

                            <li class="active" data-slide-to="2" data-target=
                            "#carousel-example-generic">
                                <a href="#"></a>
                            </li>

                            <li class="" data-slide-to="3" data-target=
                            "#carousel-example-generic">
                                <a href="#"></a>
                            </li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item">
                                <p>Стремление стать лидером на рынке автомобильных
                                компонентов, используемых в автомобилестроении,
                                максимально выполняя требования потребителей
                                и других заинтересованных сторон.</p>

                                <p style="font-weight: bold">- ИФ ОАО "ЭКРАН" -</p>
                            </div>

                            <div class="item">
                                <p>Стремление к достижению устойчивого успеха,
                                укреплению имиджа стабильного и надежного
                                поставщика путем завоевания и сохранения доверия
                                и поддержки потребителей.</p>

                                <p style="font-weight: bold">- ИФ ОАО "ЭКРАН" -</p>
                            </div>

                            <div class="item active">
                                <p>Стремление к повышению конкурентоспособности 
                                продукции, укрепление позиций на существующих
                                рынках и продвижение продукции на мировые рынки.</p>

                                <p style="font-weight: bold">- ИФ ОАО "ЭКРАН -</p>
                            </div>

                            <div class="item">
                                <p>Стремление к достижению экономической устойчивости
                                и финансовой стабильности, получение и увеличение
                                прибыли, достаточной для устойчивого развития
                                организации в интересах персонала, собственников
                                и общества.</p>

                                <p style="font-weight: bold">- ИФ ОАО "ЭКРАН -</p>
                            </div>
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
              <input name="login" type="email" class="form-control" placeholder="Ваш логин">
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

    </div><a class="scrollup fa fa-angle-up active" href="#"></a> <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"> </script>
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