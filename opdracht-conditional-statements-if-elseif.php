<?php

	$getal = 50;
    $bovenGrens =0;
    $ondergrens=0;
    $tekst = "";

    if($getal >= 1 && $getal <= 10)
    {
        $bovenGrens = 10;
        $ondergrens = 0;
    }
    elseif($getal >= 10 && $getal <= 20)
    {
       $bovenGrens = 20;
        $ondergrens = 10; 
    }
    elseif($getal >= 20 && $getal <= 30)
    {
       $bovenGrens = 30;
        $ondergrens = 20; 
    }
    elseif($getal >= 30 && $getal <= 40)
    {
       $bovenGrens = 40;
        $ondergrens = 30; 
    }
    elseif($getal >= 40 && $getal <= 50)
    {
       $bovenGrens = 50;
        $ondergrens = 40; 
    }
     elseif($getal >= 50 && $getal <= 60)
    {
       $bovenGrens = 60;
        $ondergrens = 50; 
    }
    elseif($getal >= 60 && $getal <= 70)
    {
       $bovenGrens = 70;
        $ondergrens = 60; 
    }
     elseif($getal >= 70 && $getal <= 80)
    {
       $bovenGrens = 70;
        $ondergrens = 80; 
    }
     elseif($getal >= 80 && $getal <= 90)
    {
       $bovenGrens = 90;
        $ondergrens = 80; 
    }
     elseif($getal >= 90 && $getal <= 100)
    {
       $bovenGrens = 100;
        $ondergrens = 90; 
    }
    else
    {
       $bovenGrens = null;
        $ondergrens = null;  
    }
    
    if(!$bovenGrens == null)
    {
     $tekst= "het getal ligt tussen " .$ondergrens." en ".$bovenGrens;  
    }
    else
    {
        $tekst= "het getal ligt niet tussen 1-100";
    }
    
    $omgekeerdeTekst = strrev($tekst);

    
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht if else if</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht if else if: deel 1</h1>

            <ul>
                <li>Maak een getal met een waarde tussen 1-100</li>
                <li>Zorg ervoor dat het script kan zeggen tussen welke tientallen het getal ligt, bv 'Het getal ligt tussen 20 en 30'.</li>
                <li>Zorg er vervolgens voor dat de boodschap omgekeerd afgedrukt wordt, bv '03 ne 02 nessut tgil lateg teH'.</li>
                <li><?php echo $tekst ?></li>
            </ul>  
        
        </section>

    </body>
</html>
