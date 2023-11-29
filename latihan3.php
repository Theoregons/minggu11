<?php 

    $nilai = 95;
    if ($nilai > 0 && $nilai < 50) {
        echo "Nilai : E";
    } 
    else if($nilai >= 50 && $nilai < 60){
        echo "Nilai : D";
    }
    else if($nilai >= 60 && $nilai < 70){
        echo "Nilai : C";
    }
    else if($nilai >= 70 && $nilai < 80){
        echo "Nilai : B";
    }
    else if($nilai >= 80 && $nilai < 90){
        echo "Nilai : A";
    }
    else if($nilai >= 90){
        echo "Nilai : A+";
    }
    else {
        echo "inputan nilai salah!";
    }