<?php

function ganjilgenap($angka,$hasilbagi)
{
    $bil = $angka % $hasilbagi;
    if ($bil == 0)
    {
        echo "Genap";
    }else
    {
        echo "Ganjil";
    }
}

ganjilgenap("15","2");



?>