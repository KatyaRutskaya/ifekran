<!-- ?php 
require_once "reg/connect.php";
$products = mysql_query("SELECT * FROM `products`");



while ($var = mysql_fetch_assoc($products)) {
  $vars[$var["id"]] = $var["name"];
}

?> -->
<!DOCTYPE html>
<html>
<head>
<title>Автоэлектроника для КамАЗ</title>

<!-- <link href="css/bootstrap.css" rel='stylesheet' > -->
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="components/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">

<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/styles.css" rel="stylesheet" >
<link rel="stylesheet" href="/css/normalize.css"> 
<link href="/css/style.min.css" rel="stylesheet">
<link href="/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="/css/flexslider.css" rel="stylesheet">
<link rel="shortcut icon" href="/img/ico.png" type="image/x-icon">
<link href="/css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>

	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="index.php">
                  	<img src="/img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="/index.php">Главная</a></li> 
                        <li><a href="/about.php">О нас</a></li>
                        <li><a href="/services.php">Сервис</a></li>
                        <li><a href="/portfolio.php">Сотрудники</a></li>
                        <li class="active"><a href="/pricing.php">Продукция</a></li>
                        <li><a href="/contact.php">Контакты</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter" >Войти</li></a>
                        <li><a href="cart.html">
                            <span class="icons c5 fa fa-shopping-cart" style="font-size: 24px"></span>
                            <span id="total-cart-count" class="badge"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<section id="inner-headline" class="bg-img">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Автоэлектроника для КамАЗ</h2>
			</div>
		</div>
	</div>
	</section>

	<body data-page="catalogDB3">
	    <div class="container">
	        <br />
	        <div id="filters" class="col-md-12">
	            <div class="btn-group">
	                <button type="button" data-category="0" class="btn btn-default active js-category">Все категории</button>
	                <button type="button" data-category="1" class="btn btn-default js-category">Выключатель</button>
	                <button type="button" data-category="2" class="btn btn-default js-category">Датчик</button>
	                <!-- <button type="button" data-category="3" class="btn btn-default js-category">Сигнализатор</button> -->
                    <!-- <button type="button" data-category="4" class="btn btn-default js-category">Кабель</button> -->
                    <button type="button" data-category="5" class="btn btn-default js-category">Блок управления</button>
                    <button type="button" data-category="6" class="btn btn-default js-category">Модулятор</button>
                    <!-- <button type="button" data-category="7" class="btn btn-default js-category">Прерыватель</button> -->
                    <button type="button" data-category="8" class="btn btn-default js-category">Клапан</button>
                    <button type="button" data-category="9" class="btn btn-default js-category">Сетка</button>
                    <!-- <button type="button" data-category="10" class="btn btn-default js-category">Стеклоотмыватель</button> -->
                    <button type="button" data-category="11" class="btn btn-default js-category">Штуцер</button>
                    <button type="button" data-category="12" class="btn btn-default js-category">Пружина</button>
                    <button type="button" data-category="13" class="btn btn-default js-category">Бачок</button>
                    <button type="button" data-category="14" class="btn btn-default js-category">Манжета</button>
                    <!-- <button type="button" data-category="15" class="btn btn-default js-category">Распределитель</button> -->
                    <!-- <button type="button" data-category="16" class="btn btn-default js-category">Трубопровод</button>
                    <button type="button" data-category="17" class="btn btn-default js-category">Блок электромагнитных клапанов</button>
                    <button type="button" data-category="18" class="btn btn-default js-category">Жгут </button> -->
	            </div>
	            <br />
	            <br />
	            <form id="filters-form" role="form">
	                <div class="col-md-4">
	                    <h4>Фильтр по ценам</h4>
	                    <div id="prices-label">0 - 0 руб.</div>
	                    <br />
	                    <input type="hidden" id="min-price" name="min_price" value="5000">
	                    <input type="hidden" id="max-price" name="max_price" value="50000">
	                    <div id="prices"></div>
	                </div>
	                <div class="col-md-4">
	                    <h4>Сортировка</h4>
	                    <br />
	                    <select id="sort" name="sort" class="form-control">
	                        <option value="price_asc">По цене, сначала дешевые</option>
	                        <option value="price_desc">По цене, сначала дорогие</option>
	                        <option value="rating_desc">По популярности</option>
	                        <option value="good_asc">По названию, A-Z</option>
	                        <option value="good_desc">По названию, Z-A</option>
	                    </select>
                        <br />
	                </div>
	            </form>
	        </div>
	        <ul id="goods" class="col-md-12">
	            <img src="img/loading.gif" alt="" />
	        </ul>
	    </div>

	    <script id="goods-template" type="text/template">
	        <% _.each(goods, function(item) { %>
	        <li class="small-good-item row">
	            <div class="col-md-2">
	                <img class="small-good-item__img" src="img/goods/<%= item.photo %>" />
	            </div>
	            <div class="col-md-10">
	                <div class="small-good-item__id">Артикул <%= item.good_id %></div>
	                <div class="small-good-item__name"><%- item.good %> (Шифр: <%= item.rating %>)</div>
	                <div class="small-good-item__price"><%= item.price %> &#x24</div>
	                <button
	                    class="small-good-item__btn-add btn btn-info btn-sm js-add-to-cart"
	                    data-id="<%= item.good_id %>"
	                    data-name="<%- item.good %>"
	                    data-price="<%= item.price %>"
	                >Добавить в корзину</button>
	            </div>
	        </li>
	        <% }); %>
	    </script>

	    <script id="brands-template" type="text/template">
	        <% _.each(brands, function(item) { %>
	        <div class="checkbox"><label><input type="checkbox" name="brands[]" value="<%= item.id %>"> <%= item.brand %></label></div>
	        <% }); %>
	    </script>


