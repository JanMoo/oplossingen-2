<?php
    $dieren[0]="haan";
    $dieren[1]="kip";
    $dieren[2]="aap";
    $dieren[3]="eend";
    $dieren[4]="vogel";
    $dieren[5]="hond";
    $dieren[6]="leeuw";
    $dieren[7]="tijger";
    $dieren[8]="paard";
    $dieren[9]="bizon";

    $Dieren = array("hond" , "paard" , "bizon" , "leeuw" , "tijger" , "olifant" , "stekelvarken");
    
    $voertuigen = array("landvoertuigen" => array("vespa", "auto"), "watervoertuigen" => array("jetski" , "boot"), "luchtvoertuigen" => array("vliegtuig", "helikopter"));
    
    $getallen = array(1,2,3,4,5);
    $getallenOmgekeerd = array(5,4,3,2,1);
    
    $vermenigvuldiging = $getallen[0]*$getallen[1]*$getallen[2]*$getallen[3]*$getallen[4];
    
    $p = 0;

    for ($i = 0; $i < 5; $i++ ) {
        
    if  (($getallen[$i]%2) != 0 )
    {
        $oneven[$p] = $getallen[$i];
        $p++;
        
    }
    
     $optelling[$i] = $getallen[$i]+ $getallenOmgekeerd[$i];   
    }


    

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht arrays basis</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht arrays basis: deel 1</h1>

            <ul>

                <li>Maak een array waarin je 10 dieren opslaat( doe dit op 2 verschillende manieren )</li>

                <li>Maak een nieuwe array met daarin 5 voertuigen, zorg er voor dat je kan bepalen om welke categorie van voertuig het gaat ( 2-dimensionele array), zoals 'landvoertuigen', 'watervoertuigen', 'luchtvoertuigen'. 
                <p>Wanneer je een <code>var_dump</code> van deze array doet, ziet het resultaat er ongeveer als volgt uit:</p>
                    
                    <ul class="array-notation pre">
                        <li>
                            [ 'landvoertuigen' ] => 
                            <ul>
                                <li>[ 0 ] => 'Vespa'</li>
                                <li>[ 1 ] => 'fiets'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'watervoertuigen' ] => 
                            <ul>
                                <li>[ 0 ] => 'surfplank'</li>
                                <li>[ 1 ] => 'vlot'</li>
                                <li>[ 2 ] => 'schoener'</li>
                                <li>[ 3 ] => 'driemaster'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'luchtvoertuigen' ] => 
                            <ul>
                                <li>[ 0 ] => 'luchtballon'</li>
                                <li>[ 1 ] => 'helicopter'</li>
                                <li>[ 2 ] => 'B52'</li>
                            </ul>
                        </li>
                    </ul>

                </li>

            </ul> 
            <p><?php var_dump($voertuigen) ?></p> <br>
      <pre> <?php print_r($voertuigen) ?></pre>
            <h1 class="extra">Opdracht arrays basis: deel 2</h1>

            <ul>
                <li>Maak een array waarin je de getallen 1, 2, 3, 4, 5 in plaatst</li>

                <li>Vermenigvuldig alle getallen met elkaar en druk af naar het scherm</li>
                <pre><?php print_r($vermenigvuldiging) ?></pre>

                <li>Druk de oneven getallen af (controle in script, niet zelf selecteren welke je afdrukt)</li>
                <pre><?php print_r($oneven) ?></pre>
                <li>Maak een tweede array waarin je de getallen 5, 4, 3, 2, 1 in plaatst</li>

                <li>Tel de getallen uit beide arrays met dezelfde index met elkaar op</li>
                <pre><?php print_r($optelling) ?></pre>
            </ul>
        
        </section>

    </body>
</html>
