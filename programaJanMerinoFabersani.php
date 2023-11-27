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
//Inicialización de variables:
$coleccionPalabras = cargarColeccionPalabras();

//FUNCION 2

/**
 * crea un arreglo que contiene todas las partidas guardadas 
 * @return array
 */
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
//Inicialización de variables:
$coleccionPartidas = cargarPartidas();

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
//Linea 34

//FUNCION 6
/**
 * 
 * una funcion que muestra los datos de la partida dado un numero 
 * @param int $numeroSeleccionado 
 * @param array $coleccionPartidas
 */
function informacionPartida($coleccionPartidas,$numeroSeleccionado)
{  
    $coleccionPartidas = cargarPartidas();   

    echo "Partida WORDIX ";
    echo $numeroSeleccionado . ": palabra ";
    echo strtoupper($coleccionPartidas[$numeroSeleccionado]["palabrawordix"])."\n";
    echo "Jugador: ". $coleccionPartidas[$numeroSeleccionado]["jugador"] ."\n";
    echo "Puntaje: ". $coleccionPartidas[$numeroSeleccionado]["puntaje"] ." puntos \n";
    echo "Intento: ". $coleccionPartidas[$numeroSeleccionado]["intentos"] . "\n";  
    
} 

//FUNCION 7
/**
 * Los parametros de entrada son la colección de palabras y una palabra, y la función retorna la colección modificada al agregarse la nueva palabra.
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

    // int $indice

    $indice = -1;

    // Iteramos sobre cada partida en la colección.
    foreach ($coleccionPartidas as $clave => $partida){
        /* Asegura si el jugador de la partida es el jugador que estamos buscando
        y si el puntaje de la partida es mayor que cero (lo que indica que la partida fue ganada)*/
        if ($partida['jugador'] == $jugador && $partida['puntaje'] > 0){
            $indice = $clave; // Actualizamos el índice con el valor actual.
            break; // Terminamos el bucle cuando encontramos la primera partida ganada.
        }
    }

    return $indice;
}


//FUNCION 9   
/**
 * 
 * una funcion que devuelve un array con el resumen de todas las partidas del jugador 
 * @param array $coleccionPartidas 
 * @param string $nombreDeJugador
 * @return array
 */
