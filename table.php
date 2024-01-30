<?php
$cols = 0;
$rows = 0;
$color = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$cols = abs((int) $_POST['cols']);
$rows = abs((int) $_POST['rows']);
$color = trim(strip_tags($_POST['color']));
}
$cols = ($cols) ? $cols : 10;
$rows = ($rows) ? $rows : 10;
$color = ($color) ? $color : 'yellow';
?>

<style>
  tr:first-child, td:first-child {
  font-weight: bold;
}
    
table {
  margin-top: 15px;
  text-align: center;
}
</style>

<!-- Область основного контента -->
<form action='<?= $_SERVER['REQUEST_URI']?>' method='POST'>
  <label>Количество колонок: </label>
  <br />
  <input name='cols' type='text' value="<?= isset($_POST['cols']) ? htmlspecialchars($_POST['cols']) : '' ?>" />
  <br />
  <label>Количество строк: </label>
  <br />
  <input name='rows' type='text' value="<?= isset($_POST['rows']) ? htmlspecialchars($_POST['rows']) : '' ?>" />
  <br />
  <label>Цвет: </label>
  <br />
  <input name='color' type='text' value="<?= isset($_POST['color']) ? htmlspecialchars($_POST['color']) : '' ?>" />
  <br />
  <br />
  <input type='submit' value='Создать' />
</form>
<!-- Таблица -->
<table border='1'>
  <?
  drawTable($cols, $rows, $color);
  ?>
</table>
<!-- Таблица -->
<!-- Область основного контента -->
