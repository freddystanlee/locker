<?php

if(isset($_POST['submit'])){

    $loker = $_POST['input']; //parameter nomor loker
    $count = 0; //untuk menentukan ada di kelipatan 18 ke berapa (per 3 lantai mempunyai 18 loker = 1 repetisi/kelipatan)
    $x; //untuk menentukan index lantai mana (1-3)
    $specificfloor;

    if($loker > 0){
        while($loker - 18 >= 0){
            $count++;
            $loker = $loker - 18;
        }
    
        if($loker != 0){
            if($loker <= 5){
                $x = 1;
            } elseif ($loker > 11){
                $x = 3;
            } else{
                $x = 2;
            }
    
            $specificfloor = 3 * $count + $x;
            echo "Loker berikut ada di lantai " . $specificfloor;
    
        } else {
            $specificfloor = 3 * $count;
            echo "Loker berikut ada di lantai " . $specificfloor;
        }
    
    } else {
        echo "Tidak ada loker berikut di bangunan ini";
    }
    

// Lt. 1 tersedia 5 buah loker, nomor 1-5
// Lt. 2 tersedia 6 buah loker, nomor 6-11
// Lt. 3 tersedia 7 buah loker, nomor 12-18

// Lt. 4 tersedia 5 buah loker, nomor 19-23
// Lt. 5 tersedia 6 buah loker, nomor 24-29
// Lt. 6 tersedia 7 buah loker, nomor 30-36
     
   
}
