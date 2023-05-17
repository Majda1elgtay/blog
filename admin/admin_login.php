<?php
include '../functions/connect.php';
session_start();

if(isset($_POST['submit'])){
         $name=$_POST['name'];
         extract($_POST);
        //  $mp = md5($password);
        //  var_dump($mp);
         $conn = connect();
         $requette= "SELECT * FROM admin WHERE name = '$name' AND password = '$password'";
         $resultat = $conn->query($requette);
         $admin = $resultat->fetch();
         var_dump($admin);
         if (!empty($admin)) {
             $_SESSION['NAME'] = $admin['NAME'];
             $_SESSION['PROFILE'] = $admin['PROFILE'];
             $_SESSION['ID_ADMIN'] = $admin['ID_ADMIN'];
             header('location:dashboard.php'); 
        }else{
            $massage[] = 'incorrect username or password';
        }

    }
?>
<style>
    <?php include 'admin_style.css'?>;
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--  <link href='admin_style.css' rel='stylesheet'>-->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <title>Admin Login page </title>
</head>
<body style="padding-Left: 0 !important;">
<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
             <div class="message">
               <span>'.$message.'</span>
               <i class=`bx bx-x` onclick="this.parentElement.remove();"></i>
        </div>
        ';
    } 
        
}
    
?>
<section class="form-container" id="admin_login">
    <form action="" method="post">
        <h3>login now</h3>
        <div class="input-field">
            <label>User name <sup>*</sup></label>
            <input type="text" name="name" maxlength="20" required placeholder="Enter your username" oninput="this.value.replace(/\s/g,'')">
        </div>
      

            <label>password <sup>*</sup></label>
            <input type="password" name="password" maxlength="20" required placeholder="Enter your password" oninput="this.value.replace(/\s/g,'')">
        </div>
        <input type="submit" name="submit" value="login now" class="btn">
</form >
</body>
</html>