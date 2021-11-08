<?php
    $num1 = 20;
    $num2 = 6;
    $op = "";

    function calculate($num1,$num2,$op){
        switch($op){
            case "+":
                echo "PENJUMLAHAN<br>";
                echo "Operator : $op<br>";
                echo "Hasil : ", $num1+$num2,"<br>";
                break;
            case "-":
                echo "PENGURANGAN<br>";
                echo "Operator : $op<br>";
                echo "Hasil : ", $num1-$num2,"<br>";
                break;
            case "*":
                echo "PERKALIAN<br>";
                echo "Operator : $op<br>";
                echo "Hasil : ", $num1*$num2,"<br>";
                break;
            case "/":
                echo "PEMBAGIAN<br>";
                echo "Operator : $op<br>";
                echo "Hasil : ", $num1/$num2,"<br>";
                break;
            case "%":
                echo "MODULUS<br>";
                echo "Operator : $op<br>";
                echo "Hasil : ", $num1%$num2,"<br>";
                break;
        }
    }

    echo "<h1>Soal 1 Calculator</h1><br>";
    echo "Bilangan 1 : $num1 <br>";
    echo "Bilangan 2 : $num2 <br><br>";
    echo "Berikut merupakan hasil dari setiap operasi<br><br>";

    calculate($num1,$num2,"+");
    echo "<br>";
    calculate($num1,$num2,"-");
    echo "<br>";
    calculate($num1,$num2,"*");
    echo "<br>";
    calculate($num1,$num2,"/");
    echo "<br>";
    calculate($num1,$num2,"%");

?>