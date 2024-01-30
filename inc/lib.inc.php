<?php
function drawMenu($menu, $vertical = true) {
  if ($vertical == true){
    echo "<ul>";
    for ($i = 0; $i < count($menu); $i++) {
      echo "<li>";
      echo "<a href='" . $menu[$i]["href"] . "'>" . $menu[$i]["link"] . "</a>";
      echo "</li>";
    }
    echo "</ul>";
  } else {
    echo "<ul>";
    for ($i = 0; $i < count($menu); $i++) {
      echo "<li style='display: inline-block; margin-right: 10px;'>";
      echo "<a href='" . $menu[$i]["href"] . "'>" . $menu[$i]["link"] . "</a>";
      echo "</li>";
    }
    echo "</ul>";
  }
};
function drawTable(int $cols, int $rows, string $color){ 
		 for ($i = 1; $i <= $rows; $i++) { 
			 echo "<tr>"; 
			 for ($j = 1; $j <= $cols; $j++) { 
				 if($i==1 && $j == 1){ 
					 echo "<td style='background-color:$color;'>". $i * $j . "</td>"; 
				 } elseif ($i == 1) { 
					 echo "<td style='background-color:$color;'>". $i * $j . "</td>"; 
				 } elseif ($j == 1){ 
					 echo "<td style='background-color:$color;'>". $i * $j . "</td>"; 
				 } else { 
					 echo "<td>" . $i * $j . "</td>"; 
				 } 
			 } 
		 } 
		 echo "</tr>"; 
 } 

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (!empty($num1) && !empty($num2) && !empty($operator)) {

        $num1 = filter_var($num1, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $num2 = filter_var($num2, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $operator = filter_var($operator, FILTER_SANITIZE_STRING);

        $result = '';
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Ошибка: деление на ноль';
                }
                break;
            default:
                $result = 'Ошибка: неверный оператор';
                break;
        }
    }
}

?>