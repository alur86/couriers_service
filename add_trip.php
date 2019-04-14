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


    <script>
            $(document).ready(function() {
        
                $("#add_trip").submit(function(e) {
                    e.preventDefault();
                    $.ajax( {
                        url: "added_trip.php",
                        method: "post",
                        data: $("form").serialize(),
                        dataType: "text",
                        success: function(str) {
                            $("#region_id").text(str);
                            $("#courier_id").text(str);
                            $("#start_at").text(str);
                            $("#end_at").text(str);
                            $("#сomment").text(str);
                            $("#add_trip")[0].reset();
                        }
                    });
                });
            });
        </script>  
 <form action="" class="form" id="add_trip" name="add_trip" role="form" method="POST">
 
  <div class="form-group">
    <label for="region_id">Регион:</label>
  <select class="form-control" name="region_id" id="region_id">
  <?php

 $query_r = "SELECT * FROM regions";


  $result_r = mysqli_query($db, $query_r);

    while ($rowr = mysqli_fetch_assoc($result_r)) {
   
  echo "<option value='".$rowr['id']."'>".$rowr['region']." ".$rowr['region_code']."</option>";
  }

  mysqli_free_result($result_r);

  ?>
   
  </select>
  </div>
  <div class="form-group">
    <label for="start_at">Дата выезда из Москвы</label>
  <input type="text" class="form-control" id="start_at" name="start_at" required>
  
  </div>
  </div>
    <div class="form-group">
 <label for="courier_id">ФИО Курьера:</label>


  <select class="form-control" name="courier_id" id="courier_id" required>
  <?php

  $query_с = "SELECT * FROM couriers";

  $result_с = mysqli_query($db, $query_с);

    while ($rowc = mysqli_fetch_assoc($result_с)) { 
     
  echo "<option value='".$rowc['id']."'>".$rowc['first_name']." ".$rowc['middle_name']." ".$rowc['last_name']."</option>";
  }

  mysqli_free_result($result_с);

  ?>
    </select>
  </div>
  </div>
    <div class="form-group">
    <label for="first_name">Дата прибытия в регион:</label>
    <input type="text" class="form-control" id="end_at" name="end_at" required>
  </div>
  </div>
    <div class="form-group">
    <label for="comment">Комментарий:</label>
    <textarea class="form-control" id="comment" rows="3" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Добавить</button>
</form> 
  </div>  </div>
<?php

mysqli_close($db);
         
 ?>


      


<?php include("layout/footer.php");?> 