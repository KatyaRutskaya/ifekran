<?php

session_start();

require_once "reg/connect.php";

$id = $_GET["id"];


$var = mysql_fetch_assoc(mysql_query("SELECT * FROM `portfolio` WHERE`id` = $id"));



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
                       <a class="navbar-brand" href="index.php">
                        <img alt="logo" src="img/logo.png">
                       </a>

                    </div>
                    <div class="col-lg-9">
                      <h2><a class="pageTitle" href="admin.php" >Управление контентом</a></h2>
                    </div>

                   <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="logout.php" style="color: #ffffff; text-decoration: none;">Выход</a></li>
                        </ul>
                    </div>
                </div>
            </div>
          </header><!-- end header -->
          <div class="container">

             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <h3 class="mt-4 mb-3">Обновить доску почета</h3>

             <form action="save_portfolio.php" method="post" class="row g-3">
              <input type="hidden" value="<?php
                 echo $var["id"];
                 ?>" name="id">
               <div class="col-md-6">
                 <label for="var-title" class="form-label">Название переменной</label>
                 <input type="text" class="form-control" value=" <?php
                 echo $var["title"];
                 ?>" id="var-title"name="title">
               </div>
               
               <div class="col-md-6">
                <br>
                 <button type="submit" class="btn btn-primary">Сохранить</button>
               </div>
             </form>

<br>
<br>
<br>
<br>
<br>
          </div>

<?php require_once "blocks/footer.php"?>
    </div>
    <a class="scrollup fa fa-angle-up active" href="#"></a> <!-- javascript
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