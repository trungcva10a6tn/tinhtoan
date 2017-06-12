<?php
class Calculator{
    public function sum($a,$b){
        return $a+$b;
    }
    public function sub($a,$b){
        return $a-$b;
    }
}
if (isset($_POST["ok"])){
    if (!empty($_POST["a"])&&!empty($_POST["b"])){
        $Calculator=new Calculator();
        $ketqua=0;
        $a=$_POST["a"];
        $b=$_POST["b"];
        if ($_POST["action"] ==="+"){
            $ketqua=$Calculator->sum($a,$b);
        }
        if ($_POST["action"] === "-"){
            $ketqua=$Calculator->sub($a,$b);
        }
        echo $a." ".$_POST["action"]." ".$b." = ".$ketqua;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .new_input{
            margin: 10px;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Máy Tính</legend>
        <div class="new_input">
            <label>Số a: </label>
            <input type="text" name="a">
        </div>
        <div class="new_input">
            <label>Chọn Phép: </label>
            <select name="action">
                <option>+</option>
                <option>-</option>
            </select>
        </div>
        <div class="new_input">
            <label>Số b: </label>
            <input type="text" name="b">
        </div>
        <button type="submit" name="ok">Lưu</button>
    </fieldset>
</form>
</body>
</html>