<!---->
<footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">Контакты</h5>

                            <address>
                                <strong>ИФ ОАО "Экран"</strong><br>
                                Брестская область<br>
                                г.Ивацевичи, ул. Заводская,33<br>
                            </address>

                            <p><i class="icon-phone"></i> 
                                +375 (801645) 92288<br>
                                +375 (801645) 24156<br>
                            <i class="icon-envelope-alt"></i>
                            ifekran@rambler.ru</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            

                            <ul class="nelink-list">
                                <li>
                                    <a href="https://ivatsevichy.by/">
                                        <img class= "img-responsive" alt= "image" src="/img/b1.jpg">
                                        <br>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://minprom.gov.by/">
                                        <img class= "img-responsive" alt= "image" src="/img/b2.jpg">
                                        <br>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://pravo.by/">
                                        <img class= "img-responsive" alt= "image" src="/img/b3.jpg">

                                    </a>
                                </li>

                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            

                            <ul class="nelink-list">
                                <li>
                                    <a href="http://ivacevichi.brest-region.gov.by/index.php?option=com_content&view=category&layout=blog&id=755&Itemid=895&lang=ru">
                                        <img class= "img-responsive" alt= "image" src="/img/b4.jpg">
                                        <br>
                                    </a>
                                </li>

                                <li>
                                    <a href="http://brest-region.gov.by/index.php/glavnaya">
                                        <img class= "img-responsive" alt= "image" src="/img/b5.jpg">
                                        <br>
                                    </a>
                                </li>

                                <li>
                                    <a href="http://ivacevichi.brest-region.gov.by/index.php?option=com_content&view=article&id=47698%3A2018-04-09-09-50-43&catid=571%3A2011-02-08-07-56-25&Itemid=1860&lang=ru">
                                        <img class= "img-responsive" alt= "image" src="/img/b6.jpg">
                                        <br>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            

                            <ul class="nelink-list">
                                <li>
                                    <a href="http://ivacevichi.brest-region.gov.by/index.php?option=com_content&view=article&id=48079%3A2018-05-02-08-39-28&catid=571%3A2011-02-08-07-56-25&Itemid=1860&lang=ru">
                                        <img class= "img-responsive" alt= "image" src="/img/b7.jpg">
                                        <br>
                                    </a>
                                </li>

                                <li>
                                    <a href="http://ivc.by/index.php/ru/">
                                        <img class= "img-responsive" alt= "image" src="/img/b8.jpg">
                                        <br>
                                    </a>
                                </li>

                                <li>
                                    <a href="http://brest.bgs.by/integdom/">
                                        <img class= "img-responsive" alt= "image" src="/img/b9.jpg">
                                        <br>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p><span>Руцкая Е.Е. <?=date ('Y')?> | Все права защищены &copy; </span> <a href=
                                "http://webthemez.com"> ИФ ОАО "Экран" </a></p>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </footer>

        <script src="js/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor/jquery.cookie.js" type="text/javascript"></script>
        <script src="components/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/vendor/underscore.min.js" type="text/javascript"></script>
        <script src="js/modules/catalogDB3.js" type="text/javascript"></script>
        <script src="js/modules/cart.js" type="text/javascript"></script>
        <script src="js/modules/compare.js" type="text/javascript"></script>
        <script src="js/modules/main3.js" type="text/javascript"></script>

<script src="/js/jqueryy.min.js"></script>
<script src="/js/jquery.js"> </script>
    <script src="/js/jquery.easing.1.3.js"></script> 
    <script src="/js/bootstrap.min.js"></script> 
    <script src="/js/jquery.fancybox.pack.js"></script> 
    <script src="/js/jquery.fancybox-media.js"></script> 
    <script src="/js/portfolio/jquery.quicksand.js"></script> 
    <script src="/js/portfolio/setting.js"></script> 
    <script src="/js/jquery.flexslider.js"></script> 
    <script src="/js/animate.js"></script> 
    <script src="/js/custom.js"></script> 

<!---->
</body>
</html>
