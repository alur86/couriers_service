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
 $date_registration = date("Y-m-d H:i:s");
 $on_way=0;

 $check_sql ="SELECT email FROM couriers WHERE email ='$email'";




$check_result = mysqli_query($db, $check_sql);

   

if (mysqli_num_rows($check_result) > 0)  {

     echo "<script language='javascript' type='text/javascript'> location.href='registration.php' </script>";   

}



if ($_POST['password'] != $_POST['confirm_password']) {

echo "Поля пароль и подтверждение пароля не подтверждены";

echo "<HTML><HEAD><META HTTP-EQUIV='Refresh' CONTENT='5; URL=registration.php'>
</HEAD></HTML>";

}


if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {

echo "Поле email имеет не правильный формат";

echo "<HTML><HEAD><META HTTP-EQUIV='Refresh' CONTENT='5; URL=registration.php'>
</HEAD></HTML>"; 


}




else  {

$insert_sql = "INSERT INTO couriers(login,first_name, middle_name, last_name, on_way, email, phone, password, created_at) VALUES('$login','$first_name', '$middle_name', '$last_name', '$on_way', '$email', '$phone', '$password', '$date_registration')";


 $insert_result = mysqli_query($db, $insert_sql);
 
 
echo "<HTML><HEAD><META HTTP-EQUIV='Refresh' CONTENT='5; URL=/index.php'>
</HEAD></HTML>"; 

}





?>