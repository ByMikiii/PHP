<?php

//Priklad 1
    $a = 10;
    $b = 20;

    $obsah = $a * $b;
    $obvod = 2 * ($a + $b);

    echo "Obdlznik so stranami a= ".$a.", b= ".$b.", ma obvod ". $obvod. " a obsah ". $obsah. ".";
    echo "</br>";

// Priklad 2
    $cena1 = 3500;
    $cena2 = 2800; 
    $cena3 = 1280;
    $cena4 = 1920;
    $cena5 = 4320;
    $odchylka;

    $ceny = array($cena1, $cena2, $cena3, $cena4, $cena5);

    $priemer_cien = array_sum($ceny) / count($ceny);
    
    if($priemer_cien > $cena3){
        $odchylka = $priemer_cien - $cena3;
    } else { $odchylka = $cena3 - $priemer_cien;}

    echo "</br>";
    echo "Odchylka 3. ceny od priemernej ceny je: ".$odchylka. "Kc.";

// Priklad 3
    $znamenia = array("kone", "ovce", "opice", 'kohouta', 'psa', 'vepre', 'krysy', 'buvola', 'tygra', 'zajice', 'draka', 'hada');
    $aktualny_rok = date('Y');

    $aktualne_znamenie = $aktualny_rok - 2015;
    echo "</br>";
    echo "</br>";
    echo "Je rok ". $znamenia[$aktualne_znamenie]. ".";
?> 
