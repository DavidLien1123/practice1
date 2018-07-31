<?php
    session_start();
    if(isset($_POST['user'])){
        if($_POST['user']==='david' and $POST['password']==='12345'){
            $SESSION['login'] = 'david';
        }else{
            $message ='帳號或密碼錯誤';
        }          
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>    
    <?php
    if(isset($message)){
        echo "<script> alert('$message') </script>";
    } 
    
    ?>
    <?php if(isset($_SESSION['login'])):?>
        <div><?= $_SESSION['login']?>,hello</div>
        <div><a href="logout.php">登出</a></div>
</div>
    
</body>
</html>