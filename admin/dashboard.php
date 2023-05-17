<?php
     include '../functions/connect.php';
     include '../functions/posts.php';
     $posts = getAllPosts();
     session_start();

     $admin_id = $_SESSION['ID_ADMIN'];

     if (!isset($admin_id)) {
        header('location: admin_login.php');

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
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <title>admin dashboard </title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>name</td>
                <td></td>
                <td>#</td>
            </tr>
            
        </thead>
    </table>
    <?php 
    
foreach ($posts as $post => $i) {
    
}
    ?>

</body>
</html>