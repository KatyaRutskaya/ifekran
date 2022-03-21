<!DOCTYPE html>

<head>
<meta chatset="utf-8">
  <title> Продукция</title>
  <link rel="stylesheet" href="/css/normalize.css"> 
    <link href="/css/style.min.css" rel="stylesheet">
    <link href="/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="/css/flexslider.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/ico.png" type="image/x-icon">
    <link href="/css/style.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="index.php"><img src="/img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="/index.php">Главная</a></li> 
                        <li><a href="/about.php">О нас</a></li>
                        <li><a href="/services.php">Сервис</a></li>
                        <li><a href="/portfolio.php">Портфолио</a></li>
                        <li class="active"><a href="/pricing.php">Продукция</a></li>
                        <li><a href="/contact.php">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>

<table class="table">

   <thead>
    <tr>
      <th>№</th>
      <th>Наименование</th>
      <th>Шифр</th>
      <th>Номер</th>
    </tr>
  </thead> 
<?php
mysql_connect("localhost", "ekran", "1234"); // логин, пароль
mysql_select_db("ekran"); // имя бызы // Подключает файл с логином/паролем и именем БД // Подключает файл с логином/паролем и именем БД
mysql_set_charset('utf8'); // Устанавливает кодировку клиента
$sql_select = "SELECT * FROM  `автоэлектроника для уралаз`LIMIT 0 , 30"; // Выбираем таблицу из которой читать данные
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result); // Разбираем полученый массив 


do
{

  echo (" 
    <tdody>
    
    <tr>
      <th>".$row['id']."</th>
      
      <td>".$row['name']."</td>
    
      <td>".$row['shifr']."</td>
    
      <td>".$row['number']."</td>
    </tr>

    </tbody>
  
");
}
while($row = mysql_fetch_array($result));
echo mysql_error()."<br>"; 
  echo $sql; 
  mysql_close(); // Запрос к БД
   
?>

</table>

</div>

 </div>

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
</div>


<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/jquery.fancybox-media.js"></script> 
<script src="/js/portfolio/jquery.quicksand.js"></script>
<script src="/js/portfolio/setting.js"></script>
<script src="/js/jquery.flexslider.js"></script>
<script src="/js/animate.js"></script>
<script src="/js/custom.js"></script>
</body>

</html>