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
       $arrayPartidas[1] = ["palabraWordix"=> "QUESO" , "jugador" => "abril", "intentos"=> 6, "puntaje" =>0 ];
       $arrayPartidas[2] = ["palabraWordix"=> "TINTO" , "jugador" => "agustin", "intentos"=> 3, "puntaje" =>13 ];
       $arrayPartidas[3] = ["palabraWordix"=> "NAVES" , "jugador" => "lauty", "intentos"=> 4, "puntaje" =>12 ];
       $arrayPartidas[4] = ["palabraWordix"=> "PISOS" , "jugador" => "martin", "intentos"=> 6, "puntaje" =>6 ];
       $arrayPartidas[5] = ["palabraWordix"=> "MELON" , "jugador" => "abril", "intentos"=> 2, "puntaje" =>16 ];
       $arrayPartidas[6] = ["palabraWordix"=> "YUYOS" , "jugador" => "lauty", "intentos"=> 6, "puntaje" =>0 ];
       $arrayPartidas[7] = ["palabraWordix"=> "VERDE" , "jugador" => "martin", "intentos"=> 5, "puntaje" =>11 ];
       $arrayPartidas[8] = ["palabraWordix"=> "PIANO" , "jugador" => "abril", "intentos"=> 3, "puntaje" =>9 ];
       $arrayPartidas[9] = ["palabraWordix"=> "MUJER" , "jugador" => "matias", "intentos"=> 2, "puntaje" =>15 ];
       $arrayPartidas[10] = ["palabraWordix"=> "RASGO" , "jugador" => "agustin", "intentos"=> 4, "puntaje" =>9 ];
    
       // Retornamos el arreglo
       return $arrayPartidas;
   }

// FUNCIÓN 3 MENU DE OPCIONES

/** Este modulo muestra un menu de opciones
 * @return int
*/

 function seleccionarOpcion()
 {
        // int $numeroOpcion

        // Mostrar menú de opciones
        echo "\n**************MENU DE OPCIONES**************\n";
        echo "1) Jugar al wordix con una palabra elegida\n";
        echo "2) Jugar al wordix con una palabra aleatoria\n";
        echo "3) Mostrar una partida\n";
        echo "4) Mostrar la primer partida ganadora\n";
        echo "5) Mostrar resumen de Jugador\n";
        echo "6) Mostrar listado de partidas ordenadas por jugador y por palabra\n";
        echo "7) Agregar una palabra de 5 letras a Wordix\n";
        echo "8) Salir\n";      
           
        // Solicitar opción
        echo "\nOPCIÓN>>> ";
        $numeroOpcion = solicitarNumeroEntre(1, 8);

        // Retornamos la opcion
        return $numeroOpcion;
 }

 
// FUNCIÓN 4 leerPalabra5Letras (WORDIX)
// FUNCIÓN 5 solicitarNumeroEntre (WORDIX)

// FUNCIÓN 6 MOSTRAR PARTIDA

  /** Este modulo recibe un numero y muestra por pantalla una partida
   * @param int $numeroPartida
   * @param string[] $llamarMod
   */

   function mostrarPartida($numeroPartida, $llamarMod)
       {
          // string[] $llamarMod
          // int $numeroTotalDeArreglo
          // boolean $terminar
          
          // Contamos el total de elementos del arreglo
          $numeroTotalDeArreglo = count($llamarMod);
          
          // Asignamos a una variable la condición false
          $terminar = false;

          // Armamos un do while para que se repita en caso que el numero de partida no sea el correcto
          do{
                // Comprobamos si el numero esta en el rango de elementos de nuestra colección de partidas
                if($numeroPartida == 0 || $numeroPartida < $numeroTotalDeArreglo)
                {
                     echo "\n"."********************************************"."\n";
                     echo "Partida WORDIX " . $numeroPartida . ": palabra " . $llamarMod[$numeroPartida]["palabraWordix"]."\n";
                     echo "Jugador: " . $llamarMod[$numeroPartida]["jugador"]."\n";
                     echo "Puntaje: " . $llamarMod[$numeroPartida]["puntaje"]. " puntos"."\n";
                     if($llamarMod[$numeroPartida]["puntaje"] > 0){
                        echo "Intento: " . "Adivinó la palabra en " .$llamarMod[$numeroPartida]["intentos"]." intentos\n";
                     }else{
                        echo "Intento: No adivinó la palabra"."\n";
                     }
                     echo "********************************************"."\n";
                     
                     // Cambiamos la variable a true para terminar el while
                     $terminar = true;
                } else {
                     echo escribirRojo("Número incorrecto.")."\n";
                     // Solicitamos otro numero 
                     echo "Ingrese un número entre " . 0 . " y " . $numeroTotalDeArreglo-1 . ": ";
                     // Solicitamos que seleccione un numero entre un rango determinado usando el modulo de WORDIX
                     $numeroPartida = solicitarNumeroEntre(0,$numeroTotalDeArreglo - 1);
                }
            }while($terminar == false);
        }

        /*echo "num partida: ";
        $n = trim(fgets(STDIN));

     mostrarPartida($n);*/

       

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
                        $palabraNueva = leerPalabra5Letras();
                    } else {
                        // Si son desiguales sumamos la variable $i
                        $i++;
                    }
            }
        }
                
    }while($repetida == true);

     // Agregamos la palabra nueva a la colección
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

