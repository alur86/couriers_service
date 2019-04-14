<?php include("layout/header.php");?>

<div class="container">
<body class="text-center">


    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4"></h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Курьерская Служба - главная</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Регистрация курьера</p>

    <form action="register.php" method="post">
      <div class="form-group has-feedback">
        <input type="login" name="login"  id="login" class="form-control" placeholder="Логин"  required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Пароль"  required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Подтвердите пароль"  required >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        <input type="email" name="email" name="email" class="form-control" placeholder="Email"  required >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Телефон"  required >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

       <div class="form-group has-feedback">
        <input type="first_name" name="first_name" id="first_name" class="form-control" placeholder="Имя"  required >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

       <div class="form-group has-feedback">
        <input type="middle_name" name="middle_name" id="middle_name" class="form-control" placeholder="Отчество"  required >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

       <div class="form-group has-feedback">
        <input type="last_name" name="last_name" id="last_name" class="form-control" placeholder="Фамилия"  required >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
       
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Регистрация</button>
        </div>
    
      </div>
    </form>

 

  </div>

</div>
<?php include("layout/footer.php");?>