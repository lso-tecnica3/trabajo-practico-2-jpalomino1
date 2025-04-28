<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
                include "datos_ej7.php";
                print "<table border ='2'>";
                print "<tr><th>Vehiculos</th></tr>";
                $valores_eliminados=0;
                $infracciones=0;
                $valores_dentro_de_rango=0;

                foreach ($velocidades as $patente => $velocidad){
                    if($velocidad<10 or $velocidad>200){
                        unset($velocidades[$patente]);
                        $valores_eliminados=$valores_eliminados+1;
                        if ($velocidad>=120){
                            $infracciones=$infracciones+1;
                            print "<tr bgcolor='red'><td >$patente</td></tr>";
                            $infractores[$patente]=$velocidad;
                        }
                        else{
                            $valores_dentro_de_rango=$valores_dentro_de_rango+1;
                            print "<tr bgcolor='blue'><td >$patente</td></tr>";
                        }
                    }   
                }
                print "</table>";
                print "<table border ='2'>";
                print "<tr><th>Acta de Infraccion</th></tr>";
                print "<tr><td>La cantidad de velocidades dentro del rango válido= $valores_dentro_de_rango</td></tr>";
                print "<tr><td>La cantidad de vehículos en infracción= $infracciones</td></tr>";
                print "<tr><td>La cantidad de velocidades fuera de rango=$valores_eliminados</td></tr>";
                print "</table>";
                $con=1;
                foreach ($infractores as $patente => $velocidad){
                   
                    print "<table border ='2'>";
                    print "<tr style='color:white' bgcolor='black'><th>Acta de Infraccion $con</th></tr>";
                    print "<tr><td>Descripcion de la falta: Exceso de velocidad</td></tr>";
                    print "<tr><td>Patente: $patente</td></tr>";
                    print "<tr><td>Velocidad maxima permitida en el lugar: 120 km/h</td></tr>";
                    print "<tr><td>Velocidad detectada: $velocidad km/h</td></tr>";
                    print "<tr><td>AVISO DE PAGO VOLUNTARIO</td></tr>";
                    print "<tr><td>Total a pagar:50.000 </td></tr>";
                    print "<tr><td>Descuento:$15000 </td></tr>";
                    $con=$con+1;
                    print "</table>";    
                
                }
                            
                    
                ?>
    
</body>
</html>
