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
      <tr>
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
 <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Логин</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Фамилия</th>
            <th>Email</th>
            <th>Телефон</th>
          </tr>
        </thead>
        <tbody>
          
          <?php 
 
           $query = "SELECT * FROM couriers ORDER by created_at"; 

           $result = mysqli_query($db, $query);

            while ($row = mysqli_fetch_assoc($result)) {
    
                   echo "<tr>";
            echo"<td>".$row["id"]."</td>";
            echo"<td>".$row["login"]."</td>";
            echo"<td>".$row["first_name"]."</td>";
            echo"<td>".$row["middle_name"]."</td>";
            echo"<td>".$row["last_name"]."</td>";
            echo"<td>".$row["email"]."</td>";
            echo"<td>".$row["phone"]."</td>";
               echo "</tr>";    
               }

         
         mysqli_free_result($result);

         mysqli_close($db);
         

         ?>



        </tbody>
      </table>





<?php include("layout/footer.php");?> 