<?php
include_once("wordix.php");



/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ****COMPLETAR***** */


/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

// FUNCIÓN 1 COLECCION DE PALABRAS

  /**
   * Obtiene una colección de palabras
   * @return array
   */
   function cargarColeccionPalabras()
  {  
    // string[] $coleccionPalabras

    // Creamos el arreglo de palabras
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "TARDE", "SALTO", "CLIMA", "TENIS", "HIELO"
    ];
    
    // Retornamos el arreglo
    return ($coleccionPalabras);
  }


// FUNCIÓN 2 COLECCION DE PARTIDAS 

  /** Este modulo retorna un arreglo de ejemplos de partidas
   * @return array
   */
  function cargarPartidas()
   {
       // string[] $arrayPartidas

       //Creamos un arreglo de ejemplos de partidas
       $arrayPartidas[0] = ["palabraWordix"=> "GOTAS" , "jugador" => "matias", "intentos"=> 5, "puntaje" =>0 ];
       $arrayPartidas[1] = ["palabraWordix"=> "QUESO" , "jugador" => "abril", "intentos"=> 6, "puntaje" =>7 ];
       $arrayPartidas[2] = ["palabraWordix"=> "TINTO" , "jugador" => "agustin", "intentos"=> 3, "puntaje" =>13 ];
       $arrayPartidas[3] = ["palabraWordix"=> "NAVES" , "jugador" => "lauty", "intentos"=> 4, "puntaje" =>12 ];
       $arrayPartidas[4] = ["palabraWordix"=> "PISOS" , "jugador" => "martin", "intentos"=> 6, "puntaje" =>6 ];
       $arrayPartidas[5] = ["palabraWordix"=> "MELON" , "jugador" => "ciro", "intentos"=> 2, "puntaje" =>16 ];
       $arrayPartidas[6] = ["palabraWordix"=> "YUYOS" , "jugador" => "ezequiel", "intentos"=> 6, "puntaje" =>0 ];
       $arrayPartidas[7] = ["palabraWordix"=> "VERDE" , "jugador" => "juan", "intentos"=> 5, "puntaje" =>11 ];
       $arrayPartidas[8] = ["palabraWordix"=> "PIANO" , "jugador" => "martina", "intentos"=> 3, "puntaje" =>9 ];
       $arrayPartidas[9] = ["palabraWordix"=> "MUJER" , "jugador" => "matias", "intentos"=> 1, "puntaje" =>15 ];
       $arrayPartidas[10] = ["palabraWordix"=> "RASGO" , "jugador" => "agustin", "intentos"=> 4, "puntaje" =>9 ];
    
       // Retornamos el arreglo
       return $arrayPartidas;
   }

// FUNCIÓN 3 MENU DE OPCIONES

    /** Este modulo muestra un menu de opciones
    */

 function seleccionarOpcion()
 {
    do {
           // Mostrar menú de opciones
           echo "\n************MENU DE OPCIONES************\n";
           echo "1) Jugar al wordix con una palabra elegida\n";
           echo "2) Jugar al wordix con una palabra aleatoria\n";
           echo "3) Mostrar una partida\n";
           echo "4) Mostrar la primer partida ganadora\n";
           echo "5) Mostrar resumen de Jugador\n";
           echo "6) Mostrar listado de partidas ordenadas por jugador y por palabra\n";
           echo "7) Agregar una palabra de 5 letras a Wordix\n";
           echo "8) Salir\n";

           // Solicitar opción 
           echo "\nOPCION>>> ";
           $opcion = trim(fgets(STDIN));
        
           // Validar que la opción sea correcta
           if ($opcion < 1 || $opcion > 8) {
           echo "\nOpcion incorrecta. Intente de nuevo (entre 1-8).\n";
        }
        
        } while ($opcion != 8);            
 }
 
 
// FUNCIÓN 4 leerPalabra5Letras (WORDIX)
// FUNCIÓN 5 solicitarNumeroEntre (WORDIX)

// FUNCIÓN 6 MOSTRAR PARTIDA

  /** Este modulo recibe un numero y muestra por pantalla una partida
   * @param int $numeroPartida
   */

   function mostrarPartida($numeroPartida)
       {
          // string[] $llamarMod
          // int $numeroTotalDeArreglo
          // boolean $terminar

          // LLamamos al modulo de partidas
          $llamarMod = cargarPartidas();
          
          // Contamos el total de elementos del arreglo
          $numeroTotalDeArreglo = count($llamarMod);
          
          // Asignamos a una variable la condición false
          $terminar = false;

          // Armamos un do while para que se repita en caso que el numero de partida no sea el correcto
          do{
                // Comprobamos si el numero esta en el rango de elemntos de nuestra colección de partidas
                if($numeroPartida == 0 || $numeroPartida < $numeroTotalDeArreglo)
                {
                     echo "*****************************************************"."\n";
                     echo "Partida WORDIX " . $numeroPartida . ": palabra " . $llamarMod[$numeroPartida]["palabraWordix"]."\n";
                     echo "Jugador: " . $llamarMod[$numeroPartida]["jugador"]."\n";
                     echo "Puntaje: " . $llamarMod[$numeroPartida]["puntaje"]. " puntos"."\n";
                     echo "Intento: " . $llamarMod[$numeroPartida]["intentos"]."\n";
                     echo "*****************************************************";
                     
                     // Cambiamos la variable a true para terminar el while
                     $terminar = true;
                } else {
                     // Solicitamos que seleccione un numero entre un rango determinado usando el modulo de WORDIX
                     $numeroPartida = solicitarNumeroEntre(0,$numeroTotalDeArreglo);
                }
            }while($terminar == false);
        }

