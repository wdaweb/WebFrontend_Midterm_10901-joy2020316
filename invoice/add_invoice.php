<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增開獎號碼</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        input{
            margin:2rem;
        }
        
    </style>
</head>
<body>
<?php include "./include/header.php";?>
<form action="save_number.php" method="post">
<table class="invoice-table m-3">
    <tr>
        
        <td>
            <select name="period">
                <option value="1">1,2月</option>
                <option value="2">3,4月</option>
                <option value="3">5,6月</option>
                <option value="4">7,8月</option>
                <option value="5">9,10月</option>
                <option value="6">11,12月</option>

            </select>
        </td>
        <td>發票號碼</td>
    </tr>
    <tr>
        <td>特別獎</td>
        <td><input type="number" name="num1"></td>
    </tr>
    <tr>
        <td>特獎</td>
        <td><input type="number" name="num2"></td>
    </tr>
    <tr>
        <td>頭獎</td>
        <td>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
        </td>
    </tr>
    <tr>
        <td>二獎</td>
        <td>      
        <input type="number" name="num3[]"><br>
        <input type="number" name="num3[]"><br>
        <input type="number" name="num3[]"><br>
        </td>
    </tr>
    <tr>
        <td>三獎</td>
        <td>
        <input type="number" name="num3[]"><br>
        <input type="number" name="num3[]"><br>
        <input type="number" name="num3[]"><br>
        </td>
    </tr>
    <tr>
        <td>四獎</td>
        <td>
        <input type="number" name="num3[]"><br>
        <input type="number" name="num3[]"><br>
        <input type="number" name="num3[]"><br>
        </td>
    </tr>
    <tr>
        <td>五獎</td>
        <td>
        <input type="number" name="num3[]"><br>
        <input type="number" name="num3[]"><br>
        <input type="number" name="num3[]"><br>
        </td>
    </tr>
    <tr>
        <td>六獎</td>
        <td>
        <input type="number" name="num3[]"><br>
        <input type="number" name="num3[]"><br>
        <input type="number" name="num3[]"><br>
        </td>
    </tr>
    <tr>
        <td>增開六獎</td>
        <td>
            <input type="number" name="num4[]"><br>
        </td>
    </tr>
</table>

<input type="submit" value="送出" class="btn btn-primary m-3">

</form>
</body>
</html>