<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transcation History</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/table.css">

</head>

<body style="background-color: #ececec;">
<?php
include "navbar.php" ;
?>
<div class="container">
    <h2 class="text-center pt-4" style="color:#6c757d;">Transcation History</h2>
    <br>
    <div class="table-responsive-sm">
        <table class="table table-hover table-striped table-condensed table-dark table-bordered">
            <thead style="color:white;">
            <tr>
                <th class="text-center">S.No</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date and Time</th>
            </tr>
            <tbody>
            <?php
                include "config.php";
                $sql = "SELECT * FROM transcation";
                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($res)){

                
            ?>
            <tr style="color:white;">
            <td class="py-2"><?php echo $row['sno'] ; ?></td>
            <td class="py-2"><?php echo $row['sender'] ; ?></td>
            <td class="py-2"><?php echo $row['receiver'] ; ?></td>
            <td class="py-2"><?php echo $row['balance'] ; ?></td>
            <td class="py-2"><?php echo $row['datetime'] ; ?></td>
            <?php
                }

            ?>
        </tbody>

        </table>

    </div>
</div>   

<footer class="text-center mt-5 py-2">
    <p style='margin-top:25px'><b>Designed by Krishna Kumar.All rights reserved.</b></p>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>