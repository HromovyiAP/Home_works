<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Задача №5</title>
</head>
<body>

<ol>
    <li><h3>Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число.
            Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
            На экран выводить результат в зависимости от значений этих переменных.
            Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя </h3></li>



    <form method="POST" action=''>
        Первое число<input TYPE="text" name="a"/><br>
        Второе число<input TYPE="text" name="b"/><br>
        <input TYPE="radio" name="operation" value='+'/>сложение
        <input TYPE="radio" name="operation" value='-'/>разность
        <input TYPE="radio" name="operation" value='*'/>произведение
        <input TYPE="radio" name="operation" value='/'/>деление
        <input TYPE="radio" name="operation" value='%'/>остаток от деления
        <input type='submit' name='vichislit'value='Вычислить'>
        <input type="reset" name='ochistit' value='Отменить'>
    </form>
</ol>

    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $radio = $_POST['operation'];
    if ($_POST['vichislit'])
    {
    if ($radio=='+'){$c = $a + $b; echo "сумма=" . $c.'<br>';}
    if ($radio=='-') {
        $d = $a - $b;
        echo "разность=" . $d . '<br>';
        if ($radio == '*') {
            $e = $a * $b;
            echo "произведение=" . $e . '<br>';
        }
        if ($radio == '%') {
            $k = $a * $b;
            echo "Остаток от деления=" . $k . '<br>';
        }
        if ($radio == '/') {
            $f = $a / $b;
            echo "деление=" . $f;
        }
    }
    ?>
</body>
</html>