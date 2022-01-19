


<?php
include('security.php');
include("connection.php");

if(isset($_POST['login_btn']))
{
    $email_login= $_POST['email']; 
    $password_login = $_POST['password']; 

    $query = "SELECT * FROM admin_user WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($conn, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['user_name'] = $email_login;
        header('Location: ../index.php');
   } 
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: ../login.php');
   }
    
}
?>

