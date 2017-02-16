<h3>Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
    xx<br>
    xxxx<br>
    xxxxxx<br>
    xxxxxxxx<br>
    xxxxxxxxxx</p></h3>

<?php
$y = 0;
$z = 'x';
echo "$z <br>";
//while ($y <= 5) {

for ($y = 0, $y <= 5, $y++) {
    $z .='x';
echo $z.'<br>';}
?>