<?php

function times2($num){
    return $num * 2;
}


function f($a, $b){
    return $a + $b;
    
}



function max_array($arr){
$max_number = arr[0];
foreach($arr as $a){
    if($max_number < $a){
        $max_number = $a;
        
    }

}

return $max_number;

}




$str = "<h1>テックブースト</h1><!-- コメントアウト --><p>初心者テキスト</p>";
echo strip_tags($str);


$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);


$fruits1 = ['apple', 'orange', 'melon', 'banana', 'pineapple'];
$fruits2 = ['strawberry', 'cherry', 'watermelon'];
$fruits3 = ['anzu', 'papaya'];
$fruits_merge = array_merge($fruits1, $fruits2, $fruits3);
print_r($fruits_merge);



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
 
?>





