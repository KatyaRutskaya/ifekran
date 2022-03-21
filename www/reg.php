<?php 
session_start();
?>

<meta chatset="utf-8">
  <title> <?=$title?></title>
  <link rel="stylesheet" href="css/normalize.css"> 
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
    <link href="css/style.css" rel="stylesheet">
<style>
/* Demo Background */
body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background:url(/img/bgreg.jpg)
}

/* Form Style */
.msg {
    border: 2px solid #ffa908; 
    border-radius: 3px;
    padding: 10px;
    text-align: center;
    font-weight: bold;
}

.form-horizontal{
 background: #fff;
 padding-bottom: 40px;
 border-radius: 15px;
 text-align: center;
}
.form-horizontal .heading{
 display: block;
 font-size: 35px;
 font-weight: 700;
 padding: 35px 0;
 border-bottom: 1px solid #f0f0f0;
 margin-bottom: 30px;
}
.form-horizontal .form-group{
 padding: 0 40px;
 margin: 0 0 25px 0;
 position: relative;
}
.form-horizontal .form-control{
 background: #f0f0f0;
 border: none;
 border-radius: 20px;
 box-shadow: none;
 padding: 0 20px 0 45px;
 height: 40px;
 transition: all 0.3s ease 0s;
}
.form-horizontal .form-control:focus{
 background: #e0e0e0;
 box-shadow: none;
 outline: 0 none;
}
.form-horizontal .form-group i{
 position: absolute;
 top: 12px;
 left: 60px;
 font-size: 17px;
 color: #c8c8c8;
 transition : all 0.5s ease 0s;
}
.form-horizontal .form-control:focus + i{
 color: #00b4ef;
}

.form-horizontal .text{
 float: left;
 margin-left: 7px;
 line-height: 20px;
 padding-top: 5px;
 text-transform: capitalize;
}
.form-horizontal .btn{
 float: right;
 font-size: 14px;
 color: #fff;
 background: #00b4ef;
 border-radius: 30px;
 padding: 10px 25px;
 border: none;
 text-transform: capitalize;
 transition: all 0.5s ease 0s;
}
@media only screen and (max-width: 479px){
 .form-horizontal .form-group{
 padding: 0 25px;
 }
 .form-horizontal .form-group i{
 left: 45px;
 }
 .form-horizontal .btn{
 padding: 10px 20px;
 }
}


</style>


<div class="container">

 <div class="row">

 <div class="col-md-offset-3 col-md-6">

 <form action="save_user.php" method="post" class="form-horizontal">

    <span class="heading">Регистрация</span>
<?php 
        $_SESSION = "";
        if(isset($_SESSION['message']))
        {
            echo '<p class="msg">'.$_SESSION['message'].'</p>';
        }
          
?>
    <div class="form-group">
        <input name="login" type="email" class="form-control" placeholder="E-mail">
        <i class="fa fa-user"></i>
    </div>
    <div class="form-group help">
        <input name="password" type="password" class="form-control" placeholder="Password">
        <i class="fa fa-lock"></i>
    </div>
    <div class="form-group">
        
        <button type="submit" name="submit" class="btn btn-default">Зарегистрироваться</button>
    </div>
    
</form>
</div>
</div><!-- /.row -->
</div><!-- /.container -->
