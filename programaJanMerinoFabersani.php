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

//FUNCION 9


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