// FUNCIÓN 7 AGREGAR PALABRA

/** Esta funcion agrega una palabra nueva a una colección y retorna la colección actualizada
 * @param string[] $coleccionPalabrasNuevo
 * @param string $palabraNueva
 * @return array
*/

function agregarPalabra($coleccionPalabrasNuevo, $palabraNueva)
{
    // int $i, $contArreglo
    // boolean $repetida, $verificacionPalabra

    // Variable iniciada en 0
    $i = 0;      
    // Contamos el total del arreglo 
    $contArreglo = count($coleccionPalabrasNuevo);
    // Verificamos la palabra
    do{
     // Iniciamos una variable en falso
     $repetida = false;      
     // Verificamos si la palabra es una palabra con el modulo de WORDIX
     $verificacionPalabra = esPalabra($palabraNueva);    
     // Si la verificacion es falsa pide una palabra nueva
     if($verificacionPalabra == false || strlen($palabraNueva) != 5)
        {
            // Mostramos un error en la palabra
            echo escribirRojo("Palabra incorrecta.")."\n";
            // Solicitamos palabra nueva con el modulo de WORDIX
            $palabraNueva = leerPalabra5Letras();
            // Cambiamos la variable repetida a true
            $repetida = true;
        } else // Si la verificacion es verdadera, verificamos que la palabra no este en la colección
        {
            // Bucle que verifica la palabra
            while ($i < $contArreglo && $repetida == false)
            {
                // Verificamos si son iguales
                if($coleccionPalabrasNuevo[$i] == strtoupper($palabraNueva))
                    {
                        // Si son iguales cambiamos la variable repetida a true
                        $repetida = true;
                        // Volvemos la variable $i a 0
                        $i = 0;

                        // Mostramos un cartel que la palabra esta repetida y volvemos a solicitar otra palabra
                        echo escribirRojo("Esta palabra ya esta en la colección. Intente con otra.")."\n";
                        $palabraNueva = leerPalabra5Letras($palabraNueva);
                    } else {
                        // Si son desiguales sumamos la variable $i
                        $i++;
                    }
            }
        }
                
    }while($repetida == true);
       // Agregamos la palabra a la nueva coleccion
     if($verificacionPalabra == false || strlen($palabraNueva) != 5)
       $coleccionPalabrasNuevo[$contArreglo] = strtoupper($palabraNueva);
       
       // Retornamos la coleccion
       return $coleccionPalabrasNuevo;

}

/*echo "Palabra: ";
$r = trim(fgets(STDIN));

$g = cargarColeccionPalabras();

$e = agregarPalabra($g, $r);

print_r($e);*/






// FUNCIÓN 8 PRIMER PARTIDA GANADA

/**
 * 
 */

 function primerPartidaGanada($arrayPartidas, $nombreJugador)
 {
    $indice = -1;
    $i = 0;
    $a = 0;
    $contPartidas = count($arrayPartidas);
    $encontrado = false;
    while ($i < $contPartidas && !$encontrado)
    {
        if($arrayPartidas[$i]["jugador"] == strtolower($nombreJugador) && $arrayPartidas[$i]["puntaje"] > 0)
        {
            $indice = $i;
            $encontrado = true;
        }elseif($arrayPartidas[$i]["jugador"] != $nombreJugador){
            $a++;
        }
        $i++;
    }

    if ($a == $contPartidas && $encontrado == false){
     $indice = -2;
    }
    return $indice;
 }

/*$f = cargarPartidas();
echo "Ingrese un nombre para ver su primer partida ganada: ";
$m = trim(fgets(STDIN));

$k = primerPartidaGanada($f, $m);

print_r($k);*/

// FUNCIÓN 9 RESUMEN JUGADOR

/**
 * 
 */

 function mostrarResumen($arrayPartidas, $nombreJugador)
 {
    $i = 0;
    $puntajeTotal = 0;
    $partidasTotales = 0;
    $contPartidasGanadas = 0;
    $estadisticasJugador = [ "jugador" =>0, "partida" =>0, "puntaje" =>0,  "victorias" =>0];

    while($nombreJugador == $arrayPartidas[$i]["jugador"]){
        if($arrayPartidas[$i]["puntaje"] > 0){
        $contPartidasGanadas++;
        }
        $puntaje = $arrayPartidas[$i]["puntaje"];
        $puntajeTotal += $puntaje;

        $partidasTotales++;

        $estadisticasJugador["jugador"] = $arrayPartidas[$i]["jugador"];
        $estadisticasJugador["partida"] = $partidasTotales;
        $estadisticasJugador["puntaje"] = $puntajeTotal;
        $estadisticasJugador["victorias"] = $contPartidasGanadas;
        

        


    }
    $estadisticasJugador["jugador"] = $arrayPartidas[$i]["jugador"];
        $estadisticasJugador["partida"] = $partidasTotales;
        $estadisticasJugador["puntaje"] = $puntajeTotal;
        $estadisticasJugador["victorias"] = $contPartidasGanadas;
 }



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
