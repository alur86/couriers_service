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
           
            <th>Регион</th>
            <th>Код Региона</th>
            <th>Дата начала поездки</th>
            <th>Дата окончания поездки</th>
            <th>Заметки</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php 

        $query = "SELECT * FROM regions RIGHT JOIN schedules ON
           regions.id = schedules.region_id ";



           $result = mysqli_query($db, $query);

            while ($row = mysqli_fetch_assoc($result)) {
    
             echo "<tr>";
            echo"<td>".$row["region"]."</td>";
            echo"<td>".$row["region_code"]."</td>";
            echo"<td>".$row["start_at"]."</td>";
            echo"<td>".$row["end_at"]."</td>";
            echo"<td>".$row["comment"]."</td>";
             echo "</tr>";
                  
               }

    
         mysqli_free_result($result);

         mysqli_close($db);
         

         ?>


          </tr>

        </tbody>
      </table>





<?php include("layout/footer.php");?> 