function coleccionPartidasJugador($nombreDeJugador){
    // Llamamos a la función para obtener el arreglo original
    $coleccionPartidas = cargarPartidas();
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
 * Esta funcion es similar a la cmp descripta en el pdf sobre arreglos donde se utiliza la funcion predefinida uasort.
 * @param string $a
 * @param string $b
 * @return 
 */
function compararPorNombreJugador($a, $b) {
    return strcmp($a["jugador"], $b["jugador"]);
}

//FUNCION 11
/**
 *se muestra la colección de partidas ordenada por el nombre del jugador y por la palabra.
 *@param array $coleccionPartidas
 */
function partidasOrdenadas($coleccionPartidas){
    $coleccionPartidas = cargarPartidas();
    uasort($coleccionPartidas, 'compararPorNombreJugador');
    print_r($coleccionPartidas);
}

//FUNCION 12(EXTRA)
/**
 * Se utiliza para verificar si la palabra seleccionada para jugar ya fue utilizada por el usuario
 * @param int $Palabra
 * @param string $nombreUsuario
 * @param array $coleccionPartidas
 * @return boolean
 */
function palabraDisponible($palabra, $nombreUsuario, $coleccionPartidas){
    $iMax= count($coleccionPartidas);
    $i= 0;
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
    return $palabraDisponible;
}

/**
 * Se utiliza para selecionar una palabra al azar disponible para jugar
 * @param string $nombreUsuario
 * @param array $coleccionPalabras
 * @param array $coleccionPartidas
 * @return string
 */
function palabraAleatoria($nombreUsuario, $coleccionPalabras, $coleccionPartidas) {
    do {
        $indicePalabra = array_rand($coleccionPalabras);//array_rand es una funcion predefinida de php que elige aleatoriamente un indice de la array
        $palabra = $coleccionPalabras[$indicePalabra];
        $palabraDisponible = palabraDisponible($palabra, $nombreUsuario, $coleccionPartidas);
    } while (!$palabraDisponible);
    return $palabra;
}

/**
 * Función principal que maneja el caso 1 y 2
 * @param string $nombreUsuario
 * @param int|null $numeroPalabra 
 */
function jugarPartida($nombreUsuario, $coleccionPalabras, $coleccionPartidas, $numeroPalabra = null) { //El parametro ($numeroPalabra) puede ser nulo o puede ser un entero.

    if ($numeroPalabra === null) {
        $palabra = palabraAleatoria($nombreUsuario, $coleccionPalabras, $coleccionPartidas);
    } else {
        // $numeroPalabra = $numeroPalabra;
        $cantPalabras = count($coleccionPalabras) - 1;
        if ($numeroPalabra < 0 || $numeroPalabra > $cantPalabras) {
            echo "Número de palabra no válido. Debe estar entre 0 y " . $cantPalabras;
            return;
        }

        $palabra = $coleccionPalabras[$numeroPalabra];
        if (!palabraDisponible($palabra, $nombreUsuario, $coleccionPartidas)) {
            echo "La palabra ya fue utilizada por el jugador. Elige otro número de palabra.";
            return;
        }
    }

    $partida = jugarWordix($palabra, $nombreUsuario);

    echo "Partida finalizada. Datos guardados.";
    return $partida;
}

/* ****COMPLETAR***** */

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Proceso:
echo "Ingrese nombre de usuario: ";
$nombreUsuario = trim(fgets(STDIN));
$bienVenida = escribirMensajeBienvenida($nombreUsuario);


do {

    $opcion = seleccionarOpcion();

    switch ($opcion) {
        case 1: 
            // Caso 1: Jugar con número de palabra específico mediante indice
            // str $nombreUsuario int $numMax, $numeroPalabra array $partida

            echo "Ingrese nombre de usuario con el que desea jugar: ";
            $nombreUsuario = trim(fgets(STDIN));
            $nombreUsuario = strtolower($nombreUsuario);

            echo "Ingrese el número de palabra que desea jugar: ";
            $numMax = count($coleccionPalabras) - 1;
            $numeroPalabra = solicitarNumeroEntre(0, $numMax);

            $partida = jugarPartida($nombreUsuario, $coleccionPalabras, $coleccionPartidas, $numeroPalabra);
            array_push($coleccionPartidas, $partida);
            print_r($coleccionPartidas); //prueba provicional para ver el grabado de juego

            break;
        case 2: 
            // Caso 2: Jugar con palabra aleatoria
            // str $nombreUsuario array $partida

            echo "Ingrese nombre de usuario con el que desea jugar: ";
            $nombreUsuario = trim(fgets(STDIN));
            $nombreUsuario = strtolower($nombreUsuario);
            $partida = jugarPartida($nombreUsuario, $coleccionPalabras, $coleccionPartidas, );
            array_push($coleccionPartidas, $partida);
            print_r($coleccionPartidas); //prueba provicional para ver el grabado de juego

            break;
        case 3: 
            //Ingresando el numero de partida se guarda y se utiliza la funcion 6 de la linea 102
            echo "Ingrese un numero de partida: ";
            $nroSeleccionado= trim(fgets(STDIN));
            informacionPartida($coleccionPartidas, $nroSeleccionado);
            break;
        case 4: 
            // Completar qué secuencia de pasos ejecutar si el usuario elige la opción 4
            echo "caso 4\n";

            break;
        case 5: 
            // Completar qué secuencia de pasos ejecutar si el usuario elige la opción 5
            echo "caso 5\n";

            break;
        case 6: 
            //Se muestran las partidas ordenadas utilizando la funcion 11 de la linea 102
            echo partidasOrdenadas($coleccionPartidas);
            break;
        case 7: 
            // Completar qué secuencia de pasos ejecutar si el usuario elige la opción 7
            $nuevaPalabra = leerPalabra5Letras();
            array_push($coleccionPalabras, $nuevaPalabra);

            break;
        case 8: 
            // Salir del bucle
            break;
        default:
            echo "Opción no válida \n";
            break;
    }
} while ($opcion != 8);