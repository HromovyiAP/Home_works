<h3>Ваше задание создать массив, наполнить это случайными значениями (функция rand),
    найти максимальное и минимальное значение и поменять их местами.</h3>
<pre>
<?php

for($i = 0; $i < 10; $i++) {
  $arr[] = rand(0,100);
  if($i == 0) {
    $min = $arr[$i];
    $min_key = $i;
    $max = $arr[$i];
    $max_key = $i;
  }
  if($min > $arr[$i]) {
    $min = $arr[$i];
    $min_key = $i;
  }
  if($max < $arr[$i]) {
    $max = $arr[$i];
    $max_key = $i;
  }  
}
echo "До: <pre>"; print_r($arr); echo "<br>";
$arr[$max_key] = $min;
$arr[$min_key] = $max;
echo "После: <pre>"; print_r($arr);
echo "<br>Максимальное: ".$max.";   Минимальное: ".$min.";";
?>

