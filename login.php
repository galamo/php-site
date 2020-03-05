<?php
$errorUser = 'no error';
$errorPass = 'no error';
// $error = '';


$arr = [1,2,34,4];
$arrLength = count($arr);
echo "<h1> $arrLength </h1> ";
echo "<h1> $arrLength </h1> ";
echo "<h1> $arrLength </h1> ";
echo "<h1> $arrLength </h1> ";
echo "<h1> $arrLength </h1> ";

if(count($_POST) > 0 && validate()){
    header('Location:http://localhost/site/home.php');
}
else if(count($_POST) > 0 ){
    if($_POST['userName'] == ''){
        $errorUser ='user name is required';
    }
    
    if($_POST['pass'] == ''){
        $errorPass ='password is required';
    }
//    $error = 'user name or password invalid';
   
}

function validate(){
    if($_POST['userName'] == 'sivan' && $_POST['pass'] == '123456'){
        return true;
    }
    else{
        return false;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
    <h1>
     Login
    </h1>
    <div class="row">
    <form action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" name="userName" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"><?php echo $errorUser ?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" name="pass" placeholder="Password">
    <small id="emailHelp" class="form-text text-muted"> <?php echo $errorPass ?></small>
  </div>
  <span style="color:red">  </span>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
    </div>
    </div>


</body>
</html>