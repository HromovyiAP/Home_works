<?php
$name="Громовий Андрій Петрович";
$email="hromovyi@i.ua";
$phone="0663786613";
$age="1987 р."
?>

<!DOCTYPE html>
<html>
<head>
<title>Резюме</title>
<meta name "keywords" content "резюме" charset="UTF-8" />
<link href='.\style.css' rel='stylesheet' type='text/css'>
<head>
<body>
<p class="hello" align = "center">Вітаю! До Вашого розгляду пропонується резюме на посаду інженера проектувальника (електрика).</p>
<div class="name"><p><b><i>

<?= "$name" ?>

</i></b></p></div>
<div class="info"><img src="http://akimg2.ask.fm/assets/288/964/767/normal/anonym.jpg" width="110" high="110" align="right" alt="Місце для майбутнього фото" title="Місце для майбутнбого фото"/>
<p><h2><u> I. Контактна інформація</u></h2></p>
<table border="1">
<tr> 
<td>
Електронна адреса</td>
<td>

<?="$email"?>

</td>
</tr>
<tr>
<td>Телефон</td>
<td>

<?="$phone"?>
	
</td>
</tr>
<tr>
<td>Рік народження</td>
<td>

<?="$age"?>

</td>
</tr>
</table>
</div>
<div class="info"><p><h2><u>II.Освіта</u></h2></p>
<table border=1>
<tr>
<td align="center"><b>Період навчання</b></td>
<td align="center"><b>Назва вищого навчального закладу</b></td>
<td align="center"><b>Спеціальність</b></td>
<td align="center"><b>Форма навчання</b></td>
</tr>
<tr>
<td>вересень 2004 р. - червень 2010 р.</td>
<td>Національний технічний університет України «Київський політехнічний інститут»</td>
<td>Електротехнічні системи електроспоживання</td>
<td>Денна</td>
</tr>
</table>
</div>
<div class="info"><p><h2><u>III.Досвід роботи</u></h2></p>
<dl >
<dt>Серпень 2016 р. - дотепер</dt><dd>Інженер проектувальник електротехінчного відділу ТОВ "Строй-Гарант Інвест"</dd>
<dt>Жовтень 2011 р. - Серпень 2016 р.</dt>
<dd>Інженер електротехінчного відділу сектору комплексного проектування ТОВ "Нафтохімпроект"</dd>
<dt>Грудень 2010 р - Жовтень 2011 р.</dt>
<dd>Інженер електротехнічного відділу київіського представництва ТОВ "Газтранзит"</dd>
<dt>Червень 2010 р. - Грудень 2010 р.</dt>
<dd>Технік електротехнічної дільниці управління теплових розподільчих мереж ПАТ "Київенерго"</dd>
</dl>
</div>
<div class="info"><p><h2><u>IV.Виробнича практика</u></h2></p>
<ul>
<li>Червень 2008 р. - ТОВ "Символ" <a href="https://www.ua-region.com.ua/21534314" title="Посилання на сайт організації" target="_blank"> (Інформація про ТОВ "Символ")</a></li> 
<li>Серпень 2009 р. - ПАТ "Київенерго" <a href="http://kyivenergo.ua/" title="Посилання на сайт організації" target="_self">
<img src="https://secure.mega-billing.com/prom/assets/partners/100-a1f790171a28a5cebe6fa6957f9f3ab608182e15bd3c0bf6542f1862c91ff457.png" 
width="100" high="100" alt="Місце для іконки ПАТ Київенерго" title="Посилання на сайт організації"/>
</a></li> 
<li>Вересень 2010 р - ТОВ "Сила струму" <a href="https://www.ua-region.com.ua/34181325" title="Посилання на сайт організації" target="_self">(Інформація про ТОВ "Сила струму")</a></li>  
</ul>
</div>
<div class="info"><p><h2><u>V.Професійні навички</u></h2></p>
<ol>
<li>Комп'ютерні</li>
<ul>
<li>Word</li>
<li>Exel</li>
<li>Avtocad</li>
<li>PDMS</li>
</ul>
<li>Мовні</li>
<ul>
<li>Українська</li>
<li>Англійська</li>
<li>Російська</li>
</ul>
</ol>
</div>
<div class="info"><p><h2><u>VI.Захоплення</u></h2></p>
Подорожі<br/>
Кіно <br/>
Театр
</div>

