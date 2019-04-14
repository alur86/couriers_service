 <?php 

include_once("db_connect.php");


 $login = mysqli_real_escape_string($db, $_POST['login']);
 $email = mysqli_real_escape_string($db, $_POST['email']);
 $password = md5(mysqli_real_escape_string($db, $_POST['password']));
 $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
 $middle_name = mysqli_real_escape_string($db, $_POST['middle_name']);
 $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
 $confirm_password = md5(mysqli_real_escape_string($db, $_POST['confirm_password']));
 $phone =  mysqli_real_escape_string($db, $_POST['phone']);
 $date_updated = date("Y-m-d H:i:s");
 $userID =  mysqli_real_escape_string($db, $_POST['userID']);
 $on_way=mysqli_real_escape_string($db, $_POST['onway']);



if ($_POST['password'] != $_POST['confirm_password']) {

echo "Поля пароль и подтверждение пароля не подходят";

echo "<HTML><HEAD><META HTTP-EQUIV='Refresh' CONTENT='5; URL=profile.php'>
</HEAD></HTML>";

}


if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {

echo "Поле email имеет неправильный формат";

echo "<HTML><HEAD><META HTTP-EQUIV='Refresh' CONTENT='5; URL=profile.php'>
</HEAD></HTML>"; 


}




else  {


$update_sql = "UPDATE couriers SET login ='$login',first_name='$first_name', middle_name='$middle_name', last_name='$last_name', on_way='$on_way', email='$email', phone='$phone', password='$password', updated_at='$date_updated' WHERE id='$userID'";


 $updated_result = mysqli_query($db, $update_sql);

 

 echo "<HTML><HEAD><META HTTP-EQUIV='Refresh' CONTENT='5; URL=dashboard.php'>
</HEAD></HTML>"; 


}