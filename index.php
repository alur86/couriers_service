<?php include("layout/header.php");?>

<div class="container">
<body class="text-center">


    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4"></h2>
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Курьерская служба</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="login" action="login.php" method="post">
                                <div class="form-group">
                                    <label for="login">Логин</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="login" name="login" id="login" required="">
                                    <div class="invalid-feedback">Введите логин</div>
                                </div>
                                <div class="form-group">
                                    <label>Пароль</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="password" name="password"  required="" autocomplete="new-password">
                                    <div class="invalid-feedback">Введите пароль</div>
                                </div>
                            
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Вход</button>
                            </form>
                        </div>
   <div class="form-group text-center">
                                 <a href="registration.php">Регистрация</a>
                                  </div>

<?php include("layout/footer.php");?>