<?php
session_start();
if(!isset($_SESSION["auth_user"])){
 header("Location: index.php");
}

?>
<?php include("layout/header.php");?>
<?php include("db_connect.php");?>

<div class="container">
<body class="text-center">
  <table class="table">
    <thead class="thead-dark">
      
        <th><a href="dashboard.php">Главная</a></th>
        <th><a href="couriers.php">Курьеры</a></th>
        <th><a href="schedules.php">Расписание</a></th>
        <th><a href="profile.php?user=<?php echo $_SESSION['auth_user'];?>">Мой Профиль</a>
        <th><a href="logout.php">Выход</a></th>
  
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>

 
   <?php 

  $user=$_GET['user'];

  $query = "SELECT * FROM couriers WHERE login='$user'";


  $result = mysqli_query($db, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    
?>
 <form action="update_profile.php" class="form" role="form" method="POST">
  <input type="hidden" id="userID" name="userID" value="<?=$row['id'];?>">
  <div class="form-group">
    <label for="login">Логин:</label>
    <input type="text" class="form-control" id="login" value="<?=$row['login'];?>" name="login" required>
  </div>
  <div class="form-group">
    <label for="password">Пароль:</label>
    <input type="password" class="form-control" id="password" name="password"  required>
  </div>
  </div>
    <div class="form-group">
    <label for="confirm_password">Подтвердите Пароль:</label>
    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
  </div>
  </div>
    <div class="form-group">
    <label for="first_name">Имя:</label>
    <input type="text" class="form-control" id="first_name" name="first_name" value="<?=$row['first_name'];?>" required>
  </div>
  </div>
    <div class="form-group">
    <label for="middle_name">Отчетство:</label>
    <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?=$row['middle_name'];?>" required>
  </div>
  </div>
    <div class="form-group">
    <label for="last_name">Фамилия:</label>
    <input type="text" class="form-control" id="last_name" name="last_name" value="<?=$row['last_name'];?>" required>
  </div>
  </div>
    <div class="form-group">
    <label for="phone">Телефон:</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?=$row['phone'];?>" required>
  </div>
  </div>
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" name="email" value="<?=$row['email'];?>" required>
  </div>

   <div class="form-group">
  <label for="onway">Cтатус:</label>
  <select class="form-control" name="onway" id="onway">
    <option value="1">Да</option>
    <option value="0">Нет</option>
  </select>
</div> 
  </div>
  <button type="submit" class="btn btn-primary">Обновить</button>
</form> 
  </div>  </div>
<?php

       }

    
  mysqli_free_result($result);

mysqli_close($db);
         
 ?>


      


<?php include("layout/footer.php");?> 