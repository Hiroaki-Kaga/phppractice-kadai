<?php


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