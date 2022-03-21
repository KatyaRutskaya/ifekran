<?php
session_start();

// $products = mysql_query("SELECT * FROM `products`");

mysql_connect("localhost", "ekran", "1234"); // логин, пароль
mysql_select_db("ekran"); // имя бызы

?>
<!DOCTYPE html>

<head>
  <meta chatset="utf-8">
    <title> <?=$title?></title>
    <link rel="stylesheet" href="css/normalize.css"> 
      <link href="css/style.min.css" rel="stylesheet">
      <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
      <link href="css/flexslider.css" rel="stylesheet">
      <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
      <link href="css/style.css" rel="stylesheet">
      
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
                        <img alt="logo" src="/img/logo.png">
                       </a>

                    </div>
                    <div class="col-lg-9">
                      <h2 class="pageTitle" href="admin.php">Управление контентом</h2>
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

             <h3 class="mt-4 mb-3">Пользователи</h3>
            <table class="table table-striped">
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Логин</th>
                   <th scope="col">Пароль</th>
                   
                   <th scope="col"></th>
                 </tr>
               </thead>
               <tbody>
                 <?php 
                   $user = mysql_query("SELECT * FROM `users`");
                   while ($var = mysql_fetch_assoc($user)){
                     echo '<tr>
                   <th scope="row">' . $var["id"] . '</th>
                   <td>' . $var["login"] . '</td>
                   <td>' . $var["password"] . '</td>
                   
                   <td align="right">
                     <div class="btn-group">
                       <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Действие
                       </button>
                       <div class="dropdown-menu">
                         <a class="dropdown-item" href="update_users.php?id=' . $var["id"] . '">Изменить</a>
                         <a class="dropdown-item" href="delete_users.php?id=' . $var["id"] . '">Удалить</a>
                         
                         
                       </div>
                     </div>
                   </td>
                 </tr>';
                   }
                 ?>
                 
               </tbody>
             </table>
             <h3 class="mt-4 mb-3">Добавить пользователя</h3>

             <form action="add_users.php" method="post" class="row g-3">
               <div class="col-md-6">
                 <label for="var-title" class="form-label">Название переменной</label>
                 <input type="text" name="login" class="form-control" id="var-title" placeholder="Email">
               </div>
               <div class="col-md-12" id="text-form">
                <br>
                 <label for="text" class="form-label">Содержимое</label>
                 <input type="text" name="password" class="form-control" id="text" placeholder="Password"> 
               </div>
               <div class="col-md-6">
                <br>
                 <button type="submit" class="btn btn-primary">Добавить</button>
               </div>
             </form>





            <h3 class="mt-4 mb-3">Доска почета</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ФИО, Должность</th>
                  
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $portfolio = mysql_query("SELECT * FROM `portfolio`");
                  while ($var = mysql_fetch_assoc($portfolio)){
                    echo '<tr>
                  <th scope="row">' . $var["id"] . '</th>
                  <td>' . $var["title"] . '</td>
                  
                  <td align="right">
                    <div class="btn-group">
                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Действие
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="update_portfolio.php?id=' . $var["id"] . '">Изменить</a>
                        
                        
                        
                      </div>
                    </div>
                  </td>
                </tr>';
                  }
                ?>
                
              </tbody>
            </table>
            <hr>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  
                  <th scope="col">Изображение</th>
                  <th scope="col">Место нахождение изображения</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $img = mysql_query("SELECT * FROM `img`");
                  while ($var = mysql_fetch_assoc($img)){
                    echo '<tr>
                  <th scope="row">' . $var["id"] . '</th>
                  <td>' . $var["image"] . '</td>
                  <td>' . $var["title"] . '</td>
                  
                  <td align="right">
                    <div class="btn-group">
                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Действие
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="update_img.php?id=' . $var["id"] . '">Изменить</a>
                                    
                                    
                                    
                                  </div>
                                </div>
                  </td>
                </tr>';
                  }
                ?>
                
              </tbody>
            </table>
            <hr>
            <h3 class="mt-4 mb-3">Продукция</h3>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Название</th>
                              
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $products = mysql_query("SELECT * FROM `products`");
                              while ($var = mysql_fetch_assoc($products)){
                                echo '<tr>
                              <th scope="row">' . $var["id"] . '</th>
                              <td>' . $var["name"] . '</td>
                              
                              <td align="right">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Действие
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="update_products.php?id=' . $var["id"] . '">Изменить</a>
                                    
                                    
                                    
                                  </div>
                                </div>
                              </td>
                            </tr>';
                              }
                            ?>
                            
                          </tbody>
                        </table>
                        <hr>

                        <h4 class="mt-4 mb-3">Автоэлектроника для белкоммунмаш</h4>
                       <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Название</th>
                              <th scope="col">id_Категория</th>
                              <th scope="col">id_Бренд</th>
                              <th scope="col">Цена</th>
                              <th scope="col">Шифр</th>
                              <th scope="col">Фото</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $auto = mysql_query("SELECT * FROM `goods`");
                              while ($var = mysql_fetch_assoc($auto)){
                                echo '<tr>
                              <th scope="row">' . $var["id"] . '</th>
                              <td>' . $var["good"] . '</td>
                              <td>' . $var["category_id"] . '</td>
                              <td>' . $var["brand_id"] . '</td>
                              <td>' . $var["price"] . '</td>
                              <td>' . $var["rating"] . '</td>
                              <td>' . $var["photo"] . '</td>
                              <td align="right">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Действие
                                  </button>
                                  <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item" href="delete_t1.php?id=' . $var["id"] . '">Удалить</a>
                                    
                                    
                                  </div>
                                </div>
                              </td>
                            </tr>';
                              }
                            ?>
                            
                          </tbody>
                        </table>

            <h3 class="mt-4 mb-3">Добавить переменную</h3>

            <form action="add_t1.php" method="post" class="row g-3">
              <div class="col-md-6">
                <label for="var-title" class="form-label">Название переменной</label>
                <input type="text" name="good" class="form-control" id="var-title" placeholder="Название">
              </div>
              <div class="col-md-12" id="text-form">
                <br>
                <label for="text" class="form-label">Содержимое</label>
                <input type="text" name="category_id" class="form-control" id="text" placeholder="id_Категория">
                <br>
                <input type="text" name="brand_id" class="form-control" id="text" placeholder="id_Бренд">
                <br>
                <input type="text" name="price" class="form-control" id="text" placeholder="Цена">
                <br>
                <input type="text" name="rating" class="form-control" id="text" placeholder="Шифр">
                <br>
                <input type="text" name="photo" class="form-control" id="text" placeholder="Фото">
              </div>
              <div class="col-md-6">
                <br>
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </form>
            <hr>

                        <h4 class="mt-4 mb-3">Автоэлектроника для гомсельмаш</h4>
                       <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Название</th>
                              <th scope="col">id_Категория</th>
                              <th scope="col">id_Бренд</th>
                              <th scope="col">Цена</th>
                              <th scope="col">Шифр</th>
                              <th scope="col">Фото</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $auto = mysql_query("SELECT * FROM `goods2`");
                              while ($var = mysql_fetch_assoc($auto)){
                                echo '<tr>
                              <th scope="row">' . $var["id"] . '</th>
                              <td>' . $var["good"] . '</td>
                              <td>' . $var["category_id"] . '</td>
                              <td>' . $var["brand_id"] . '</td>
                              <td>' . $var["price"] . '</td>
                              <td>' . $var["rating"] . '</td>
                              <td>' . $var["photo"] . '</td>
                              <td align="right">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Действие
                                  </button>
                                  <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item" href="delete_t2.php?id=' . $var["id"] . '">Удалить</a>
                                    
                                    
                                  </div>
                                </div>
                              </td>
                            </tr>';
                              }
                            ?>
                            
                          </tbody>
                        </table>

            <h3 class="mt-4 mb-3">Добавить переменную</h3>

            <form action="add_t2.php" method="post" class="row g-3">
              <div class="col-md-6">
                <label for="var-title" class="form-label">Название переменной</label>
                <input type="text" name="name" class="form-control" id="var-title" placeholder="Название">
              </div>
              <div class="col-md-12" id="text-form">
                <br>
                <label for="text" class="form-label">Содержимое</label>
                <input type="text" name="category_id" class="form-control" id="text" placeholder="id_Категория">
                <br>
                <input type="text" name="brand_id" class="form-control" id="text" placeholder="id_Бренд">
                <br>
                <input type="text" name="price" class="form-control" id="text" placeholder="Цена">
                <br>
                <input type="text" name="rating" class="form-control" id="text" placeholder="Шифр">
                <br>
                <input type="text" name="photo" class="form-control" id="text" placeholder="Фото">
              </div>
              <div class="col-md-6">
                <br>
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </form>
            <hr>