/** Este modulo muestra la primer partida ganada
 * @param string[] $arrayPartidas
 * @param string $nombreJugador
 * @return string
 */

 function primerPartidaGanada($arrayPartidas, $nombreJugador)
 {
    // int $indice, $i, $a, $contPartidas
    // boolean $encontrado

    // Iniciamos la variable que vamos a retornar en -1
    $indice = -1;
    // Iniciamos 2 variables en 0
    $i = 0;
    $a = 0;
    //Contamos el arreglo
    $contPartidas = count($arrayPartidas);
    // Iniamos una variable en falso
    $encontrado = false;

    // Verificacion 
    while ($i < $contPartidas && !$encontrado)
    {
        // Comprobar que el nombre esta en la colección
        if($arrayPartidas[$i]["jugador"] == strtolower($nombreJugador) && $arrayPartidas[$i]["puntaje"] > 0)
        {
            // Actualizamos las variables
            $indice = $i;
            // Cambiar variable a true para cortar el while
            $encontrado = true;
        }
       
        // Sumar variable 
        $i++;
    }

    // Retornar la variable
    return $indice;
 }

/*$f = cargarPartidas();
echo "Ingrese un nombre para ver su primer partida ganada: ";
$m = trim(fgets(STDIN));

$k = primerPartidaGanada($f, $m);

print_r($k);*/

// FUNCIÓN 9 RESUMEN JUGADOR

/** Esta función retorna un arreglo con el resumen de un jugador
 * @param string[] $arrayPartidas
 * @param string $nombreJugador
 * @return array
 */

 function mostrarResumen($arrayPartidas, $nombreJugador)
 {
    // Inicializamos variables en 0
    $puntajeTotal = 0;
    $partidasTotales = 0;
    $contPartidasGanadas = 0;

    // Contamos el total de la colección
    $contPartidas = count($arrayPartidas);
    // Creamos el arreglo iniciado en 0 para despues cambiarlo
    $estadisticasJugador = [ "jugador" =>0, "partida" =>0, "puntaje" =>0,  "victorias" =>0, "intento1" =>0, "intento2" =>0, "intento3" =>0, "intento4" =>0, "intento5" =>0, "intento6" =>0];
    
    // Recorremos el total del arreglo, sacando las estadisticas
    for($i=0; $i<$contPartidas; $i++)
    {
        // Sumamos la variable contadora si encuentra una partida ganada
        if($arrayPartidas[$i]["puntaje"] > 0 && strtolower($nombreJugador) == $arrayPartidas[$i]["jugador"])
        {
             $contPartidasGanadas++;
        }
         // Actualizamos variables si el nombre es igual
        if(strtolower($nombreJugador) == $arrayPartidas[$i]["jugador"])
        {    // Sumamos el total de los puntajes 
             $puntaje = $arrayPartidas[$i]["puntaje"];
             $puntajeTotal += $puntaje;

             // Sumamos las partidas totales
             $partidasTotales++;

             // Sumamos el intento cada vez que haya ganado uno en el mismo
             switch($arrayPartidas[$i]["intentos"]){ 
                case 1:$estadisticasJugador["intento1"]++;
                break;
                case 2:$estadisticasJugador["intento2"]++;
                break;
                case 3:$estadisticasJugador["intento3"]++;
                break;
                case 4:$estadisticasJugador["intento4"]++;
                break;
                case 5:$estadisticasJugador["intento5"]++;
                break;
                case 6:$estadisticasJugador["intento6"] ++;
                break; 
            }
        }      
    }
        // Actualizamos las estadisticas 
        $estadisticasJugador["jugador"] = $nombreJugador;
        $estadisticasJugador["partida"] = $partidasTotales;
        $estadisticasJugador["puntaje"] = $puntajeTotal;
        $estadisticasJugador["victorias"] = $contPartidasGanadas;
       
        // Retornamos el arreglo
        return $estadisticasJugador;
    
 }

 // FUNCIÓN 9 EXTRA

 /** Muestra el resumen
  * @param string[] $estadisticas
  */
