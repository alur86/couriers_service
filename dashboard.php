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
            <th>Дата отъезда</th>
             <th>Курьер</th>
            <th>Дата ожидаемого возвращения</th>
             <th>Добавить новую поездку</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php

           
           $query = "SELECT * FROM couriers RIGHT JOIN schedules ON
schedules.courier_id = couriers.id LEFT JOIN regions ON
regions.id = schedules.region_id where couriers.on_way = 1  ORDER BY schedules.start_at DESC ";

   $result = mysqli_query($db, $query);

    while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";

            echo"<td>".$row["region"]."</td>";
            echo"<td>".$row["start_at"]."</td>";
            echo"<td>".$row["first_name"]." ".$row["middle_name"]." ".$row["last_name"]."</td>";
             echo"<td>".date('Y-m-d', strtotime($row["start_at"]. '+'.$row["way_duration"].'days'))."</td>";
              echo"<td><a href='add_trip.php'>Добавить поездку</a></td>";
              echo "</tr>";

               }

    
         mysqli_free_result($result);

         mysqli_close($db);
         

         ?>


          </tr>

        </tbody>
      </table>





<?php include("layout/footer.php");?> 