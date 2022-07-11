<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/table.css">
   
    <style>
        button{
            transition:1.5s;
        }
        button:hover{
            background-color: #616C6F;
            color:white;

        }
        </style>
</head>

<body style="background-color: #ececec;">


<?php
    include 'navbar.php';
?>

<?php
include "config.php";
$sql = "SELECT * FROM user";
$res = mysqli_query($conn,$sql);
?>
<div class="container">
    <h2  style="text-align:center;color: #6c757d;padding-top:15px">Remove User </h2>
    <br>
    <div class="row">
        <div class="col">
            <div class="table-responsive-sm">
                <table class="table table-hover table-sm table-striped table-condensed table-bordered table-dark " style="border-color:white">
                <thead style="color:white">
                <tr>
                    <th scope="col" class="text-center py-2">#</th>  <!--to denote the header is used for column-(scope=col)-->
                    <th scope="col" class="text-center py-2">Name</th>
                    <th scope="col" class="text-center py-2">Gender</th>
                    <th scope="col" class="text-center py-2">Total Balance</th>
                    <th scope="col" class="text-center py-2">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $count = 1;
                    while ($row = mysqli_fetch_assoc($res)){

                ?>

                <tr style="color:white;">
                    <td class="py-2"><?php echo $count ; ?> </td>
                    <td  class="py-2"><?php echo $row['name'] ; ?> </td>
                    <td  class="py-2"><?php echo $row['gender'] ; ?> </td>
                    <td class="py-2"><?php echo $row['balance'] ; ?> </td>
                    <td><a href="removeuserrq.php?id=<?php echo $row['id'] ; ?>"><button type="botton" class="btn btn-danger"style="border-radius:5%">Remove</button> </a></td>
                </tr>
                <?php
                    $count = $count+1;
                    }
                ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<footer class="text-center mt-5 py-2">
    <p style='margin-top:25px'>Designed by Krishna Kumar.All rights reserved.</p>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>