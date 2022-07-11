<?php
include 'config.php';
if(isset($_POST['submit'])){
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];
    $sql = "SELECT * FROM user where id = $from";
    $query = mysqli_query($conn,$sql);
    $res1 = mysqli_fetch_array($query);

    $sql = "SELECT * FROM user where id = $to";
    $query = mysqli_query($conn,$sql);
    $res2 = mysqli_fetch_array($query);

    if(($amount)<0){
        echo "<script> alert('Negative balance cannot be transferred');
        window.location('transfermoney.php');
        </script>";
    }
    else if($amount > $res1['balance'])
    {
        echo " <script> alert('Insufficient Balance');
        window.location('transfermoney.php');
        </script>";
    }
    else if($amount == 0){
        echo " <script> alert('Zero Balance cannot be transferred');
        window.location('transfermoney.php');
        </script>";

    }
    else{
        $newbalance = $res1['balance'] - $amount;
        $sql = "UPDATE user set balance = $newbalance where id = $from";
        mysqli_query($conn,$sql);

        $newbalance = $res2['balance'] + $amount;
        $sql = "UPDATE user set balance = $newbalance where id = $to";
        mysqli_query($conn,$sql);

        $sender = $res1['name'];
        $receiver = $res2['name'];
        $sql = "INSERT into transcation(sender,receiver,balance) VALUES ('{$sender}','{$receiver}','{$amount}')";
        $res = mysqli_query($conn,$sql);

        if($res){
            echo "<script> alert('Transcation Completed');
            window.location='transcationhistory.php';
            </script>";
        }
        $newbalance = 0;
        $amount = 0;
    }
}

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transcation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/table.css">
    <style>
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button{
    -webkit-appearance: none;
    }
    </style>
</head>
<body style="background-color: #ececec;">
<?php
include "navbar.php";
?>
<div class="container"> <!-- prcoceed after table filling content-->
    <h2 class="text-center pt-4" style="color:#6c757d;">Transcation</h2>
    <?php
    include 'config.php';
    $sid = $_GET['id'];
    $sql = "SELECT * FROM user where id = $sid ";
    $res = mysqli_query($conn,$sql);
    if (!$res){
        echo "Error occured in the connection";
    }
    $row = mysqli_fetch_assoc($res);
    ?>
    <form method = "post" name = "tcredit" class="tabletext"><br>
    <div>
    <table class="table table-striped table-condensed table-bordered table-dark">
        <tr style="color:white;">
            <th class="text-center">Id</th>
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Total Balance</th>
        </tr>
            <tr style="color:white;">
            <td class="py-2"><?php echo $row['id'] ?></td>
            <td class="py-2"><?php echo $row['name'] ?></td>
            <td class="py-2"><?php echo $row['email'] ?></td>
            <td class="py-2">Rs. <?php echo $row['balance'] ?></td>
        </tr>
    </table>
</div>
<hr><br><!-- hr means it will give a horizontal line break-->
<div class="row">
    <div class="col-6">
    <lable style=" color :black;"><b>TRANSFER TO : </b></label>
        <select name = "to" class="form-control" required>
        <option value="" disabled selected > SELECT ACCOUNT</option> <!-- initially nothing should be shown in select box-->
        <?php
        include "config.php";
        $sid = $_GET['id'];
        $sql = "SELECT * FROM user where id!=$sid";
        $res = mysqli_query($conn,$sql);
        if(!res){
            echo "Error Ocurred";
        }
        while($row = mysqli_fetch_assoc($res)){
        ?>
        <option class="table" value = "<?php echo $row['id']; ?> ">
            <?php echo $row['name'] ?> (Balance : <?php echo $row['balance'] ?>)
        </option>
        <?php
        }
        ?>
        <div>
    </select>
    </div>
    <div class="col-6">
    <lable style=" color :black;"><b>AMOUNT : </b></label>
    <input type="number" class="form-control" name="amount" required>
    </div>
</div>
    <br>
    <div class="text-center">
        <button class="btn" name="submit" type="submit" id="myBtn">Transfer Money</button>
    </div>
    </form>
</div>
<footer class="text-center mt-5 py-2">
    <p style='margin-top:25px'>Designed by Krishna Kumar.All rights reserved.</p>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>