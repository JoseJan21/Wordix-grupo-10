<?php
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "JAMON", "ROSAS", "VACAS", "MOVIL", "ANIME"
    ];

    return ($coleccionPalabras);
}

function cargarPartidas( )
{  
    $coleccionPartidas=[];
    $coleccionPartidas[0]=["palabrawordix"=>"vacas", "jugador"=>"mari", "intentos"=> 6 , "puntaje"=> 0 ];
    $coleccionPartidas[1]=["palabrawordix"=>"mujer", "jugador"=>"marian", "intentos"=> 4 , "puntaje"=> 12 ];
    $coleccionPartidas[2]=["palabrawordix"=>"gatos", "jugador"=>"maria", "intentos"=> 5 , "puntaje"=> 12 ];
    $coleccionPartidas[3]=["palabrawordix"=>"gotas", "jugador"=>"jose", "intentos"=> 2 , "puntaje"=> 15 ];
    $coleccionPartidas[4]=["palabrawordix"=>"huevo", "jugador"=>"juan", "intentos"=> 4 , "puntaje"=> 11 ];
    $coleccionPartidas[5]=["palabrawordix"=>"queso", "jugador"=>"manu", "intentos"=> 3 , "puntaje"=> 13 ];
    $coleccionPartidas[6]=["palabrawordix"=>"fuego", "jugador"=>"pablo", "intentos"=> 5 , "puntaje"=> 9 ];
    $coleccionPartidas[7]=["palabrawordix"=>"casas", "jugador"=>"santos", "intentos"=> 3 , "puntaje"=> 14 ];
    $coleccionPartidas[8]=["palabrawordix"=>"tinto", "jugador"=>"manu", "intentos"=> 1 , "puntaje"=> 17 ];
    $coleccionPartidas[9]=["palabrawordix"=>"piano", "jugador"=>"nisman", "intentos"=> 2 , "puntaje"=> 14 ];
    $coleccionPartidas[10]=["palabrawordix"=>"pisos", "jugador"=>"nisman", "intentos"=> 4 , "puntaje"=> 14 ];
    $coleccionPartidas[11]=["palabrawordix"=>"verde", "jugador"=>"marti", "intentos"=> 3 , "puntaje"=> 14 ];

    return($coleccionPartidas);
}

echo "Ingrese nombre de usuario: ";
$nombreUsuario = trim(fgets(STDIN));
$nombreUsuario = strtolower($nombreUsuario);


$coleccionPalabras= cargarColeccionPalabras();
$num= 1;
$indicePalabra= array_rand($coleccionPalabras, $num);
$palabra= $coleccionPalabras[$indicePalabra];
echo $palabra . "\n";
/*
$coleccionPalabras= cargarColeccionPalabras();
echo "ingrese indice: ";
$indicePalabra= trim(fgets(STDIN));
$palabra= $coleccionPalabras[$indicePalabra];
echo $palabra . "\n";
/*
//if($nombreUsuario==$coleccionPartidas[$i]["jugador"]){
  //  $palabraUsada= $coleccionPartidas[$i]["palabrawordix"];
    //if($palabra!=$palabraUsada){
*/
$coleccionPartidas= cargarPartidas();
$iMax= count($coleccionPartidas);
$i= 0;
$palabraHabilitada= " ";
$palabraNoHabilitada= " ";

/*
$palabraDisponible= true;
for ($i=0; $i<$iMax; $i++){
    $palabrawordix=strtoupper($coleccionPartidas[$i]["palabrawordix"]);
    if($palabrawordix==$palabra){
        $jugador= $coleccionPartidas[$i]["jugador"];
        if ($jugador==$nombreUsuario){
            $palabraDisponible= false;
        } 
    }
}

$string= $palabraDisponible ? $palabra . " esta disponible" : $palabra . " ya fue usada";
echo $string;
*/
$palabraDisponible=true;
while($i<$iMax&&$palabraDisponible){
    $palabrawordix=strtoupper($coleccionPartidas[$i]["palabrawordix"]);
    if($palabrawordix==$palabra){
        $jugador= $coleccionPartidas[$i]["jugador"];
        if ($jugador==$nombreUsuario){
            $palabraDisponible= false;
        } 
    }
    $i++;
}
$string= $palabraDisponible ? $palabra . " esta disponible" : $palabra . " ya fue usada";
echo $string;