<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex ;
            flex-direction:column;
            align-items: center;
            padding-top: 50px;
        }
        #form{
            width:350px;
            background-color: darkgray;
            padding: 0 20px;
            border: 1px solid red;
        }
        h2{
            color: blue;
            text-align: center;
        }
        .b-row{
            display: flex;
            width: 100%;
            padding: 0;
            justify-content: left;
            align-items: center;
            margin-bottom: 10px;
        }
        .b{
            width: 23.5%;
        }
        #se1, #se2, #kq{
            background-color: rgb(211, 211, 211);
            flex: 1;
            border: none;
        }
        select{
            width: 40px;
            background-color: rgb(211, 211, 211);
            color: red;
        }
        .b-but{
            display: flex;
            justify-content: center;
        }
        button{
            background-color: rgb(211, 211, 211);
            margin: 0 15px;
            border: none;
        }
    </style>
</head>
<body>
    <form action="ex3.php" id="form" method="POST">
        <h2>Bảng điểm của em</h2>
        <div class="b-row">
            <b class="b" >Semester1:</b>
            <input type="text" name="se1" id="se1" placeholder="<?php echo  isset($_POST['se1']) ? $_POST['se1'] :0; ?>">
        </div>
        <div class="b-row">
            <b class="b" >Semester2:</b>
            <input type="text" name="se2" id="se2" placeholder="<?php echo  isset($_POST['se1']) ? $_POST['se2'] :0; ?>">
        </div>
        <div class="b-row"> 
            <b class="b">Year</b>
            <select id="select" name="select">
                <option value="1">1  </option>
                <option value="2">2  </option>
            </select>
        </div>
        <div class="b-row">
            <b class="b" >Summarise:</b>
            <input type="text" value="<?php echo ($_SERVER["REQUEST_METHOD"] == "POST") ? xuLy() : '0';?>" name="" id="kq" readonly>
        </div>
        <div>
            <label for="">Kết quả</label>
            <p class="kp" style="display:inline;"> <?php $i=xuLy(); echo(loai($i))?></p>
        </div>
        <div class="b-but">
            <button type="submit">OK</button>
        </div>
    </form>
    <?php
    function xuLy(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $c= $_POST['select'];
            $a = isset($_POST['se1']) && is_numeric($_POST['se1']) ? floatval($_POST['se1']) : 0;
            $b = isset($_POST['se2']) && is_numeric($_POST['se2']) ? floatval($_POST['se2']) : 0;
            if($c==1){
                return ($a+$b)/2;
            }else if($c==2){
                return ($a+2*$b)/3;
            }

        }
    }
    function loai($re){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if($re>=8){
                return "giỏi";
            }else if($re >=6.5){
                return "Khá";
            }else if($re >=5){
                return "TB";
            }else{
                return "Yếu";
            }

        }

    }
    ?>
</body>
</html>