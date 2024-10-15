<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content:center;
            align-items:center;
        }
        form{
            width: 400px;
            padding:10px;
            border:1px solid black;
        }
        .field{
            display:flex;

        }
        label{
            width:20%;
        }
        input{
            flex:1;
        }
        .field >p{
            display: inline;
            flex:1;
            background-color:red;
        }
    </style>
</head>
<body>
    <form action="ex1.php" method="POST">
        <div class="field">
            <label for="">Hệ số a</label>
            <input type="number" name="se1" placeholder="<?php echo isset($_POST['se1']) ? $_POST['se1'] : 0; ?>">
        </div>
        <div class="field">
            <label for="">Hẹ số b</label>
            <input type="number" name="se2"  placeholder="<?php echo isset($_POST['se2']) ? $_POST['se2'] : 0; ?>">
        </div>
        <div class="field">
            <label for="">Kết quả</label>
            <p class="kq"><?php $j=(isset($_POST['se1']) ? $_POST['se1'] : 0); $k=(isset($_POST['se2']) ? $_POST['se2'] : 0); echo(sum1($j,$k));?></p>
        </div>
        <button type="submit">Xác nhận</button>
    </form>
    <?php
        function sum (){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $a=$_POST['he1'];
            $b=$_POST['he2'];
            return $a+$b;
            }
        }
        function sum1 ($hsa,$hsb){
            return $hsa + $hsb;
        }
        
    ?>

    <br>
    
</body>
</html>