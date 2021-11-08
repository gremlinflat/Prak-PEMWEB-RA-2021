<?php

//create function that return prime number
function prime($num)
{
    $prime = array();
    for ($i = 2; $i <= $num; $i++) {
        $prime[$i] = true;
    }
    $sqrtNum = sqrt($num);
    for ($i = 2; $i <= $sqrtNum; $i++) {
        if ($prime[$i] == true) {
            for ($j = $i * $i; $j <= $num; $j += $i) {
                $prime[$j] = false;
            }
        }
    }
    foreach ($prime as $key => $value) {
        if ($value == true) {
            echo $key . " ";
        }
    }
}

echo "<h1>Soal 3 Prima</h1><br>";
$num=100;
echo "Hasil bilangan prima dari 1 - $num yaitu = "; prime($num);
?>