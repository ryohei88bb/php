<?php
//課題１
function number($max){
    $result = $max * 2;
    return $result;
}
echo number(3);

//課題２
function add($a,$b){
    $result_add = $a + $b;
    return $result_add;
}
echo add(2,8);

//課題３
function multi($arr){
    $result = 1;
    for($i = 0; $i <= 4; $i++){
        $result *= $arr[$i];
    }
    return $result;
}
echo multi(array(1,3,5,7,9));

//課題４
function max_array($arr){

 $max_number = $arr[0];
 foreach($arr as $a){
     if($a > $max_number){
         $max_number = $a;
     }
 }

 return $max_number;
 }
 echo max_array(array(1,3,5,7,9));
 
 //課題５
 
 $text = "<p>hello world</p>";
 echo strip_tags($text);
 echo "\n";
 echo strip_tags($text,"<p>");

 $arr = array(1,2);
 array_push($arr,3,4);

 $arr1 = array(1,2,3);
 $arr2 = array(4,5,6);
 $arr3 = array(7,8,9);
 $arr = array_merge($arr1,$arr2,$arr3);

 $nextWeek = time() + (7 * 24 * 60 * 60);
 echo date('Y-m-d',$nextWeek);
 echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

 date('Y-m-d');