<?php 

include_once("db_connect.php");
 

 $region_id = mysqli_real_escape_string($db, $_POST['region_id']);
 $courier_id = mysqli_real_escape_string($db, $_POST['courier_id']);
 $comment = mysqli_real_escape_string($db, $_POST['comment']);
 $start_at = mysqli_real_escape_string($db, $_POST['start_at']);
 $end_at= mysqli_real_escape_string($db, $_POST['end_at']);
 $curr_date = date("Y-m-d H:i:s");
 $on_way= 1;


$query_r = "SELECT * FROM regions where region_id='$region_id'";


$result_r = mysqli_query($db, $query_r);

 while ($rowr = mysqli_fetch_assoc($result_r)) {
   
$way_duration=$rowr['way_duration'];

  }

$endat=date('Y-m-d', $curr_date '+'.$way_duration.'days')).

$insert_sql_s = "INSERT INTO schedules(courier_id,region_id, comment, start_at, end_at, created_at) VALUES('$courier_id','$region_id', '$comment', '$start_at', '$endat', '$curr_date')";

 $insert_result_s = mysqli_query($db, $insert_sql_s);

 echo  $insert_result_s;

$update_sql_c = "UPDATE couriers SET  on_way='$on_way', updated_at='$curr_date' WHERE id='$courier_id'";


 $updated_result_c = mysqli_query($db, $update_sql_c);


echo $update_sql_c;

 echo "<HTML><HEAD><META HTTP-EQUIV='Refresh' CONTENT='5; URL=dashboard.php'>
</HEAD></HTML>"; 


}