function resumen($estadisticas)
{
    // Mostrar las estadisticas
    echo "\n"."********************************************"."\n";
    echo "Jugador: " . $estadisticas["jugador"]."\n";
    echo "Partidas: " . $estadisticas["partida"]."\n";
    echo "Puntaje Total: " . $estadisticas["puntaje"]."\n";
    echo "Victorias: " . $estadisticas["victorias"]."\n";
    echo "Porcentaje de victorias: " . ($estadisticas["victorias"]*100)/$estadisticas["partida"]."%\n";
    echo "Adivinadas:"."\n";
    echo "    intento 1: " . $estadisticas["intento1"]."\n";
    echo "    intento 2: " . $estadisticas["intento2"]."\n";
    echo "    intento 3: " . $estadisticas["intento3"]."\n";
    echo "    intento 4: " . $estadisticas["intento4"]."\n";
    echo "    intento 5: " . $estadisticas["intento5"]."\n";
    echo "    intento 6: " . $estadisticas["intento6"]."\n";
    echo "********************************************"."\n";
}
/* $z = cargarPartidas();
 echo "Nombre: ";
 $x = trim(fgets(STDIN));

 $c = mostrarResumen($z, $x);

 print_r($c);*/



// FUNCIÓN 10 SOLICITAR NOMBRE 

/** Esta funcion solicita un nombre y lo retora en minúscula
 * @return string
 */

 function  solicitarJugador()
 {
    // Verificar que el primer caracter sea una letra
    do{
        // Variable iniciada en falso
        $correcto = false;
        //Solicitamos el nombre del jugador 
        echo "Ingrese el nombre de un jugador: ";
        $jugador = trim(fgets(STDIN));
        // Dividimos el nombre en caracteres
        $caracteres = str_split($jugador, 1);
        // Comprobar si el primer caracter es una letra
        $esLetra = ctype_alpha($caracteres[0]);
        
        // Cortar ciclo si es verdadero
        if($esLetra == true){
            $correcto = true;
        }else{ // Mostrar un cartel y preguntar devuelta si es falso
            echo escribirRojo("El primer caracter debe ser una letra")."\n";
        }


    }while($correcto == false);
    // Retornamos el nombre en minúscula
    return strtolower($jugador);
 }

 // FUNCIÓN 11 ORDENAR ARREGLO

 /** Este recibe un arreglo y retorna el orden en que lo ordena 
  * @param string[] $partidaUno
  * @param string[] $partidaDos
  * @return int
  */

  function compararPartidas($partidaUno, $partidaDos)
  {
      // Si el jugador es igual lo ordena por la palabra
      if ($partidaUno["jugador"] == $partidaDos["jugador"]) {
          if ($partidaUno["palabraWordix"] == $partidaDos["palabraWordix"]) {
              $orden = 0;
            // Ordena primero la la palbra de la partida uno
          } elseif ($partidaUno["palabraWordix"] < $partidaDos["palabraWordix"]) {
              $orden = -1;
            // Ordena primero la la palbra de la partida dos
          } else {
              $orden = 1;
          }
        // Ordena primero el nombre de la primer partida
      } elseif ($partidaUno["jugador"] < $partidaDos["jugador"]) {
          $orden = -1;
        // Ordena primero el nombre de la segunda partida
      } else {
          $orden = 1;
      }
      // Retornamos el orden 
      return $orden;
  }
  
  /** Esye modulo recibe un arreglo y lo ordena alfabeticamente
   * @param string[] $coleccion
   */
  function mostrarPartidasOrdenadas($coleccion)
  {
      // Función de comparación definida por el usuario
      uasort($coleccion, 'compararPartidas');
      // Mostrar la colección ordenada
      print_r($coleccion);
  }
  /*$t = cargarPartidas();
  mostrarPartidasOrdenadas($t);*/


/* ****COMPLETAR***** */


/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

// Declaración de variables:
// int $contadorArreglo, $contadorArreglo2, $numeroElegido, $numAleatorio, $numeroDePartida, $primerPartidaGanada
// string $solicitarJugador, $palabraSelecionada, $palabraIngresada
// boolean $yaJugado, $correcto
// string[] $arregloPalabras, $arregloPartidas, $partida, $mostrar, $arregloActualizado, $partidaJugada

//Inicialización de variables:


