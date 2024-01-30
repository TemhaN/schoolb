<?php

$visitCounter = isset($_COOKIE['visitCounter']) ? (int)$_COOKIE['visitCounter'] : 0;

if (date('Y-m-d', isset($_COOKIE['lastVisit']) ? $_COOKIE['lastVisit'] : 0) != date('Y-m-d')) {
    $visitCounter++;
    setcookie('visitCounter', $visitCounter, time() + 31536000);

    $lastVisit = time();
    setcookie('lastVisit', $lastVisit, time() + 31536000);
	if ($visitCounter <= 1) {
		echo "Спасибо что зашли на огонёк <br/>";
	} else {
			echo "Вы зашли к нам $visitCounter раз <br/>";
		}
		echo "Последнее посещение: " . date('Y-m-d H:i:s', $lastVisit);
	} else {
			echo "Добро пожаловать! Вы уже были недавно.";
	}

?>