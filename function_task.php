
<?php
// *********** Point 1 *************
$number=rand();
if($number>5){
echo$number;
echo"<br>";}
?>
<?php
// ************** point 2 *************
function checkk ($str,$num){
    if(strlen($str)>strlen($num)){
        echo"the length of string is greater than length of number";
    }else{
        echo"the length of number is greater than length of string"; 
    }
}
check("hello user",123456);
echo"<br>";
?>
<?php
// ************** point 3 **************
function check($num){
    if($num %2==0){
       echo "$num is even";
    }else{
        echo"$num is odd";
    }
}
       check(5);
       echo"<br>";
?>
<?php
// ************** point 4 **************

function rr($arr ,$item){
    if(in_array($item,$arr,true)){
        echo"data is valid";
      }else{
        echo"data not valid";
      }
}
  echo rr (["mohame","hh"],"oo");
  echo"<br>";
?>
<?php
// ************** point 5 **************
$string="hello user and lets go";
function replace ($string,$word){
    if($word=="spaciefic word"){
        return true;
    }else{
return false;
    }
}
var_dump(replace($string,"word"));
echo"<br>";
?>
<?php
// ************** point 6 **************
function name($fname,$lname){
    echo"$fname"." "."$lname";
}
name("ahmed","mohamed");
echo"<br>";
name("fatma","ameen");
echo"<br>";
name("ali","mohamed");
?>