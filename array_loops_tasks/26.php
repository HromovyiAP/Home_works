<h3>Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
    Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
    индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
    индекс.</h3>

<?php
$k = 1;
for ($i=0; $i <= 4; $i++){
    $arr [$i] = rand(1, 100);
}
print_r($arr);

foreach ($arr as $key => $item) {
    if ($item > 0 && ($key % 2 == 0) && $key > 0) {
        $k *=$item .'<br>';
       }
}
echo "Произведение элементов массива которые больше 0 и у которых парные индексы = {$k}. <br>";

foreach ($arr as $key => $item) {
    if ($item > 0 && ($key % 2 !== 0)) {
       echo "Элемент массыва который больше ноля и у которого не парный индекс =  {$item} .'<br>'";
    }
}
?>
