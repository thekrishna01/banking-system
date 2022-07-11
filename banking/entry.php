<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
<?php
include 'navbar.php';
?>

    <!--activity section-->
    <div class='row activity text-center container-fluid' style="padding-top:12%;">
        <div class='col-md '>
            <img src='image/user.jpg' class='image-fluid'>
            <br>
            <a href='createuser.php'><button type="button" class="btn btn-dark">Create User</button></a>
        </div>
        <div class='col-md '>
            <img src='image/ruser.jpg' class='image-fluid'>
            <br>
            <a href='removeuser.php'><button type="button" class="btn btn-dark">Delete User</button></a>
        </div>
        <div class='col-md '>
            <img src='image/transfer.jpg' class='image-fluid'>
            <br>
            <a href='transfermoney.php'><button type="button" class="btn btn-dark">Proceed to Transcation</button></a>
        </div>
        <div class='col-md '>
            <img src='image/history.jpg' class='image-fluid'>
            <br>
            <a href='transcationhistory.php'><button type="button" class="btn btn-dark">Transcation History</button></a>
        </div>
        
    </div>

<footer class='text-center mt-5 py-2'> <!-- mt-margin top and py-padding bottom-->
    <p style='margin-top:25px'><b>Designed by Krishna Kumar.All rights reserved.</b></p>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>