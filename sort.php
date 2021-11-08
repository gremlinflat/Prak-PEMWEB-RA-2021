<?php
    $data= array("larine","aduh","rahman","qifuat","aulia","toda","anevi","samid","zulfi","kifulat");
    
    //sort data with ascending order without function
    function sort_without_function($data){
        for($i=0;$i<count($data);$i++){
            for($j=0;$j<count($data)-1;$j++){
                if($data[$j]>$data[$j+1]){
                    $temp=$data[$j];
                    $data[$j]=$data[$j+1];
                    $data[$j+1]=$temp;
                }
            }
        }
        return $data;
    }
    //print array
    function print_array($data){
        for($i=0;$i<count($data);$i++){
            echo $data[$i].", ";
        }
    }
    

    echo "<h1>Soal 2 Mengurutkan Data</h1><br>";
    echo "Data sebelum pengurutan = "; print_array($data); echo "<br>";
    $data=sort_without_function($data);
    echo "Data setelah pengurutan =     "; print_array($data);  
?>