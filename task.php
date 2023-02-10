<?php
// ******************point 1*************
for($i=1;$i<=100;$i++){
    echo"$i";
    echo"<br>";
}
?>
<?php
echo"<br>";
?>
<?php
// ******************point 2*************
$i=0;
while($i<=100){
    echo" $i";
    echo"<br>";
    $i+2;
}
?>
<?php
echo"<br>";
?>
<?php
// ******************point 3*************
for($i=1;$i<=50;$i+2){
echo"$i .<br>";
}
?>
<?php
echo"<br>";
?>
<?php
// ******************point 4*************
$name="lorem ipsum dolor sit amit consectetur adipisicing elit.eligendi,aperiam";
echo"<pre>";
print_r(str_split($name));
echo"<pre>";
?>
<?php
echo"<br>";
?>
<?php
// ******************point 5************
for($i=0;$i<=100 ;$i+5){
 echo "$i .<br>";
}
?>
<?php
echo"<br>";
?>
<?php
// **********Point 6 ***********
$text="1-2-3-4-5-6-7-8-9-10";
$arr=explode("-",$text);
foreach($arr as $x):
print_r($x );
endforeach;
?>
<?php
//**************point 7 ************888
$count=0;
for($i=1;$i<=20;$i++){
    $count+=$i;
}
echo$count;
?>
<?php
echo"<br>";
?>
<?php
//*************** point 8 *************
for($i=2;$i<=50;$i++){
if($i%2==0){
    if($i==2){
        echo$i ."is even ,prime" ."<br>";
       // break;
    }else{
        echo$i ."is even"."<br>";
        //break;
    }
}
else{
    echo$i ."odd"."<br>";
}
for($k=2;$k<$i;$k++){
    if($i % $k==0){
        break;
    }
}
if($i==$k){
    echo$i ."prime"."<br>";
}
}

?>
<?php
echo"<br>";
?>
<?php
// ************* point 9 *************
for($i=1; $i<=100 ;$i++){
  if($i==11||$i==21||$i==31||$i==41||$i==51||$i==61||$i==71||$i==81||$i==91){
    echo"<br>";
  }
  echo( "  ".$i);
}
?>
<?php
echo"<br>";
?>
<?php
// ****************Point 10 ****************88
for($i=1;$i<=10;$i++){
for($j=1;$j<=$i;$j++){
    echo"*";
}
echo"<br>";
}
?>
<?php
//**************** Point 11 **************8
echo "\$numbers=\"12-23-34-45\"";
?>