<h4 class="mt-4 mb-3">Автоэлектроника для камаз</h4>
                       <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Название</th>
                              <th scope="col">id_Категория</th>
                              <th scope="col">id_Бренд</th>
                              <th scope="col">Цена</th>
                              <th scope="col">Шифр</th>
                              <th scope="col">Фото</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $auto = mysql_query("SELECT * FROM `goods3`");
                              while ($var = mysql_fetch_assoc($auto)){
                                echo '<tr>
                              <th scope="row">' . $var["id"] . '</th>
                              <td>' . $var["good"] . '</td>
                              <td>' . $var["category_id"] . '</td>
                              <td>' . $var["brand_id"] . '</td>
                              <td>' . $var["price"] . '</td>
                              <td>' . $var["rating"] . '</td>
                              <td>' . $var["photo"] . '</td>
                              <td align="right">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Действие
                                  </button>
                                  <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item" href="delete_t3.php?id=' . $var["id"] . '">Удалить</a>
                                    
                                    
                                  </div>
                                </div>
                              </td>
                            </tr>';
                              }
                            ?>
                            
                          </tbody>
                        </table>

            <h3 class="mt-4 mb-3">Добавить переменную</h3>

            <form action="add_t3.php" method="post" class="row g-3">
              <div class="col-md-6">
                <label for="var-title" class="form-label">Название переменной</label>
                <input type="text" name="name" class="form-control" id="var-title" placeholder="Название">
              </div>
              <div class="col-md-12" id="text-form">
                <br>
                <label for="text" class="form-label">Содержимое</label>
                <input type="text" name="category_id" class="form-control" id="text" placeholder="id_Категория">
                <br>
                <input type="text" name="brand_id" class="form-control" id="text" placeholder="id_Бренд">
                <br>
                <input type="text" name="price" class="form-control" id="text" placeholder="Цена">
                <br>
                <input type="text" name="rating" class="form-control" id="text" placeholder="Шифр">
                <br>
                <input type="text" name="photo" class="form-control" id="text" placeholder="Фото">
              </div>
              <div class="col-md-6">
                <br>
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </form>
            <hr>


