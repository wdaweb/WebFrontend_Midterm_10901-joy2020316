<?php include_once "./com/base.php";
$period=ceil(date("n")/2);

$monthStr=[
    '1'=>"1,2月",
    '2'=>"3,4月",
    '3'=>"5,6月",
    '4'=>"7,8月",
    '5'=>"9,10月",
    '6'=>"11,12月",
];

if(isset($_GET['period'])){
    $period=$_GET['period'];
}
$year=date("Y");
?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        ._1{
            width: 6rem;
        }
        ._2{
            width: 10rem;
        }
    </style>
</head>
<body>
<?php include "./include/header.php";?>   
<nav class="navbar navbar-light my-3" style="background-color: #e3f2fd;">
  <span class="navbar-brand mb-0 h1"> <h3>期別</h3> </span>
</nav>
<ul class="nav">
<li><a href="invoice.php?period=1" style="background:<?=($period==1)?'lightgreen':'white';?>">1 (1，2)</a></li>
<li><a href="invoice.php?period=2" style="background:<?=($period==2)?'lightgreen':'white';?>">2 (3，4)</a></li>
<li><a href="invoice.php?period=3" style="background:<?=($period==3)?'lightgreen':'white';?>">3 (5，6)</a></li>
<li><a href="invoice.php?period=4" style="background:<?=($period==4)?'lightgreen':'white';?>">4 (7，8)</a></li>
<li><a href="invoice.php?period=5" style="background:<?=($period==5)?'lightgreen':'white';?>">5 (9，10)</a></li>
<li><a href="invoice.php?period=6" style="background:<?=($period==6)?'lightgreen':'white';?>">6 (11，12)</a></li>
</ul>
<a href="add_invoice.php"><button type="button" class="btn btn-info mt-4 ml-3">新增獎號</button></a>
<?php

$num1=find('award_number',['period'=>$period,'year'=>$year,'type'=>1]); //單筆
$num2=find('award_number',['period'=>$period,'year'=>$year,'type'=>2]);//單筆
$num3=all('award_number',['period'=>$period,'year'=>$year,'type'=>3]);//多筆
$num4=all('award_number',['period'=>$period,'year'=>$year,'type'=>4]);//多筆

?>

<div class="table-responsive-md ">
<table class="invoice-table my-4 ml-3  ">
    <tr>
        <td>年/月份</td>
        <td><?=$year;?>年 <?=$monthStr[$period];?></td>
    </tr>
    <tr>
        <td class=_1>特別獎</td>
        <td class=_2><?php
        if(!empty($num1['number'])){
            echo $num1['number'];
        };
        
        ?></td>
        <td><a href="award.php?aw=1&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>特獎</td>
        <td><?php
        if(!empty($num2['number'])){
            echo $num2['number'];
        };
        
        ?></td>
        <td><a href="award.php?aw=2&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>頭獎</td>
        <td>
            <?php
                foreach($num3 as $num){
                    echo $num['number'] . "<br>";
                }
            
            ?>

        </td>
        <td><a href="award.php?aw=3&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>二獎</td>
        <td></td>
        <td><a href="award.php?aw=4&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>三獎</td>
        <td></td>
        <td><a href="award.php?aw=5&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>四獎</td>
        <td></td>
        <td><a href="award.php?aw=6&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>五獎</td>
        <td></td>
        <td><a href="award.php?aw=7&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>六獎</td>
        <td></td>
        <td><a href="award.php?aw=8&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
    <tr>
        <td>增開六獎</td>
        <td>
        <?php
                foreach($num4 as $num){
                    echo $num['number'] . "<br>";
                }
            
            ?>
        </td>
        <td><a href="award.php?aw=9&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
    </tr>
</table>
</div>
</body>
</html>