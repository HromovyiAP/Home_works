<h3>Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
    xx<br>
    xxxx<br>
    xxxxxx<br>
    xxxxxxxx<br>
    xxxxxxxxxx</p></h3>

<?php
$x = 0;
$y ='xx';
while ($x <= 5) {
    $y += "xx";
    $x++;
}
echo "<br>";
?>

<?php

for ($x = 0; $x <= 5; $x++) {
    echo "$y += "xx" <br>";
}

?>