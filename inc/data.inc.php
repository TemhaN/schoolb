<?php
date_default_timezone_set('Asia/Almaty');
  // Установка локали и выбор значений даты
  setlocale(LC_ALL, "russian");
  $day = date('d');
  $mon = date('m');
  $year = date('Y');

  /*
* Получаем текущий час в виде строки от 00 до 23
* и приводим строку к целому числу от 0 до 23
*/
$hour = (int) date('H');
$welcome = ''; // Инициализируем переменную для приветствия

if($hour >= 0 and $hour <= 6){
  $welcome = 'Доброй ночи';
}
elseif ($hour >= 6 and $hour <= 12){
  $welcome = 'Доброе утро';
}
elseif ($hour >= 12 and $hour <= 18){
  $welcome = 'Добрый день';
}
elseif ($hour >= 12 and $hour <= 18){
  $welcome = 'Добрый день';
}
elseif ($hour >= 18 and $hour <= 23){
  $welcome = 'Добрый вечер';
}
else{
  $welcome = 'Доброй ночи';
};

$leftMenu = [
  ['link'=>'Домой', 'href'=>'index.php'],
  ['link'=>'О нас', 'href'=>'index.php?id=about'],
  ['link'=>'Контакты', 'href'=>'index.php?id=contact'],
  ['link'=>'Таблица умножения', 'href'=>'index.php?id=table'],
  ['link'=>'Калькулятор', 'href'=>'index.php?id=calc']
];


?>