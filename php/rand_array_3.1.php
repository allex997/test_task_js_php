<?php
    echo '<a>';
    for($i = 0; $i < 100; $i++){
    $arr[] = rand(1, 100);
    print_r(" {$arr[$i]} ");//выводим все числа
    }
    echo '</a>';

    $min = $arr[0]; $index_min = 0;
    $max = $arr[0]; $index_max = 0;

    for($i = 1; $i < 100; $i++) {    
    if($min > $arr[$i]) {
        $min = $arr[$i];
        $index_min = $i;
    }

    if($max < $arr[$i]) {
        $max = $arr[$i];
        $index_max = $i;
    }
    }

    echo '[Min: ' . $min . ', Max: ' . $max . ']';

    $arr[$index_min] = $max;
    $arr[$index_max] = $min;

// Вывод результатов
    echo '<a>';
  for ($i = 0; $i <= 100; $i++)
  print_r(" {$arr[$i]} ");//выводим все числа
  echo '</a>';

?>