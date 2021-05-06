<?php

// 1. Написать аналог «Проводника» в Windows для директорий на сервере при помощи итераторов.

$objIterator = new GlobIterator("*.*");
$arrFileList = array();
foreach($objIterator as $objFile):
    $arrFileList[] = $objFile->getFilename();
endforeach;
//Вывод результата
var_dump($arrFileList);


// 2. Определить сложность следующих алгоритмов:
// поиск элемента массива с известным индексом,
O(n)
// дублирование массива через foreach,
O(n)
// рекурсивная функция нахождения факториала числа.
O(n)


// 3. Определить сложность следующих алгоритмов. Сколько произойдет итераций?
// 1)
// $n = 100;
// $array[]= [];

// for ($i = 0; $i < $n; $i++) {
//   for ($j = 1; $j < $n; $j *= 2) {
//      $array[$i][$j]= true;
// } }

O(2+10000)

// 2)
// $n = 100;
// $array[] = [];

// for ($i = 0; $i < $n; $i += 2) {
//   for ($j = $i; $j < $n; $j++) {
//      $array[$i][$j]= true;
// } }

O(2+100)
