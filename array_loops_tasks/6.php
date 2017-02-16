<h3>Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
    русские — в массив $ru.
    $arr = array ('green' => 'зеленый', 'red' => 'красный','blue' => 'голубой');
    $en = array('green', 'red','blue');
    $ru = array('зеленый', 'красный', 'голубой');</h3>
<pre>
<?php
$en = array();
$ru = array();
$arr = array('green' => 'зеленый', 'red' => 'красный','blue' => 'голубой');
foreach ($arr as $key => $val) {
 $en[]=$key;
}
print_r($en);

$arr = array('green' => 'зеленый', 'red' => 'красный','blue' => 'голубой');
foreach ($arr as $key => $val) {
    $ru[] = $val;
}
print_r($ru);
?>
</pre>
