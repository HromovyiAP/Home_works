<h3>Выведите столбец четных чисел в промежутке от нуля до 100.</h3>

<?php

    for($i = 1; $i <= 100; $i++) {
        if(($i % 2 == 0)) {
            echo $i . "<br>";
        }
    }
?>