<h4 class="mt-4 mb-3">Автоэлектроника для краз</h4>
                       <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Название</th>
                              <th scope="col">id_Категория</th>
                              <th scope="col">id_Бренд</th>
                              <th scope="col">Цена</th>
                              <th scope="col">Шифр</th>
                              <th scope="col">Фото</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $auto = mysql_query("SELECT * FROM `goods4`");
                              while ($var = mysql_fetch_assoc($auto)){
                                echo '<tr>
                              <th scope="row">' . $var["id"] . '</th>
                              <td>' . $var["good"] . '</td>
                              <td>' . $var["category_id"] . '</td>
                              <td>' . $var["brand_id"] . '</td>
                              <td>' . $var["price"] . '</td>
                              <td>' . $var["rating"] . '</td>
                              <td>' . $var["photo"] . '</td>
                              <td align="right">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Действие
                                  </button>
                                  <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item" href="delete_t4.php?id=' . $var["id"] . '">Удалить</a>
                                    
                                    
                                  </div>
                                </div>
                              </td>
                            </tr>';
                              }
                            ?>
                            
                          </tbody>
                        </table>

            <h3 class="mt-4 mb-3">Добавить переменную</h3>

            <form action="add_t4.php" method="post" class="row g-3">
              <div class="col-md-6">
                <label for="var-title" class="form-label">Название переменной</label>
                <input type="text" name="name" class="form-control" id="var-title" placeholder="Название">
              </div>
              <div class="col-md-12" id="text-form">
                <br>
                <label for="text" class="form-label">Содержимое</label>
                <input type="text" name="category_id" class="form-control" id="text" placeholder="id_Категория">
                <br>
                <input type="text" name="brand_id" class="form-control" id="text" placeholder="id_Бренд">
                <br>
                <input type="text" name="price" class="form-control" id="text" placeholder="Цена">
                <br>
                <input type="text" name="rating" class="form-control" id="text" placeholder="Шифр">
                <br>
                <input type="text" name="photo" class="form-control" id="text" placeholder="Фото">
              </div>
              <div class="col-md-6">
                <br>
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </form>
            <hr>


                        <h4 class="mt-4 mb-3">Автоэлектроника для маз</h4>
                       <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Название</th>
                              <th scope="col">id_Категория</th>
                              <th scope="col">id_Бренд</th>
                              <th scope="col">Цена</th>
                              <th scope="col">Шифр</th>
                              <th scope="col">Фото</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $auto = mysql_query("SELECT * FROM `goods5`");
                              while ($var = mysql_fetch_assoc($auto)){
                                echo '<tr>
                              <th scope="row">' . $var["id"] . '</th>
                              <td>' . $var["good"] . '</td>
                              <td>' . $var["category_id"] . '</td>
                              <td>' . $var["brand_id"] . '</td>
                              <td>' . $var["price"] . '</td>
                              <td>' . $var["rating"] . '</td>
                              <td>' . $var["photo"] . '</td>
                              <td align="right">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Действие
                                  </button>
                                  <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item" href="delete_t5.php?id=' . $var["id"] . '">Удалить</a>
                                    
                                    
                                  </div>
                                </div>
                              </td>
                            </tr>';
                              }
                            ?>
                            
                          </tbody>
                        </table>

            <h3 class="mt-4 mb-3">Добавить переменную</h3>

            <form action="add_t5.php" method="post" class="row g-3">
              <div class="col-md-6">
                <label for="var-title" class="form-label">Название переменной</label>
                <input type="text" name="name" class="form-control" id="var-title" placeholder="Название">
              </div>
              <div class="col-md-12" id="text-form">
                <br>
                <label for="text" class="form-label">Содержимое</label>
                <input type="text" name="category_id" class="form-control" id="text" placeholder="id_Категория">
                <br>
                <input type="text" name="brand_id" class="form-control" id="text" placeholder="id_Бренд">
                <br>
                <input type="text" name="price" class="form-control" id="text" placeholder="Цена">
                <br>
                <input type="text" name="rating" class="form-control" id="text" placeholder="Шифр">
                <br>
                <input type="text" name="photo" class="form-control" id="text" placeholder="Фото">
              </div>
              <div class="col-md-6">
                <br>
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </form>
            <hr>


                        <h4 class="mt-4 mb-3">Автоэлектроника для ммз</h4>
                       <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Название</th>
                              <th scope="col">id_Категория</th>
                              <th scope="col">id_Бренд</th>
                              <th scope="col">Цена</th>
                              <th scope="col">Шифр</th>
                              <th scope="col">Фото</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $auto = mysql_query("SELECT * FROM `goods6`");
                              while ($var = mysql_fetch_assoc($auto)){
                                echo '<tr>
                              <th scope="row">' . $var["id"] . '</th>
                              <td>' . $var["good"] . '</td>
                              <td>' . $var["category_id"] . '</td>
                              <td>' . $var["brand_id"] . '</td>
                              <td>' . $var["price"] . '</td>
                              <td>' . $var["rating"] . '</td>
                              <td>' . $var["photo"] . '</td>
                              <td align="right">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Действие
                                  </button>
                                  <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item" href="delete_t6.php?id=' . $var["id"] . '">Удалить</a>
                                    
                                    
                                  </div>
                                </div>
                              </td>
                            </tr>';
                              }
                            ?>
                            
                          </tbody>
                        </table>

            <h3 class="mt-4 mb-3">Добавить переменную</h3>

            <form action="add_t6.php" method="post" class="row g-3">
              <div class="col-md-6">
                <label for="var-title" class="form-label">Название переменной</label>
                <input type="text" name="name" class="form-control" id="var-title" placeholder="Название">
              </div>
              <div class="col-md-12" id="text-form">
                <br>
                <label for="text" class="form-label">Содержимое</label>
                <input type="text" name="category_id" class="form-control" id="text" placeholder="id_Категория">
                <br>
                <input type="text" name="brand_id" class="form-control" id="text" placeholder="id_Бренд">
                <br>
                <input type="text" name="price" class="form-control" id="text" placeholder="Цена">
                <br>
                <input type="text" name="rating" class="form-control" id="text" placeholder="Шифр">
                <br>
                <input type="text" name="photo" class="form-control" id="text" placeholder="Фото">
              </div>
              <div class="col-md-6">
                <br>
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </form>
            <hr>


                        <h4 class="mt-4 mb-3">Автоэлектроника для мтз</h4>
                       <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Название</th>
                              <th scope="col">id_Категория</th>
                              <th scope="col">id_Бренд</th>
                              <th scope="col">Цена</th>
                              <th scope="col">Шифр</th>
                              <th scope="col">Фото</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $auto = mysql_query("SELECT * FROM `goods7`");
                              while ($var = mysql_fetch_assoc($auto)){
                                echo '<tr>
                              <th scope="row">' . $var["id"] . '</th>
                              <td>' . $var["good"] . '</td>
                              <td>' . $var["category_id"] . '</td>
                              <td>' . $var["brand_id"] . '</td>
                              <td>' . $var["price"] . '</td>
                              <td>' . $var["rating"] . '</td>
                              <td>' . $var["photo"] . '</td>
                              <td align="right">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Действие
                                  </button>
                                  <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item" href="delete_t7.php?id=' . $var["id"] . '">Удалить</a>
                                    
                                    
                                  </div>
                                </div>
                              </td>
                            </tr>';
                              }
                            ?>
                            
                          </tbody>
                        </table>

            <h3 class="mt-4 mb-3">Добавить переменную</h3>

            <form action="add_t7.php" method="post" class="row g-3">
              <div class="col-md-6">
                <label for="var-title" class="form-label">Название переменной</label>
                <input type="text" name="name" class="form-control" id="var-title" placeholder="Название">
              </div>
              <div class="col-md-12" id="text-form">
                <br>
                <label for="text" class="form-label">Содержимое</label>
                <input type="text" name="category_id" class="form-control" id="text" placeholder="id_Категория">
                <br>
                <input type="text" name="brand_id" class="form-control" id="text" placeholder="id_Бренд">
                <br>
                <input type="text" name="price" class="form-control" id="text" placeholder="Цена">
                <br>
                <input type="text" name="rating" class="form-control" id="text" placeholder="Шифр">
                <br>
                <input type="text" name="photo" class="form-control" id="text" placeholder="Фото">
              </div>
              <div class="col-md-6">
                <br>
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </form>
            <hr>
            <hr>


                        <h4 class="mt-4 mb-3">Автоэлектроника для неман</h4>
                       <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Название</th>
                              <th scope="col">id_Категория</th>
                              <th scope="col">id_Бренд</th>
                              <th scope="col">Цена</th>
                              <th scope="col">Шифр</th>
                              <th scope="col">Фото</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $auto = mysql_query("SELECT * FROM `goods8`");
                              while ($var = mysql_fetch_assoc($auto)){
                                echo '<tr>
                              <th scope="row">' . $var["id"] . '</th>
                              <td>' . $var["good"] . '</td>
                              <td>' . $var["category_id"] . '</td>
                              <td>' . $var["brand_id"] . '</td>
                              <td>' . $var["price"] . '</td>
                              <td>' . $var["rating"] . '</td>
                              <td>' . $var["photo"] . '</td>
                              <td align="right">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Действие
                                  </button>
                                  <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item" href="delete_t8.php?id=' . $var["id"] . '">Удалить</a>
                                    
                                    
                                  </div>
                                </div>
                              </td>
                            </tr>';
                              }
                            ?>
                            
                          </tbody>
                        </table>

            <h3 class="mt-4 mb-3">Добавить переменную</h3>

            <form action="add_t8.php" method="post" class="row g-3">
              <div class="col-md-6">
                <label for="var-title" class="form-label">Название переменной</label>
                <input type="text" name="name" class="form-control" id="var-title" placeholder="Название">
              </div>
              <div class="col-md-12" id="text-form">
                <br>
                <label for="text" class="form-label">Содержимое</label>
                <input type="text" name="category_id" class="form-control" id="text" placeholder="id_Категория">
                <br>
                <input type="text" name="brand_id" class="form-control" id="text" placeholder="id_Бренд">
                <br>
                <input type="text" name="price" class="form-control" id="text" placeholder="Цена">
                <br>
                <input type="text" name="rating" class="form-control" id="text" placeholder="Шифр">
                <br>
                <input type="text" name="photo" class="form-control" id="text" placeholder="Фото">
              </div>
              <div class="col-md-6">
                <br>
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </form>
            <hr>


                        <h4 class="mt-4 mb-3">Автоэлектроника для паз</h4>
                       <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Название</th>
                              <th scope="col">id_Категория</th>
                              <th scope="col">id_Бренд</th>
                              <th scope="col">Цена</th>
                              <th scope="col">Шифр</th>
                              <th scope="col">Фото</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $auto = mysql_query("SELECT * FROM `goods9`");
                              while ($var = mysql_fetch_assoc($auto)){
                                echo '<tr>
                              <th scope="row">' . $var["id"] . '</th>
                              <td>' . $var["good"] . '</td>
                              <td>' . $var["category_id"] . '</td>
                              <td>' . $var["brand_id"] . '</td>
                              <td>' . $var["price"] . '</td>
                              <td>' . $var["rating"] . '</td>
                              <td>' . $var["photo"] . '</td>
                              <td align="right">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Действие
                                  </button>
                                  <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item" href="delete_t9.php?id=' . $var["id"] . '">Удалить</a>
                                    
                                    
                                  </div>
                                </div>
                              </td>
                            </tr>';
                              }
                            ?>
                            
                          </tbody>
                        </table>

            <h3 class="mt-4 mb-3">Добавить переменную</h3>

            <form action="add_t9.php" method="post" class="row g-3">
              <div class="col-md-6">
                <label for="var-title" class="form-label">Название переменной</label>
                <input type="text" name="name" class="form-control" id="var-title" placeholder="Название">
              </div>
              <div class="col-md-12" id="text-form">
                <br>
                <label for="text" class="form-label">Содержимое</label>
                <input type="text" name="category_id" class="form-control" id="text" placeholder="id_Категория">
                <br>
                <input type="text" name="brand_id" class="form-control" id="text" placeholder="id_Бренд">
                <br>
                <input type="text" name="price" class="form-control" id="text" placeholder="Цена">
                <br>
                <input type="text" name="rating" class="form-control" id="text" placeholder="Шифр">
                <br>
                <input type="text" name="photo" class="form-control" id="text" placeholder="Фото">
              </div>
              <div class="col-md-6">
                <br>
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </form>
            <hr>


                        <h4 class="mt-4 mb-3">Автоэлектроника для уралаз</h4>
                       <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Название</th>
                              <th scope="col">id_Категория</th>
                              <th scope="col">id_Бренд</th>
                              <th scope="col">Цена</th>
                              <th scope="col">Шифр</th>
                              <th scope="col">Фото</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $auto = mysql_query("SELECT * FROM `goods10`");
                              while ($var = mysql_fetch_assoc($auto)){
                                echo '<tr>
                              <th scope="row">' . $var["id"] . '</th>
                              <td>' . $var["good"] . '</td>
                              <td>' . $var["category_id"] . '</td>
                              <td>' . $var["brand_id"] . '</td>
                              <td>' . $var["price"] . '</td>
                              <td>' . $var["rating"] . '</td>
                              <td>' . $var["photo"] . '</td>
                              <td align="right">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Действие
                                  </button>
                                  <div class="dropdown-menu">
                                    
                                    <a class="dropdown-item" href="delete_t10.php?id=' . $var["id"] . '">Удалить</a>
                                    
                                    
                                  </div>
                                </div>
                              </td>
                            </tr>';
                              }
                            ?>
                            
                          </tbody>
                        </table>

            <h3 class="mt-4 mb-3">Добавить переменную</h3>

            <form action="add_t10.php" method="post" class="row g-3">
              <div class="col-md-6">
                <label for="var-title" class="form-label">Название переменной</label>
                <input type="text" name="name" class="form-control" id="var-title" placeholder="Название">
              </div>
              <div class="col-md-12" id="text-form">
                <br>
                <label for="text" class="form-label">Содержимое</label>
                <input type="text" name="category_id" class="form-control" id="text" placeholder="id_Категория">
                <br>
                <input type="text" name="brand_id" class="form-control" id="text" placeholder="id_Бренд">
                <br>
                <input type="text" name="price" class="form-control" id="text" placeholder="Цена">
                <br>
                <input type="text" name="rating" class="form-control" id="text" placeholder="Шифр">
                <br>
                <input type="text" name="photo" class="form-control" id="text" placeholder="Фото">
              </div>
              <div class="col-md-6">
                <br>
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </form>


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