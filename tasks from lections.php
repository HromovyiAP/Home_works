<?php
error_reporting(E_ALL);
$x_1 = array('Name' => 'Андрій', 'Surname' => 'Громовий', 'Surname_1' => 'Петрович', 'Age' => 29, 'Can_swim' => true );
$x_2 = array('Name' => 'Петро', 'Surname' => 'Дидик', 'Surname_1' => 'Володимирович', 'Age' => 30, 'Can_swim' => true );
$x_3 = array('Name' => 'Олександр', 'Surname' => 'Банацький', 'Surname_1' => 'Михайлович', 'Age' => 29, 'Can_swim' => false );
$x_4 = array('Name' => 'Сергій', 'Surname' => 'Стойко', 'Surname_1' => 'Любомирович', 'Age' => 30, 'Can_swim' => true );
$x_5 = array('Name' => 'Євген', 'Surname' => 'Степаненко', 'Surname_1' => 'Миколайович', 'Age' => 32, 'Can_swim' => false );
$x_6 = array('Name' => 'Роман', 'Surname' => 'Охріменко', 'Surname_1' => 'Андрійович', 'Age' => 29, 'Can_swim' => true );
$x_7 = array('Name' => 'Сергій', 'Surname' => 'Білоконь', 'Surname_1' => 'Петрович', 'Age' => 29, 'Can_swim' => true );
$x_8 = array('Name' => 'Артем', 'Surname' => 'Іванов', 'Surname_1' => 'Іванович', 'Age' => 17, 'Can_swim' => true );
$x_9 = array('Name' => 'Василь', 'Surname' => 'Герасименко', 'Surname_1' => 'Валентинович', 'Age' => 45, 'Can_swim' => false );
$x_10 = array('Name' => 'Олексій', 'Surname' => 'Снітко', 'Surname_1' => 'Ігнатович', 'Age' => 32, 'Can_swim' => true );

$y = array($x_1, $x_2, $x_3, $x_4, $x_5, $x_6, $x_7, $x_8, $x_9, $x_10);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Массивы</title>
    <meta charset="UTF-8">
    <style>
.blue td {background-color:blue;}
    </style>
</head>
<body>

<table border="1" cellspacing="0" cellpadding="5">
<tr>
    <th>№ з/п</th>
    <th>Імя</th>
    <th>Фамілія</th>
    <th>По батькові</th>
    <th>Вік</th>
    <th>Вміє плавати</th>
</tr>

    <?php for ($i=0, $k = count($y); $i < $k; $i++) : ?>

<tr>
    <td><?= $i ?></td>
    <td><?=$y[$i]['Name']?></td>
    <td><?=$y[$i]['Surname']?></td>
    <td><?=$y[$i]['Surname_1']?></td>
    <td><?=$y[$i]['Age']?></td>
    <td><?=$y[$i]['Can_swim'] ? 'Так' : 'Ні'?></td>

    <?php endfor; ?>

<br> <br>

    <table border="1" cellspacing="0" cellpadding="5">
<tr>
     <th>№ з/п</th>
     <th>Імя</th>
     <th>Фамілія</th>
     <th>По батькові</th>
     <th>Вік</th>
     <th>Вміє плавати</th>
</tr>

<?php foreach ($y as $key => $i) :?>

<tr <?=$key%2 == 0 ? 'class="blue" ' : ''?> >
      <td><?=$key ?></td>
      <td><?=$i['Name']?></td>
      <td><?=$i['Surname']?></td>
      <td><?=$i['Surname_1']?></td>
      <td><?=$i['Age']?></td>
      <td><?=$i['Can_swim'] ? 'Так' : 'Ні'?></td>
</tr>
<?php endforeach; ?>

</tr>

</table>
</body>
</html>
