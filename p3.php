<?php
  $a=readline("a=");
  echo "your input is $a\n";
  $b=readline("b=");
  echo "your input is $b\n";
  /*пишем пары в массив для сортировки внутри*/
  for ($i = 1; $i <= $a; $i++) {
    $arr[] = array((int)((string)$i)[0],$i);
  }
  /*сортируем массив по парам*/
  sort($arr);
  print_r ($arr);
?>
