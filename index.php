<?php
require_once('Syunya.php');
require_once('Masa.php');


$shunya = new Shunya('しゅんや', '男', 21, '3000ペソ', 'ニート');

echo 'しゅんやの性別は';
echo $shunya->sex;
echo '<br>';
echo 'しゅんやの年齢は';
echo $shunya->age;
echo '<br>';
echo 'しゅんやの所持金は';
echo $shunya->money;
echo '<br>';
echo 'しゅんやの職業は';
echo $shunya->job;
echo '<br>';

$shunya->cry();
$shunya->buy();


$masa = new Masa('正文', '女', 22, '400ペソ', '大手外資コンサル');

echo '正文の性別は';
echo $masa->sex;
echo '<br>';
echo '正文の年齢は';
echo $masa->age;
echo '<br>';
echo '正文の所持金は';
echo $masa->money;
echo '<br>';
echo '正文の職業は';
echo $masa->job;
echo '<br>';

$masa->cry();