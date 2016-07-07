<?php
    $number = array (1,2,3,4,5,6);
    
    echo $number[0];
    echo $number[1];
    echo $number[2];
    echo $number[3];
    
    $alpha = array ('a','b','c');
    echo $alpha[0];
    
    $beta = array(
        0 => 'a',
        1 => 'b',
        2 => 'c',
        );
        $beta[3] = 'd'; //thêm phần tử vào mảng
        unset($beta[1]); //xóa phần tử khỏi mảng
    echo $beta[0];    
    
    
    $car = array (
        'name' => 'Toyota',
        'color' => 'Black',
        'year' => 2014
        );
        'style' => 'Sport';
    echo $car['name'];
    echo $car['color'];
    echo $car['year'];
    echo $car['style'];
    
    echo '<pre>';
    var_dump($car);
    
?>