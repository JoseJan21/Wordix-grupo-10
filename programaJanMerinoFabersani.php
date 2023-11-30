<?php
include_once("wordix.php");
/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github 
Jan Moretti, Jose Ignacio. FAI-4986. TUDW. jose.jan@est.fi.uncoma.edu.ar. josejan21
Merino Rodriguez, Ariadna Solange. FAI-4899. TUDW. ariadna.merino@est.fi.uncoma.edu.ar. arimerino
Fabersani, Alessio. FAI-4558. TUDW. alessio.fabersani@est.fi.uncoma.edu.ar. doc146XD
*/

/* ****COMPLETAR***** */

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

//FUNCION 1
/**
 * Obtiene una colección de palabras
 * @return array
 */
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


//FUNCION 2

/**
 * crea un arreglo que contiene todas las partidas guardadas 
 * @return array
 */
function cargarPartidas( )
{  
    // $coleccionPartidas=[];
    // $coleccionPartidas[0]=["palabraWordix"=>"vacas", "jugador"=>"mari", "intentos"=> 0 , "puntaje"=> 0 ];
    // $coleccionPartidas[1]=["palabraWordix"=>"mujer", "jugador"=>"marian", "intentos"=> 4 , "puntaje"=> 12 ];
    // $coleccionPartidas[2]=["palabraWordix"=>"gatos", "jugador"=>"maria", "intentos"=> 5 , "puntaje"=> 12 ];
    // $coleccionPartidas[3]=["palabraWordix"=>"gotas", "jugador"=>"jose", "intentos"=> 2 , "puntaje"=> 15 ];
    // $coleccionPartidas[4]=["palabraWordix"=>"huevo", "jugador"=>"juan", "intentos"=> 4 , "puntaje"=> 11 ];
    // $coleccionPartidas[5]=["palabraWordix"=>"queso", "jugador"=>"manu", "intentos"=> 3 , "puntaje"=> 13 ];
    // $coleccionPartidas[6]=["palabraWordix"=>"fuego", "jugador"=>"pablo", "intentos"=> 5 , "puntaje"=> 9 ];
    // $coleccionPartidas[7]=["palabraWordix"=>"casas", "jugador"=>"santos", "intentos"=> 3 , "puntaje"=> 14 ];
    // $coleccionPartidas[8]=["palabraWordix"=>"tinto", "jugador"=>"manu", "intentos"=> 1 , "puntaje"=> 17 ];
    // $coleccionPartidas[9]=["palabraWordix"=>"piano", "jugador"=>"nisman", "intentos"=> 2 , "puntaje"=> 14 ];
    // $coleccionPartidas[10]=["palabraWordix"=>"pisos", "jugador"=>"nisman", "intentos"=> 4 , "puntaje"=> 14 ];
    // $coleccionPartidas[11]=["palabraWordix"=>"verde", "jugador"=>"marti", "intentos"=> 3 , "puntaje"=> 14 ];
    // $coleccionPartidas[12]=["palabraWordix"=>"vacas", "jugador"=>"nisman", "intentos"=> 0 , "puntaje"=> 0 ];
    // return($coleccionPartidas);
    $coleccion = [];
    $pa1 = ["palabraWordix" => "SUECO", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
    $pa2 = ["palabraWordix" => "YUYOS", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
    $pa3 = ["palabraWordix" => "HUEVO", "jugador" => "zrack", "intentos" => 3, "puntaje" => 9];
    $pa4 = ["palabraWordix" => "TINTO", "jugador" => "cabrito", "intentos" => 4, "puntaje" => 8];
    $pa5 = ["palabraWordix" => "RASGO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
    $pa6 = ["palabraWordix" => "VERDE", "jugador" => "cabrito", "intentos" => 5, "puntaje" => 7];
    $pa7 = ["palabraWordix" => "CASAS", "jugador" => "kleiton", "intentos" => 5, "puntaje" => 7];
    $pa8 = ["palabraWordix" => "GOTAS", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
    $pa9 = ["palabraWordix" => "ZORRO", "jugador" => "zrack", "intentos" => 4, "puntaje" => 8];
    $pa10 = ["palabraWordix" => "GOTAS", "jugador" => "cabrito", "intentos" => 0, "puntaje" => 0];
    $pa11 = ["palabraWordix" => "FUEGO", "jugador" => "cabrito", "intentos" => 2, "puntaje" => 10];
    $pa12 = ["palabraWordix" => "TINTO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];

    array_push($coleccion, $pa1, $pa2, $pa3, $pa4, $pa5, $pa6, $pa7, $pa8, $pa9, $pa10, $pa11, $pa12);
    return $coleccion;
}


//FUNCION 3
/**
 * Muestra las opciones del menú en pantalla y le solicita al usuario una opcion
 * @return int
 */
function seleccionarOpcion(){
    
    //int $opcion

    echo "\nMenú de opciones:\n";
    echo "1) Jugar al wordix con una palabra elegida\n";
    echo "2) Jugar al wordix con una palabra aleatoria\n";
    echo "3) Mostrar una partida \n";
    echo "4) Mostrar la primer partida ganadora\n";
    echo "5) Mostrar resumen de Jugador\n";
    echo "6) Mostrar listado de partidas ordenadas por jugador y por palabra\n";
    echo "7) Agregar una palabra de 5 letras a Wordix\n";
    echo "8) salir\n";

    $opcion = solicitarNumeroEntre(1, 8);
    
    return $opcion;
}

//FUNCION 4
//Linea 156 de wordix.php

//FUNCION 5
//Linea 34 de wordix.php

//FUNCION 6
/**
 *Muestra las estaditicas del jugador en base al indice seleccionado
 *@param array $resumenDelJugador
 *@param string  $numeroPartida Recibe ($nroSeleccionado y $primeraPartidaDelJugador)
 * ($nroSeleccionado) es un indice seleccionado por el caso 3 y ($primeraPartidaDelJugador) es el indice de la primer partida ganada
 *@param string|null $nombreDelJugador
 */
 function estadisticasJugador($coleccionPartidas, $numeroPartida, $nombreDelJugador = null){
    //string $nombreDelJugador array $resumenDelJugador, $primeraPartidaDelJugador
        
    if($numeroPartida>=0){
        
        echo"******************************************************************" . " \n";
        echo "Partida WORDIX  $numeroPartida\n";
        echo "Palabra:  ";
        echo strtoupper($coleccionPartidas[$numeroPartida]["palabraWordix"])."\n";
        echo "Jugador: ". $coleccionPartidas[$numeroPartida]["jugador"] ."\n";
        echo "Puntaje: ". $coleccionPartidas[$numeroPartida]["puntaje"] ." puntos \n";
        if($coleccionPartidas[$numeroPartida]["intentos"] > 0){
            echo "Intento: adivino la palabra en ". $coleccionPartidas[$numeroPartida]["intentos"] . " intentos  \n";
        }else{
            echo "No adivinó la palabra\n";
        }
        echo"******************************************************************" . " \n";
        //   echo "la infomacion ". $infomacionDeLaPartida. "\n"; 
        //   echo "esto:".$primeraPartidaDelJugador;

    }elseif($numeroPartida == -1){
        echo "Este usuario no tiene partidas registradas";
    }elseif($numeroPartida == -2){
        echo"el jugador ". $nombreDelJugador." no gano ninguna partida \n";
    } 
    }

//FUNCION 7
/**
 * Los parametros de entrada son la colección de palabras y una palabra, 
 * y la función retorna la colección modificada al agregarse la nueva palabra.
 * @param array $coleccionPalabras
 * @param string $palabra
 * @return array
 */
function agregarPalabra($coleccionPalabras, $palabra){
    //Int $indice
    $indice= count($coleccionPalabras);
    $coleccionPalabras[$indice]= $palabra;
    return $coleccionPalabras;
}

//FUNCION 8
/**
 * Recibe por parametro una colección de partidas y el nombre de un jugador,
 * retorna el índice de la primer partida ganada por dicho jugador.
 * Si el jugador no ganó ninguna partida, la función retorna -1.
 * @param array $coleccionPartidas
 * @param string $jugador
 * @return int
 */
function primerPartidaGanada($coleccionPartidas, $jugador){
    $indice = -1;
    $clave = 0;
    $cantPartidas = count($coleccionPartidas);
    // Mientras haya partidas por revisar y no hayamos encontrado una partida ganada.
    while ($clave < $cantPartidas && ($indice == -1 || $indice == -2)) {
        // $índice == -1: Verifica si el índice ($índice) sigue siendo -1. 
        //Si se actualiza a un valor diferente de -1, significa que se ha encontrado una partida ganada y el bucle debe detenerse.
        $partida = $coleccionPartidas[$clave];
        $stop= true;

        // Asegura si el jugador de la partida es el jugador que estamos buscando
        // y si el puntaje de la partida es mayor que cero (lo que indica que la partida fue ganada).
        if ($partida['jugador'] == $jugador && $partida['puntaje'] > 0) {
            $indice = $clave; // Actualizamos el índice con el valor actual.
            $stop= false;
        }elseif (($partida['jugador'] == $jugador && $partida['puntaje'] == 0) && $stop){
            $indice= -2;
        } else {
            $indice= -1;
        }
        // Incrementamos la clave para pasar a la siguiente partida.
        $clave++;
    }
    return $indice;
}

//FUNCION 9   
/**
 * una funcion que devuelve un array con el resumen de todas las partidas del jugador 
 * @param string $nombreDeJugador
 * @return array
 */
function resumenDePartidasDeJugador($coleccionPartidas, $nombreDeJugador){
    // Llamamos a la función para obtener el arreglo original
    //  Array $coleccionPartidas, $resumenJugador
    $resumenJugador=[];
    foreach ($coleccionPartidas as $partida) {
        if ($partida["jugador"] == $nombreDeJugador){
            // guardamos la partida filtrada con el nombre del jugador dentro de arreglo $resumenJugador
            $resumenJugador[] = $partida; 
        }
    }
    return $resumenJugador; 
}

//FUNCION 10
/**
 * Solicita al usuario el nombre de un jugador y retorna el nombre en minúsculas.
 * Y asegura que el nombre del jugador comience con una letra.
 * @return str
 */
function solicitarJugador(){
    //int $nombreJugador

    echo "Ingrese el nombre del jugador: \n";
    $nombreJugador = trim(fgets(STDIN));

    /* Asegura que el nombre ingresado comience con una letra,
    el bucle seguirá pidiendo al usuario que ingrese el nombre hasta que cumpla con esta condición.*/
    while (!ctype_alpha($nombreJugador[0])) {
        echo "El nombre del jugador NO comienza con una letra. Ingrese de nuevo: \n";
        $nombreJugador = trim(fgets(STDIN));
    }

    // Funcion strtolower: Convierte el nombre a minúsculas
    $nombreJugador = strtolower($nombreJugador);

    return $nombreJugador;
}

//FUNCION COMPLEMENTARIA A LA 11
/**
 * Definicion de la función de comparación, esta funcion es similar a la cmp descripta en el pdf sobre arreglos 
 * donde se utiliza la funcion predefinida uasort.
 * @param string $a
 * @param string $b
 * @return 
 */
function compararPorNombreYPalabra($partidaA, $partidaB) {
    // Comparar por el nombre del jugador
    $resultado = strcmp($partidaA["jugador"], $partidaB["jugador"]);

    // Si los nombres son iguales, comparar por la palabraWordix
    if ($resultado == 0) {
        $resultado = strcmp($partidaA["palabraWordix"], $partidaB["palabraWordix"]);
    }

    return $resultado;
}


//FUNCION 11
/**
 *se muestra la colección de partidas ordenada por el nombre del jugador y por la palabra.
 *@param array $coleccionPartidas
 */
function partidasOrdenadas($coleccionPartidas){
    // Utilizar uasort para ordenar el array directamente
    uasort($coleccionPartidas, 'compararPorNombreYPalabra');
    print_r($coleccionPartidas);
}


//FUNCION 12(EXTRA)
/**
 * Se utiliza para verificar si la palabra seleccionada para jugar ya fue utilizada por el usuario
 * @param int $palabra
 * @param string $nombreUsuario
 * @param array $coleccionPartidas
 * @return boolean
 */
function palabraDisponible($palabra, $nombreUsuario, $coleccionPartidas){
    $iMax= count($coleccionPartidas);
    $i= 0;
    $palabraDisponible=true;
    while($i<$iMax&&$palabraDisponible){
        $palabraWordix=strtoupper($coleccionPartidas[$i]["palabraWordix"]);
        if($palabraWordix==$palabra){
            $jugador= $coleccionPartidas[$i]["jugador"];
            if ($jugador==$nombreUsuario){
                $palabraDisponible= false;
            } 
        }
        $i++;
    }
    return $palabraDisponible;
}

//FUNCION 13 (EXTRA)
/**
 * Se utiliza para selecionar una palabra al azar disponible para jugar
 * @param string $nombreUsuario
 * @param array $coleccionPalabras
 * @param array $coleccionPartidas
 * @return string
 */
function palabraAleatoria($nombreUsuario, $coleccionPalabras, $coleccionPartidas) {
    do {
        $indicePalabra = array_rand($coleccionPalabras);
        //array_rand es una funcion predefinida de php que elige aleatoriamente un indice de la array

        $palabra = $coleccionPalabras[$indicePalabra];
        $palabraDisponible = palabraDisponible($palabra, $nombreUsuario, $coleccionPartidas);
    } while (!$palabraDisponible);
    return $palabra;
}

//FUNCION 14 (EXTRA)
/**
 * Función principal que maneja el caso 1 y 2, 
 * Determina mediante el parametro $numeroPalabra si la palabra es aleatoria o seleccionada por indice
 * dependiendo si la variable $numeroPalabra recibe un valor o es nulo, ademas en caso de tener un valor 
 * verifica si la palabra esta disponible para el usuario, se llama la funcion jugarWordix y finalmente 
 * se inicializa una array que guarda las palabras disponibles para el jugador, si ninguna palabra se guarda
 * retorna un string.
 * @param string $nombreUsuario
 * @param int|null $numeroPalabra
 * @return array|string 
 */
function jugarPartida($nombreUsuario, $coleccionPalabras, $coleccionPartidas, $numeroPalabra = null) { 
    //El parametro ($numeroPalabra) puede ser nulo o puede ser un entero.
    
    if ($numeroPalabra === null) {
        $palabra = palabraAleatoria($nombreUsuario, $coleccionPalabras, $coleccionPartidas);
    } else {
        // $numeroPalabra = $numeroPalabra;
        $cantPalabras = count($coleccionPalabras);
        if ($numeroPalabra < 0 || $numeroPalabra > $cantPalabras) {
            $partida = "Número de palabra no válido. Debe estar entre 0 y " . ($cantPalabras -1) ."\n";
        }

        $palabra = $coleccionPalabras[$numeroPalabra];
    }

    if (!palabraDisponible($palabra, $nombreUsuario, $coleccionPartidas)) {
        $partida = "La palabra ya fue utilizada por el jugador. Elige otro número de palabra. \n";
    }else{
        $partida = jugarWordix($palabra, $nombreUsuario);
    }

    $palabrasDisponibles = [];

    foreach ($coleccionPalabras as $palabra) {
        if (palabraDisponible($palabra, $nombreUsuario, $coleccionPartidas)) {
            $palabrasDisponibles[] = $palabra;
        }
    }

    if (empty($palabrasDisponibles)) { //Determina si una variable es considerada vacía.
        // Una variable se considera vacía si no existe o si su valor es igual a false. 
        //empty() no genera una advertencia si la variable no existe.
        $partida = "El jugador no tiene más palabras disponibles para jugar.\n";
    }

    return $partida;
}

//FUNCION 15 (EXTRA)
/**
 *se muestra la colección de partidas ordenada por el nombre del jugador y por la palabra.
 *@param array $coleccionPartidas
 *@param string $jugador    
 */
function estadisticasDeJugador ($coleccionPartidas,$jugador){
// int $victoriasTotales, $partidasTotales, $puntajesTotales, $intento1, $intento2, $intento3, $intento14, $intento5, $intento6
//array $coleccionPartidas
    $datosJugador = [];
    $datosJugador = [
        "nombre"            => $jugador,
        "partida"           => 0,
        "puntaje"           => 0,
        "victorias"         => 0,
        "porcentajeVictorias" => 0,
        "intento1"          => 0,
        "intento2"          => 0,
        "intento3"          => 0,
        "intento4"          => 0,
        "intento5"          => 0,
        "intento6"          => 0
    ];

    foreach($coleccionPartidas as $partida){

        if($partida["jugador"] == $jugador){

            // $datosJugador["nombre"] = $jugador;
            $datosJugador["partida"] += 1;
            $datosJugador["puntaje"] += $partida["puntaje"];

            if($partida["puntaje"] > 0){ 
                $datosJugador["victorias"] += 1;
            }else{
                $datosJugador["victorias"] += 0;
            }

            if($partida["intentos"] == 1){

                $datosJugador["intento1"] +=1;
            }elseif($partida["intentos"] == 2){

                $datosJugador["intento2"] += 1;
            }elseif($partida["intentos"] == 3){

                $datosJugador["intento3"] += 1;
            }elseif($partida["intentos"] == 4){

                $datosJugador["intento4"] += 1;
            }elseif($partida["intentos"] == 5){
               
                $datosJugador["intento5"] += 1;
            }elseif($partida["intentos"] == 6){

                $datosJugador["intento6"] += 1;
            }
        }
    }

    if ($datosJugador["partida"] > 0) {
        $datosJugador["porcentajeVictorias"] = ( $datosJugador["victorias"] / $datosJugador["partida"]) * 100;
    } else {
        $datosJugador["porcentajeVictorias"] = 0;
    }
    return $datosJugador;
}


// Funcion coplementaria a la funcion 15
function imprimirEstadisticasDelJugador($datosJugador){

    if($datosJugador["partida"] == 0) {
        echo "El nombre de usuario ingresado no tiene registro de partidas.\n";
    }else{
        echo"******************************************************************" . " \n";
        echo "Nombre: " . $datosJugador["nombre"] . " \n";
        echo "Partida: " . $datosJugador["partida"] . " \n";
        echo "Puntaje: " . $datosJugador["puntaje"] . " \n";
        echo "Victorias: " . $datosJugador["victorias"] . " \n";
        echo "El porcentaje de victorias: ".  $datosJugador["porcentajeVictorias"] ."% \n";
    
        echo "Adivinadas" . " \n";

        echo "intentos1: ". $datosJugador["intento1"] . " \n";
        echo "intentos2: ". $datosJugador["intento2"] . " \n";
        echo "intentos3: ". $datosJugador["intento3"] . " \n";
        echo "intentos4: ". $datosJugador["intento4"] . " \n";
        echo "intentos5: ". $datosJugador["intento5"] . " \n";
        echo "intentos6: ". $datosJugador["intento6"] . " \n";

        echo"******************************************************************" . " \n";
    }
}

//FUNCION 16(EXTRA)
/**
 * Se utiliza para verificar si la palabra ingresada por 
 * el jugador no esta en la coleccion de palabras de juego
 * @param string $palabraNueva
 * @param array $coleccionPartidas
 * @return boolean
 */
function palabraExistente($palabraNueva, $coleccionPalabras){
    $iMax= count($coleccionPalabras);
    $i= 0;
    $palabraDisponible=true;
    while($i<$iMax&&$palabraDisponible){
        $palabra=strtoupper($coleccionPalabras[$i]);
        if($palabra==$palabraNueva){
            $palabraDisponible= false;
        } 
        $i++;
    }
    return $palabraDisponible;
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

/*Este programa esta diseñado para jugar Wordix, se utilizan todas las funciones declaradas arriba 
y en wordix.php a traves de la funcion predefinida switch*/

//Declaración de variables:
/*String $nombreUsuario, $bienVenida, $nuevaPalabra, $palabraNueva,
Int $opcion, $numMax, $numeroPalabra, $nroSeleccionado, 
array $partida, $resumenDelJugador, $primeraPartidaDelJugador, $coleccionPartidas, $estadistica
*/

//Inicialización de arreglo $coleccionPartidas:
$coleccionPartidas = cargarPartidas();
$coleccionPalabras = cargarColeccionPalabras();

//Proceso:
$nombreUsuario = solicitarJugador();
$bienVenida = escribirMensajeBienvenida($nombreUsuario);

do {
    $opcion = seleccionarOpcion();
    switch ($opcion) {
        case 1: 
            // Caso 1: Jugar con número de palabra específico mediante indice
            echo "Ingrese nombre de usuario con el que desea jugar: ";
            $nombreUsuario = trim(fgets(STDIN));
            $nombreUsuario = strtolower($nombreUsuario);
            
            echo "Ingrese el número de palabra que desea jugar: ";
            $numMax = count($coleccionPalabras) - 1;
            $numeroPalabra = solicitarNumeroEntre(0, $numMax);
        
            $partida = jugarPartida($nombreUsuario, $coleccionPalabras, $coleccionPartidas, $numeroPalabra);

            if(is_string($partida)){
                echo $partida;
            }else{
                array_push($coleccionPartidas, $partida);
            }

            // print_r($coleccionPartidas); //prueba provicional para ver el grabado de juego
            break;
        case 2: 
            // Caso 2: Jugar con palabra aleatoria
            $nombreUsuario = solicitarJugador();
            $partida = jugarPartida($nombreUsuario, $coleccionPalabras, $coleccionPartidas);
           
            if(is_string($partida)){
                echo $partida;
            }else{
                array_push($coleccionPartidas, $partida);
            }
            // print_r($coleccionPartidas); //prueba provicional para ver el grabado de juego
            break;
        case 3: 
            //Ingresando el numero de partida se guarda y se utiliza la funcion 6 de la linea 103
            echo "Ingrese un numero de partida: ";
            $nroSeleccionado= solicitarNumeroEntre(0, count($coleccionPartidas)-1);
            estadisticasJugador($coleccionPartidas, $nroSeleccionado);
            break;
        case 4:
            //Caso 5 muestra las estaditicas del nombre que escribio el jugador
            $nombreUsuario = solicitarJugador(); 
            $primeraPartidaDelJugador = primerPartidaGanada($coleccionPartidas, $nombreUsuario); 
            //llama a la funcion 8 primerPartidaGanada (152) que le devuelve el indice de la primer partida ganada de ese jugador

            estadisticasJugador($coleccionPartidas, $primeraPartidaDelJugador, $nombreUsuario);
            break;
        case 5: // tenemos que retornar el arreglo asociativo con todos los datos
            // Completar qué secuencia de pasos ejecutar si el usuario elige la opción 5
            $nombreUsuario = solicitarJugador(); 
            //se guarda la informacion del nombre del jugador
            $estadistica = estadisticasDeJugador($coleccionPartidas, $nombreUsuario); 
            imprimirEstadisticasDelJugador($estadistica);
            //llama al funcion 15 estadisticasDeJugador (343) que ordenan las partidas por el nombre del jugador y por la palabra
            break;
        case 6: 
            //Se muestran las partidas ordenadas utilizando la funcion 11 de la linea 102
            partidasOrdenadas($coleccionPartidas);
            break;
        case 7: 
            // Recibe una palabra de 5 letras, verifica que si ya no esta en la coleccion y finalmente la sube
            $nuevaPalabra = leerPalabra5Letras();
            $palabraNueva = palabraExistente($nuevaPalabra, $coleccionPalabras);
            while(!$palabraNueva){
                echo "Palabra ya ingresada anteriormente.\n";
                $nuevaPalabra = leerPalabra5Letras();
                $palabraNueva = palabraExistente($nuevaPalabra, $coleccionPalabras); 
            }
            array_push($coleccionPalabras, $nuevaPalabra);
            // print_r($coleccionPalabras);
            break;
        case 8: 
            // Salir del bucle
            break;
    }
} while ($opcion != 8);