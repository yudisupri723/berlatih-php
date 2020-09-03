<?php


function tentukan_nilai($number){

    if ($number>=85 & $number<=100) {
        echo "Nilai Anda Sangat Baik";
    }else if ($number>=70 & $number<=80) {
        # code...
        echo "Nilai Anda Baik";
    }elseif ($number>=60 & $number <= 70){
        echo "Nilai Anda Cukup";
    }elseif ($number <=60) {
        # code...
        echo "NIlai Anda Kurang";
    }
}

//Test Cases

echo tentukan_nilai(98);//sangat baik
echo "</br>";
echo tentukan_nilai(76);//Baik
echo "</br>";
echo tentukan_nilai(67);//Cukup
echo "</br>";
echo tentukan_nilai(43);//Kurang

?>