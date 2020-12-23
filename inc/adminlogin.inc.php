<?php
include("./inc/database.php");
$error ="";
$test_pass = "jayati";
$email_error =$pass_error= "";

if(isset($_POST['submit-admin-login'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    // echo $email."<br>".$pass;
    $login_check = "SELECT * FROM users WHERE email = '$email' ";
    $login_check_result = mysqli_query($conn,$login_check);
    $login_result_row = mysqli_fetch_assoc($login_check_result);
    if($email === $login_result_row['email']){
        if (password_verify($pass, $login_result_row['pass'])) {
            echo 'Password Matches';
            header("Location:./adminpage.php");
        }else {
            $error = $error."Password Mismatch";
        }
    }
    else{
          $error = $error.'Email Mismatch';
    }
}


?>
