<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Banking System</title>
</head>
<body>
<?php
include "config.php";
if(isset($_POST['reg'])){
    echo "<script>
    window.location='registrationform.php';
    </script>";
}
?>

<?php
            include 'config.php';
            if(isset($_POST['log'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql ="SELECT * FROM registrationform where email='$email' and password='$password'";
            
            $query =mysqli_query($conn, $sql);
            $res = mysqli_fetch_assoc($query);
            
            if($res){
                echo "<script> alert('logged in');
                window.location='entry.php';
                </script>";
            }else{
                echo "<script> alert('Incorrect identity') </script>";
                
            }
            
        }
        ?>

<div>
<div class="row intro py-1" style="background-color :gray;">          
    <div class="col-sm-12 col-md img text-center" style="color:white;font-size:25px;">
      <span style="font-family:monospace;"> ADMIN LOGIN </span>
    </div>
    </div>
    <form  class="app-form" method="post">
    <div class="mb-3" style="padding:100px 20% 10px 20%;">
        <label  class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" >
    </div>
    <div class="mb-3" style="padding:10px 20% 10px 20%;">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" >
    </div>
    <span style="padding:10px 20% 10px 20%;">
    <button type="submit" name = "log" class="btn btn-primary" >Log In</button>
    <button type="submit" name="reg" class="btn btn-secondary">Register</button>
    </span>
</form>
</div>

<footer class="text-center mt-5 py-2" >
   <p style="padding-top:10%;"><b>Designed by Krishna Kumar P</b></p>
</footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

