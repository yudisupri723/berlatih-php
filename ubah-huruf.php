<?php
function ubah_huruf($string){

    $kata = "abcdefghijklmnopqrstuvwxyz";
    $output = "";

    for ($i=1; $i < strlen($string); $i++) { 
        # code...
        $position = strpos($kata, $string[$i]);
        $output = substr($kata,$position + 1,1);
    }
    return $output;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>