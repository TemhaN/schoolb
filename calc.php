
<style>
  .result {
  font-weight: bold;
}
</style>

<!-- Область основного контента -->
<form action='' method='POST'>
  <label>Число 1:</label>
  <br />
  <input name='num1' type='text' value="<?= isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : '' ?>" />
  <br />
  <label>Оператор: </label>
  <br />
  <input name='operator' type='text' value="<?= isset($_POST['operator']) ? htmlspecialchars($_POST['operator']) : '' ?>" />
  <br />
  <label>Число 2: </label>
  <br />
  <input name='num2' type='text' value="<?= isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : '' ?>" />
  <br />
  <br />
  <input type='submit' value='Считать'>
</form>
<p class="result"><?= isset($result) ? "Результат: $num1 $operator $num2 = $result" : '' ?></p>
<!-- Область основного контента -->
