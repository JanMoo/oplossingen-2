<?php
     $Dieren = array("hond" , "paard" , "bizon" , "leeuw" , "tijger" , "olifant" , "stekelvarken");
    
    $teZoekenDier = "hond";
    $dierGevonden = in_array($teZoekenDier, $Dieren);
    
    
    if($dierGevonden)
    {
        $resultaat = $teZoekenDier . " is gevonden in  de lijst van dieren";
    }
    else
    {
        $resultaat = $teZoekenDier . " is niet gevonden in  de lijst van dieren";
    }
    
    $zoogdieren = array("walvis", "kangoeroe" , "dolfijn");
    $dierenLijst = array_merge($Dieren, $zoogdieren);
    natsort($dierenLijst);
    
    $numbers = array(8, 7, 8, 7, 3, 2, 1, 2, 4);
    
    array_unique($numbers);
    sort($numbers);
    
    
  ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht array functies</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Opdracht array functies: deel 1</h1>

            <ul>
                <li>Maak een array waarin je meer dan 5 dieren plaatst</li>

                <li>Laat het script berekenen hoeveel elementen er in de array zitten en druk af naar het scherm</li>
                <pre><?php print_r(count($Dieren)); ?></pre>

                <li>Maak het mogelijk om met een variabele <code>$teZoekenDier</code> een dier te zoeken in de array, druk tevens een gepaste boodschap af (gevonden/niet gevonden).</li>
                <pre><?php print_r($resultaat); ?></pre>

            </ul> 

            <h1 class="extra">Opdracht array functies: deel 2</h1>

            <ul>
                <li>Ga verder op deel 1 (maar maak een aparte kopie voor, overschrijf het origineel niet!)</li>

                <li>Zorg ervoor dat de array volgens het alfabet gesorteerd wordt ( A -> Z )</li>

                <li>Maak een array <code>$zoogdieren</code> en plaats hier 3 dieren in, voeg vervolgens de 2 arrays met dieren samen in de array <code>$dierenLijst</code></li>
                <?php print_r($dierenLijst); ?>
            </ul>


            <h1 class="extra">Opdracht array functies: deel 3</h1>

            <ul>
                <li>Maak een array met volgende waarden:
                    <p>8, 7, 8, 7, 3, 2, 1, 2, 4</p>
                </li>

                <li>Haal de duplicaten uit de array</li>

                <li>Sorteer de array van groot naar klein</li>
                    <?php print_r($numbers); ?>
            </ul>

        </section>

    </body>
</html>
