<?php
include_once("wordix.php");



/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github 
Jan Moretti, Jose Ignacio. FAI-4986. TUDW. jose.jan@est.fi.uncoma.edu.ar. josejan21


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

//FUNCION 3
/**
 * Muestra las opciones del menú en pantalla y le solicita al usuario una opcion
 * @return int
 */
function seleccionarOpcion(){
    
    //int $opcion

    echo "Menú de opciones:\n";
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


//FUNCION 6
/**
 * 
 * una funcion que muestra los datos de la partida dado un numero 
 * @param int $numeroSeleccionado 
 */
function informacionPartida($numeroSeleccionado)
{  
    $coleccionPartidas = cargarPartidas();   

    echo "Numero de partida seleccionada: ".$numeroSeleccionado  ;
    echo "palabra: ".$coleccionPartidas[$numeroSeleccionado]["palabrawordix"].".";
    echo "jugador: ". $coleccionPartidas[$numeroSeleccionado]["jugador"] .".";
    echo "puntaje: ". $coleccionPartidas[$numeroSeleccionado]["puntaje"] .".";
    echo "intentos:  ". $coleccionPartidas[$numeroSeleccionado]["intentos"] .".";  
    
} 

//FUNCION 7


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


//funcuin 9   
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

//FUNCION 11




/* ****COMPLETAR***** */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/
