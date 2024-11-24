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
       $arrayPartidas[0] = ["palabraWordix"=> "GOTAS" , "jugador" => "Matias", "intentos"=> 5, "puntaje" =>4 ];
       $arrayPartidas[1] = ["palabraWordix"=> "QUESO" , "jugador" => "Abril", "intentos"=> 6, "puntaje" =>7 ];
       $arrayPartidas[2] = ["palabraWordix"=> "TINTO" , "jugador" => "Agustin", "intentos"=> 3, "puntaje" =>10 ];
       $arrayPartidas[3] = ["palabraWordix"=> "NAVES" , "jugador" => "Lauty", "intentos"=> 4, "puntaje" =>6 ];
       $arrayPartidas[4] = ["palabraWordix"=> "PISOS" , "jugador" => "Martin", "intentos"=> 6, "puntaje" =>5 ];
       $arrayPartidas[5] = ["palabraWordix"=> "MELON" , "jugador" => "Ciro", "intentos"=> 2, "puntaje" =>2 ];
       $arrayPartidas[6] = ["palabraWordix"=> "YUYOS" , "jugador" => "Ezequiel", "intentos"=> 6, "puntaje" =>3 ];
       $arrayPartidas[7] = ["palabraWordix"=> "VERDE" , "jugador" => "Juan", "intentos"=> 5, "puntaje" =>11 ];
       $arrayPartidas[8] = ["palabraWordix"=> "PIANO" , "jugador" => "Martina", "intentos"=> 3, "puntaje" =>9 ];
       $arrayPartidas[9] = ["palabraWordix"=> "MUJER" , "jugador" => "Matias", "intentos"=> 1, "puntaje" =>10 ];
       $arrayPartidas[10] = ["palabraWordix"=> "RASGO" , "jugador" => "Agustin", "intentos"=> 4, "puntaje" =>9 ];
    
       // Retornamos el arreglo
       return $arrayPartidas;
   }

// FUNCIÓN 3 MENU DE OPCIONES

    /** Este modulo muestra un menu de opciones
    */

 function seleccionarOpcion()
 {
         // Creamos el menu de opciones
         do{
         echo "\n"."************MENU DE OPCIONES************"."\n";
         echo "\n"."1) Jugar al wordix con una palabra elegida"."\n";
         echo "2) Jugar al wordix con una palabra aleatoria"."\n";
         echo "3) Mostrar una partida"."\n";
         echo "4) Mostrar la primer partida ganadora"."\n";
         echo "5) Mostrar resumen de Jugador"."\n";
         echo "6) Mostrar listado de partidas ordenadas por jugador y por palabra"."\n";
         echo "7) Agregar una palabra de 5 letras a Wordix"."\n";
         echo "8) Salir"."\n";

         // Solicitamos una opcion 
         echo "\n"."OPCION>>> ";
         $opcion = trim(fgets(STDIN));
         
         // Armamos un if por si la opcion es incorrecta
         if($opcion > 8 || $opcion < 1)
         echo "\n"."Opcion incorrecta. Intente de nuevo (entre 1-8)."."\n";
                        
         
         }while ($opcion != 8);            
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
                }else{
                     // Solicitamos que seleccione un numero entre un rango determinado usando el modulo de WORDIX
                     $numeroPartida = solicitarNumeroEntre(0,$numeroTotalDeArreglo);
                }
            }while($terminar == false);
        }

// FUNCIÓN 7 AGREGAR PALABRA

/** Esta funcion agrega una palabra nueva a una colección y retorna la colección actualizada
 * @param string[] $coleccionPalabrasNuevo
 * @param string $palabra
 * @return array
*/

function agregarPalabra($coleccionPalabrasNuevo, $palabraNueva)
   {
         // boolean $repetida
         // int $i, $contArreglo
         // string $verificacionPalabra

         // Asignamos a una variable la condición false
         $repetida = false;
         
         // Iniciamos una variable en 0
         $i = 0;
         
         // Contamos el total de elementos del arreglo
         $contArreglo = count($coleccionPalabrasNuevo);
         
         // Verificamos si la palabra es correcta con el modulo de WORDIX
         $verificacionPalabra = esPalabra($palabraNueva);
         
         // Creamos un if donde verificamos si la palabra es incorrecta o la palabra tiene mas de 5 letras 
         if($verificacionPalabra == false || strlen($palabraNueva) != 5)
                {
                     // Mostramos un mensaje de palabra incorrecta
                     echo escribirRojo("Palabra incorrecta."."\n");

                     // Llamamos al modulo de WORDIX donde solicita una palabra de 5 letras
                     $palabraNueva = leerPalabra5Letras();
                }
            

         while (!$repetida && $i < $contArreglo)
                {
                    if($coleccionPalabrasNuevo[$i] == $palabraNueva)
                      {
                       echo escribirRojo("Esta palabra ya esta en la colección. Intente con otra."."\n");
                       $palabraNueva = leerPalabra5Letras($palabraNueva);
                       $repetida = true;
                      
                      }
                      $i++;
                 }
  
        $coleccionPalabrasNuevo[$contArreglo] = $palabraNueva;
        
        return $coleccionPalabrasNuevo;

   }
  

// FUNCIÓN 8 PRIMER PARTIDA GANADA

/**
 * 
 */

 function primerPartidaGanada($arrayPartidas, $nombreJugador)
 {
    $indice = -1;
    $i = 0;
    $contPartidas = count($arrayPartidas);
    $encontrado = false;
    while ($i < $contPartidas && !$encontrado)
    {
        if($arrayPartidas[$i]["jugador"] == $nombreJugador && $arrayPartidas[$i]["puntos"] > 0)
        {
            $indice = $i;
            $encontrado = true;
        }
        $i++;
    }
    return $indice;
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
