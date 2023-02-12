<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $colors=["red","grean","blue","black","white"];  ?>
    <h1> colors</h1>
    <ul>
    <li><h2> <?php foreach($colors as $color){echo$color."<br>";}?></h2></li>
   </ul>

   <br>
   <?php array_push($colors,"yellow","bink","flowery");?>
<ul>
    <li><h3> <?php foreach( $colors as $b){echo$b ."<br>";}?>  </h3></li>
</ul>
<br>

<?php $numbers=[10,20,30,40,50];?>
<h2> <?php foreach($numbers as $num){echo$num ."<br>";}?></h2>
<br>
<br>
<?php function add($numbers){return $numbers+5;};
$n =array_map("add",$numbers);?>
<h3> <?php foreach($n as $nu){echo$nu ."<br>";}?></h3>
<br>
<br>
<?php function div ($numbers){return$numbers/3;}
$re=array_map("div",$numbers);?>
<h3> <?php foreach($re as $numm){echo$numm ."<br>";}?></h3>
<br>
<br>
<?php array_push($numbers,"60","70","80");?>
<h3> <?php foreach($numbers as $numberr){echo$numberr ."<br>";}?></h3>
<br>
<br>
<div class="container">
<div class="card">
    <?php $users=[["mohamed ali",20],["rana ahmed",19],["maged khaled",25]];?>
    <table border="10">
        <tr><td> <div class="card_title" >Name</div></td><td><div class="card_title">Age</div></td></tr>
            <?php foreach($users as $user):;?>
             <tr><?php foreach ($user as $x):?>
        <td><?php echo $x;?></td>
           <?php endforeach;?>
        </tr>
        <?php endforeach;?>
    </table>
</div>
</div>
<br>
<br>
<?php
$employees=[
["mohamed ali","mohamed@eroft.com","01067895432",2500],
["reham mohamed","reham@eraasoft.com", "01876543210",3000],
["maged hesham","maged@eraasoft.com","01891234098",4000],
["ali mahmud","ali@eraasoft.com","01092387652",2000],
["nader elsayed","nader@eraasoft.com","01098761234",1000]];
?>
<table border="10">
    <thead>
    <tr><th>Name</th>
      <th>Email</th>
        <th>Phone</th>
         <th>Salary</th>
    </tr>
    </thead>

    <tbody>
                <?php foreach($employees as $employee):?>
                <tr>
                <?php foreach($employee as $one):?>
                    <td><?php echo $one ?></td>
                     <?php endforeach;?>
                </tr>

                <?php endforeach;?>     
    </tbody>

</body>
</html>
    
