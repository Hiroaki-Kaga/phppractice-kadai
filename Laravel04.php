<?php

// 課題1
function sum(){
  $result = 0;
  for($i = 1; $i<=10; $i++){
    $result +=$i*2 ;

  }

  return $result;
  
}

echo sum();


// 課題2
function f($a, $b){
  $sum = $a + $b;
  return $sum;

}
$result = f(100, 200);
echo $result;



// 課題3
$arr = array(1,3,5,7,9);
function m($arr){
  $result = 5;
  for($i = 0; $i < count($arr)-1; $i++){
  $result *= $i;
  
  }

  return $result;

}

echo m(5);



//課題4
$arr = array(1,3,5,7,9);
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){

     if($max_number < $a){
         $max_number = $a;

     }

 }
 
 return $max_number;
 
}
 
 echo max_array($arr);




// 課題5-1
$str = "<h1>テックブースト</h1><!-- コメントアウト --><p>初心者テキスト</p>";
echo strip_tags($str);

//課題5-2
$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);

//課題5-3
$fruits1 = ['apple', 'orange', 'melon', 'banana', 'pineapple'];
$fruits2 = ['strawberry', 'cherry', 'watermelon'];
$fruits3 = ['anzu', 'papaya'];
$fruits_merge = array_merge($fruits1, $fruits2, $fruits3);
print_r($fruits_merge);


//課題5-4
$timestamp = mktime(0, 0, 0, 4, 1, 2017);
$date = date('w', $timestamp);

$week = [
  '日', //0
  '月', //1
  '火', //2
  '水', //3
  '木', //4
  '金', //5
  '土', //6
];

echo $week[$date] . '曜日';
 






