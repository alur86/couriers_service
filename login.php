<?php   
    include("db_connect.php");
    session_start();
    $login=$_POST['login'];
    $password=$_POST['password'];
    $_SESSION['auth_user']=$login; 

  
  $query = mysqli_query($db,"SELECT login,password FROM couriers WHERE login ='$login' and password ='".md5($password)."'");


  if (mysqli_num_rows($query) > 0){


echo "<script language='javascript' type='text/javascript'> location.href='dashboard.php' </script>";   
      }

  else
      {
    echo "<script type='text/javascript'>alert('Неправильный логин или пароль!')</script>";
    echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>"; 
       }
  
    ?>