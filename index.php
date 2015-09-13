<h1>Домашнее задание №1</h1>
<h2>Функция, принимающая массив строк и выводящая каждую строку в отдельном параграфе.</h2>
<?php
function str_paragraf($arr) {
    if(is_array($arr)) {
        foreach($arr as $item){
            echo "<p>{$item}</p>";
        }
    } else {
        echo 'Это не массив';
        return;
    }
}

str_paragraf(array('one', 'two', 'three', 'four'));
?>

<h2>Функция, принимающая 2 параметра ­ массив чисел и строку, обозначающую арифметическое действие, которое нужно выполнить со всеми элементами массива. Функция должна выводить результат на экран.</h2>
<?
function someOperation($arr, $calc) {

    echo implode($calc, $arr).' = ';

    $count = 0;

    foreach($arr as $k => $item) {

        if($k > 0)
        {
            switch($calc) {

                case '-':
                    $count -= $item;
                    break;

                case '+':
                    $count += $item;
                    break;

                case '*':
                    $count *= $item;
                    break;

                case '/':
                    $count /= $item;
                    break;
            }
        } else {
            $count = $item;
        }

    }
    echo $count;
}
someOperation(array(1,2,3,4), '+');
?>

<h2>Функция, принимающая переменное число аргументов, но первым аргументов обязательно должна быть строка, обозначающее арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами.</h2>
<?
function someOperation2($str) {
    if(is_string($str)) {

        if(in_array($str, array('-', '+', '/', '*'))){

            $arr = func_get_args();
            $z = $arr[0];
            array_shift($arr);
            someOperation($arr, $z); // Используем функцию из предыдужего задания

        } else {

            echo 'Первый аргумент не является знаком: - + / *';
            return;
        }

    } else {
        echo 'Первый аргумент не строка';
        return;
    }
}
someOperation2("+", 1, 2, 3, 4);
?>

<h2>Функция принимающая два параметра ­ 2 целых числа. Если вводятся не 2 целых числа ­ то функция должна выводить ошибку на экран. Если пользователь вводит 2 целых числа ­ то ему должна отрисовываться таблица умножение размером со значения параметров, переданных функции. Например, если вызовем нашу функцию таким образом tabl​(4,3), то функция нарисует следующую таблицу</h2>
<?
function someOperation3($int, $int2) {

    if(gettype($int) == 'integer' and gettype($int2) == 'integer') {

        $table = '';
        $table .= '<table border="1">';
        for($i = 1; $i < $int2+1; $i++) {
            $table .= '<tr>';
            for($j = 1; $j < $int+1; ++$j) {

                $table .= '<td>';

                $table .= $j*$i;
                $table .= '</td>';
            }
            $table .= '</tr>';
        }

        $table .= '</table>';


        echo $table;

    } else {
        echo 'Ошибка, только челые числа';
        return;
    }
}
someOperation3(4, 3);
?>

<h2>Функция, принимающая в качестве аргумента массив чисел вида: 1, 22, 5, 66, 3, 57 и возвращает массив по возрастанию: 1, 3, 5, 22, 57, 66</h2>
<?
function someOperation4($arr) {

    if(is_array($arr)) {

        usort($arr, function($a, $b) {

            if ($a == $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        });

        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    } else {
        echo 'Не является массивом';
        return;
    }
}
someOperation4(array(1, 22, 5, 66, 3, 57));
?>

<h2>Рекурсивную функцию, принимающую два целых числа ­ начальное значение и конечное значение. Например, первый аргумент 10, второй ­ 35. Функция должна вывести на список нечетных чисел от 10 до 35.</h2>
<?
function someOperation5($int, $int2) {

    if(gettype($int) == 'integer' and gettype($int2) == 'integer') {

        for($i = $int; $i < $int2; $i++) {
            if($i % 2) {
                echo $i.'<br />';
            }
        }
    } else {
        echo 'Ошибка, только челые числа';
        return;
    }
}
someOperation5(10, 35);
?>

<h2>Функция, получающая 1 параметр (строку) и возвращающая TRUE ­ если строка является палиндромом, FALSE ­ в противном случае.</h2>
<?
function someOperation6($str) {

    if(gettype($str) == "string") {

        preg_match_all('/./us', $str, $ar);
        $strrev_str = implode(array_reverse($ar[0]));

        if($strrev_str == $str) {
            echo 1;
            return true;
        } else {
            echo 0;
            return false;
        }
    } else {
        echo 'Ошибка, только строка';
        return;
    }
}
someOperation6('ротор');

?>































