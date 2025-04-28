<?php
    $temperaturas_bajas =[
        'enero'=>20.2,
        'febrero'=>19.5,
        'marzo'=>18,
        'abril'=>13.6,
        'mayo'=>10.5,
        'junio'=>8.3,
        'julio'=>7.7,
        'agosto'=>8.7,
        'septiembre'=>10.6,
        'octubre'=>13.5,
        'noviembre'=>16,
        'diciembre'=>18.2

    ];
    $temperaturas_altas =[
        'enero'=>30.4,
        'febrero'=>29,
        'marzo'=>26.8,
        'abril'=>23.4,
        'mayo'=>19.3,
        'junio'=>16.6,
        'julio'=>16,
        'agosto'=>17.7,
        'septiembre'=>19.6,
        'octubre'=>23.1,
        'noviembre'=>26.1,
        'diciembre'=>28.5

    ];
    $prom_bajas=0;
    $maxi=1;
    $mes_maxi="";
    $mini=10000;
    $mes_mini="";
    $prom_altas=0;

    foreach ($temperaturas_bajas as $mes => $temperatura){
        $prom_bajas=$prom_bajas+$temperatura;
        if ($temperaturas_altas[$mes]>$maxi){
            $maxi=$temperatura;
            $mes_maxi=$mes;
        }
        if ($temperatura<$mini){
            $mini=$temperatura;
            $mes_mini=$mes;
        }
    }
    foreach ($temperaturas_altas as $mes => $temperatura){
        $prom_altas=$prom_altas+$temperatura;
        
    }
    
    $prom_bajas=$prom_bajas/12;
    $prom_altas=$prom_altas/12;
    $prom_bajas=number_format($prom_bajas,2);
    $prom_altas=number_format($prom_altas,2);
    print"<table border='2' bgcolor='#F5F5DC'>";
    print"<tr style='color:#30D5C8' bgcolor='#F5F5DC'><th>TEMPERATURA BAJA Y ALTAS</th></tr>";
    print"<tr><td>El prom de las bajas:$prom_bajas</td></tr>";
    print"<tr><td> El prom de las altas:$prom_altas</td></tr>";
    print"<tr><td>la tem mas alta fue $maxi, en el mes $mes_maxi</td></tr>";
    print"<tr><td>la tem mas baja fue $mini, en el mes $mes_mini</td></tr>";
    print"</table>";
    
    


?>
