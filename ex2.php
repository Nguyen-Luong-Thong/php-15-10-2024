<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex2.php" method="POST">
        <div>
            <label for="">Nhập vào</label>
            <input type="number" name="hs1">
        </div>
        <div>
            <label for="">Kết quả</label>
            <p class="kp" style="display:inline;"> <?php $nu=$_POST['hs1'];  echo(chanLe2($nu)) ?></p>
        </div>
        <button type="submit">OK</button>
    </form>
    <?php
    error_reporting(0) ;
        function chanLe(){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $num=$_POST['hs1'];
                if($num%2==0){
                    return "hệ số chẵn";
                }else{
                    return "hệ số lẽ";
                }
            }
        }
        function chanLe2($num){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if($num%2==0){
                    return "hệ số chẵn";
                }else{
                    return "hệ số lẽ";
                }
                }
        }

    ?>
</body>
</html>