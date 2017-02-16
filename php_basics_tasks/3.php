<!DOCTYPE html>
<html>
<head>
    <title>Задача №3</title>
    <meta charset="UTF-8">
</head>
<body>
<ol>
    <li><h3>Создайте переменную day и присвойте ей произвольное числовое значение.</h3></li>

    <?php
$day = 5;
echo $day;
    ?>

    <li><h3>С помощью конструкции switch выведите фразу: "Это рабочий день",
            если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно) </h3></li>

    <?php
$day = 5;
switch ($day) {
    case 1: echo 'Это рабочий день'; break;
    case 2: echo 'Это рабочий день'; break;
    case 3: echo 'Это рабочий день'; break;
    case 4: echo 'Это рабочий день'; break;
    case 5: echo 'Это рабочий день'; break;
}
    ?>

    <li><h3>С помощью конструкции switch выведите фразу: "Это выходной день",
            если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно)</h3></li>

    <?php
    $day = 7;
    switch ($day) {
        case 1: echo 'Это рабочий день'; break;
        case 2: echo 'Это рабочий день'; break;
        case 3: echo 'Это рабочий день'; break;
        case 4: echo 'Это рабочий день'; break;
        case 5: echo 'Это рабочий день'; break;
        case 6: echo 'Это выходной день'; break;
        case 7: echo 'Это выходной день'; break;
    }
    ?>

    <li><h3>С помощью конструкции switch выведите фразу: "Неизвестный день",
            если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно</h3></li>

    <?php
    $day = 10;
    switch ($day) {
        case 1: echo 'Это рабочий день'; break;
        case 2: echo 'Это рабочий день'; break;
        case 3: echo 'Это рабочий день'; break;
        case 4: echo 'Это рабочий день'; break;
        case 5: echo 'Это рабочий день'; break;
        case 6: echo 'Это выходной день'; break;
        case 7: echo 'Это выходной день'; break;
        default: echo 'Неизвестный день'; break;
    }
    ?>

</ol>
</body>