//Proceso:

//$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);


 // Llmamos a los arreglos de las palabras y las partidas
 $arregloPalabras = cargarColeccionPalabras();
 $arregloPartidas = cargarPartidas();

do {
    // Llamamos al modulo del menú
    $opcion = seleccionarOpcion();


    switch ($opcion) {
        case 1: 
            // Solicitamos el nombre al usuario
            $nombreUsuario = solicitarJugador();

            // Contamos el total de los dos arreglos
            $contadorArreglo = count($arregloPalabras);
            $contadorArreglo2 = count($arregloPartidas);
            
            do {
                 // Solicitamos que ingrese un numero 
                 echo "Ingrese un número entre 0-" . ($contadorArreglo - 1) . ": ";
                 $numeroElegido = solicitarNumeroEntre(0, $contadorArreglo - 1);
                 // Variable que contiene la palabra elegida
                 $palabraSeleccionada = $arregloPalabras[$numeroElegido];


                 // Verificar si ya jugó con esta palabra
                 $correcto = false;
            foreach ($arregloPartidas as $partida) {
                if ($partida["palabraWordix"] == $palabraSeleccionada && $partida["jugador"] == strtolower($nombreUsuario)) {
                    echo escribirRojo("¡Ya jugaste con esta palabra " . $nombreUsuario . "! Intenta con otro número.") . "\n";
                    $correcto = true;
                }
            }
            } while ($correcto == true);

            // Iniciar la partida con la palabra seleccionada
            $partidaJugada = jugarWordix($palabraSeleccionada, strtolower($nombreUsuario));
            $arregloPartidas[$contadorArreglo2] = $partidaJugada;
            break;


        case 2: 
            $nombreUsuario = solicitarJugador();
            $contadorArreglo = count($arregloPalabras);
            $contadorArreglo2 = count($arregloPartidas);
            $palabraSeleccionada = "";
            $correcto = false;
            while(!$correcto){

                $correcto2 = false;

                $numAleatorio = rand(0,$contadorArreglo-1);
                $palabraActual = $arregloPalabras[$numAleatorio];

                foreach ($arregloPartidas as $indice)
                {
                    if ($indice["palabraWordix"] == $palabraActual && $indice["jugador"] == $nombreUsuario) {
                        $correcto2 = true;
                    } 
                }
                if (!$correcto2) {
                    $palabraSeleccionada = $palabraActual;
                    $correcto = true;
                }

            } 

            $partidaJugada = jugarWordix($palabraSeleccionada, strtolower($nombreUsuario));
            $arregloPartidas[$contadorArreglo2] = $partidaJugada;
            break;


        case 3: 
            // Contamos el arreglo 
            $contadorArreglo = count($arregloPartidas);
            
            // Solicitamos un numero 
            echo "Ingrese un numero entre 0-" . $contadorArreglo-1 . ": ";
            $numeroDePartida = solicitarNumeroEntre(0, $contadorArreglo-1);

            // Mostramos la partida con el numero seleccionado
            echo mostrarPartida($numeroDePartida, $arregloPartidas);
            break;


        case 4: 
            // Solicitamos el nombre el usuario
            $nombreUsuario = solicitarJugador();
            
            // Mostramos la primer partida ganada por el usuario
            $primerPartidaGanada = primerPartidaGanada($arregloPartidas, $nombreUsuario);
            if($primerPartidaGanada != -1){
                echo mostrarPartida($primerPartidaGanada, $arregloPartidas);
              // En caso que no tenga partidas ganadas mostramos un cartel
            } else {
                echo escribirRojo("El jugador " . $nombreUsuario . " no ganó ninguna partida"). "\n";
            }
            break;


        case 5:
            // Solictamos el nombre al usuario
            $nombreUsuario = solicitarJugador();
          
            // Mostramos el resumen del usuario
            $mostrar = mostrarResumen($arregloPartidas, $nombreUsuario);
            resumen($mostrar);
            break;


        case 6: 
            

            // Llamamos al modulo para ordenar el arreglo
            mostrarPartidasOrdenadas($arregloPartidas);

            break;
        case 7:
            // Solicitamos que ingrese una palabra
            $palabraIngresada = leerPalabra5Letras();

            // Llamamos al arreglo de palabras
            $arregloPalabras = agregarPalabra($arregloPalabras, strtoupper($palabraIngresada));
            echo escribirVerde("¡Palabra agregada correctamente!"). "\n";
            break;
        case 8: 
            // Mostrar cartel de saliendo
            echo "Saliendo...";
            break;
    }
} while ($opcion != 8);
?>