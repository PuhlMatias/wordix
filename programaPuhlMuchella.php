<?php
include_once("wordix.php");



/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* Puhl Matías Sebastián--legajo FAI-5605--Tecnicatura en desarrollo web--GitHub: PuhlMatias */
/* Muchella Aldana Abril--legajo FAI-5574--Tecnicatura en desarrollo web--GitHub: abril12345678 */

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
       $arrayPartidas[0] = ["palabraWordix"=> "GOTAS" , "jugador" => "matias", "intentos"=> 5, "puntaje" =>12 ];
       $arrayPartidas[1] = ["palabraWordix"=> "QUESO" , "jugador" => "abril", "intentos"=> 6, "puntaje" =>10 ];
       $arrayPartidas[2] = ["palabraWordix"=> "TINTO" , "jugador" => "agustin", "intentos"=> 3, "puntaje" =>15 ];
       $arrayPartidas[3] = ["palabraWordix"=> "NAVES" , "jugador" => "lauty", "intentos"=> 4, "puntaje" =>14 ];
       $arrayPartidas[4] = ["palabraWordix"=> "PISOS" , "jugador" => "martin", "intentos"=> 6, "puntaje" =>12 ];
       $arrayPartidas[5] = ["palabraWordix"=> "MELON" , "jugador" => "abril", "intentos"=> 2, "puntaje" =>14 ];
       $arrayPartidas[6] = ["palabraWordix"=> "YUYOS" , "jugador" => "lauty", "intentos"=> 6, "puntaje" =>12 ];
       $arrayPartidas[7] = ["palabraWordix"=> "VERDE" , "jugador" => "martin", "intentos"=> 5, "puntaje" =>12 ];
       $arrayPartidas[8] = ["palabraWordix"=> "PIANO" , "jugador" => "abril", "intentos"=> 3, "puntaje" =>13 ];
       $arrayPartidas[9] = ["palabraWordix"=> "MUJER" , "jugador" => "matias", "intentos"=> 2, "puntaje" =>14 ];
       $arrayPartidas[10] = ["palabraWordix"=> "RASGO" , "jugador" => "agustin", "intentos"=> 4, "puntaje" =>13 ];
       $arrayPartidas[11] = ["palabraWordix"=> "HIELO" , "jugador" => "matias", "intentos"=> 0, "puntaje" =>0 ];
       $arrayPartidas[12] = ["palabraWordix"=> "TARDE" , "jugador" => "abril", "intentos"=> 0, "puntaje" =>0 ];
       $arrayPartidas[13] = ["palabraWordix"=> "SALTO" , "jugador" => "lauty", "intentos"=> 0, "puntaje" =>0 ];
       $arrayPartidas[14] = ["palabraWordix"=> "FUEGO" , "jugador" => "martin", "intentos"=> 0, "puntaje" =>0 ];
       $arrayPartidas[15] = ["palabraWordix"=> "HUEVO" , "jugador" => "abril", "intentos"=> 1, "puntaje" =>14 ];
       $arrayPartidas[16] = ["palabraWordix"=> "TINTO" , "jugador" => "lauty", "intentos"=> 3, "puntaje" =>15 ];
       $arrayPartidas[17] = ["palabraWordix"=> "CLIMA" , "jugador" => "martin", "intentos"=> 5, "puntaje" =>10 ];
       $arrayPartidas[18] = ["palabraWordix"=> "HIELO" , "jugador" => "abril", "intentos"=> 3, "puntaje" =>11 ];
       $arrayPartidas[19] = ["palabraWordix"=> "VERDE" , "jugador" => "matias", "intentos"=> 6, "puntaje" =>11 ];
       $arrayPartidas[20] = ["palabraWordix"=> "SALTO" , "jugador" => "matias", "intentos"=> 5, "puntaje" =>12 ];
    
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
   * @param string[] $arreglo
   */
function mostrarPartida($numeroPartida, $arreglo)
{ 
    //mostramos los datos de la partida elegida
    echo "\n"."********************************************\n";
    echo "Partida WORDIX " . $numeroPartida . ": palabra " . $arreglo[$numeroPartida]["palabraWordix"]."\n";
    echo "Jugador: " . $arreglo[$numeroPartida]["jugador"]."\n";
    echo "Puntaje: " . $arreglo[$numeroPartida]["puntaje"]. " puntos"."\n";
    //si el puntaje es mayor a 0, mostramos el intento en el cual gano, sino mencionamos que no adivino la palabra
    if($arreglo[$numeroPartida]["puntaje"] > 0){
        echo "Intento: " . "Adivinó la palabra en " .$arreglo[$numeroPartida]["intentos"]." intentos\n";
    }else{
        echo "Intento: No adivinó la palabra"."\n";
    }
    echo "********************************************\n";
}

// FUNCIÓN 7 AGREGAR PALABRA
/** Esta funcion agrega una palabra nueva a una colección y retorna la colección actualizada
 * @param string[] $arreglo
 * @param string $palabra
 * @return array
 */
function agregarPalabra($arreglo, $palabra){
    // int $i, $contArreglo
    
    // Variable iniciada en 0
    $i = 0;      
    // Contamos el total del arreglo 
    $contArreglo = count($arreglo);
    // recorrido total para verificar que no se repite la palabra
    for ($i=0; $i < $contArreglo; $i++){
       // Verificamos si son iguales
       if($arreglo[$i] == strtoupper($palabra)){
           // Mostramos un cartel que la palabra esta repetida y volvemos a solicitar otra palabra
           echo escribirRojo("Esta palabra ya esta en la colección. Intente con otra.")."\n";
           $palabra = leerPalabra5Letras();
           //reseteamos el contador para que la palabra nueva recorra el bucle
           $i = 0;
       }
    }
    // Agregamos la palabra nueva a la colección
    $arreglo[$contArreglo] = strtoupper($palabra);
    // Retornamos la coleccion
    return $arreglo;
   }

 // FUNCIÓN 8 PRIMER PARTIDA GANADA
/** Este modulo muestra la primer partida ganada
 * @param string[] $arreglo
 * @param string $nombre
 * @return string
 */
function primerPartidaGanada($arreglo, $nombre){
    // int $indice, $i, $a, $contPartidas
    // boolean $encontrado
    // Iniciamos la variable que vamos a retornar en -1
    $indice = -1;
    // Iniciamos la variable en 0
    $i = 0;
    //Contamos el arreglo
    $contPartidas = count($arreglo);
    // Iniamos una variable en falso
    $encontrado = false;
    // Verificacion 
    while ($i < $contPartidas && !$encontrado)
    {
        // Comprobar que el nombre esta en la colección
        if($arreglo[$i]["jugador"] == strtolower($nombre) && $arreglo[$i]["puntaje"] > 0)
        {
            // guardamos el indice de la partida
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

// FUNCIÓN 9 RESUMEN JUGADOR
/** Esta función retorna un arreglo con el resumen de un jugador
 * @param string[] $arreglo
 * @param string $jugador
 * @return array
 */
function mostrarResumen($arreglo, $jugador){
    //int $puntajeTotal, $partidasGanadas, $partidasTotales, $contPartidas
    // Inicializamos variables en 0
    $puntajeTotal = 0;
    $partidasTotales = 0;
    $partidasGanadas = 0;

    // Contamos el total de la colección
    $contPartidas = count($arreglo);
    // Creamos el arreglo iniciado en 0 para despues cambiarlo
    $estadisticas = [ "jugador" =>0, "partida" =>0, "puntaje" =>0,  "victorias" =>0, "intento1" =>0, "intento2" =>0, "intento3" =>0, "intento4" =>0, "intento5" =>0, "intento6" =>0];
    
    // Recorremos el total del arreglo, sacando las estadisticas
    for($i=0; $i<$contPartidas; $i++){
        // Sumamos la variable contadora si encuentra una partida ganada
        if($arreglo[$i]["puntaje"] > 0 && strtolower($jugador) == $arreglo[$i]["jugador"])
        {
             $partidasGanadas++;
        }
         // Actualizamos variables si el nombre es igual
        if(strtolower($jugador) == $arreglo[$i]["jugador"])
        {    // Sumamos el total de los puntajes 
             $puntaje = $arreglo[$i]["puntaje"];
             $puntajeTotal += $puntaje;

             // Sumamos las partidas totales
             $partidasTotales++;

             // Sumamos el intento cada vez que haya ganado uno en el mismo
             if($arreglo[$i]["puntaje"] > 0)
            {
               switch($arreglo[$i]["intentos"])
                { 
                  case 1:$estadisticas["intento1"]++;
                  break;
                  case 2:$estadisticas["intento2"]++;
                  break;
                  case 3:$estadisticas["intento3"]++;
                  break;
                  case 4:$estadisticas["intento4"]++;
                  break;
                  case 5:$estadisticas["intento5"]++;
                  break;
                  case 6:$estadisticas["intento6"]++;
                  break; 
                }
            }
        }      
    }
        // Actualizamos las estadisticas 
        $estadisticas["jugador"] = $jugador;
        $estadisticas["partida"] = $partidasTotales;
        $estadisticas["puntaje"] = $puntajeTotal;
        $estadisticas["victorias"] = $partidasGanadas;
       
        // Retornamos el arreglo
        return $estadisticas;
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
    if($estadisticas["victorias"] > 0){
    echo "Porcentaje de victorias: " . ($estadisticas["victorias"]*100)/$estadisticas["partida"]."%\n";
    } else {
    echo "Porcentaje de victorias: " . "No gano ninguna partida"."\n";
    }
    echo "Adivinadas:"."\n";
    echo "    intento 1: " . $estadisticas["intento1"]."\n";
    echo "    intento 2: " . $estadisticas["intento2"]."\n";
    echo "    intento 3: " . $estadisticas["intento3"]."\n";
    echo "    intento 4: " . $estadisticas["intento4"]."\n";
    echo "    intento 5: " . $estadisticas["intento5"]."\n";
    echo "    intento 6: " . $estadisticas["intento6"]."\n";
    echo "********************************************"."\n";
}

// FUNCIÓN 10 SOLICITAR NOMBRE 
/** Esta funcion solicita un nombre y lo retora en minúscula
 * @return string
 */
function  solicitarJugador()
 {
    // Verificar que el primer caracter sea una letra
    do{
        // boolean $correcto, $esLetra
        // string $jugador
        // int $caracteres

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
  
  /** Este modulo recibe un arreglo y lo ordena alfabeticamente
   * @param string[] $coleccion
   */
function mostrarPartidasOrdenadas($coleccion)
   {
      // Función de comparación definida por el usuario
      uasort($coleccion, 'compararPartidas');
      // Mostrar la colección ordenada
      print_r($coleccion);
   }


/* ****COMPLETAR***** */

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

// Declaración de variables:
// int $contadorArreglo, $contadorArreglo2, $numeroElegido, $numAleatorio, $numeroDePartida, $primerPartidaGanada
// string $nombreUsuario, $palabraSelecionada, $palabraIngresada
// boolean $correcto
// string[] $arregloPalabras, $arregloPartidas, $partida, $mostrar, $partidaJugada

//Proceso:

 // Llmamos a los arreglos de las palabras y las partidas
 $arregloPalabras = cargarColeccionPalabras();
 $arregloPartidas = cargarPartidas();

do {
    // Llamamos al módulo del menú
    $opcion = seleccionarOpcion();

    switch ($opcion) {
        case 1: // Jugar wordix con palabra elegida
            // Solicitamos el nombre al usuario
            $nombreUsuario = solicitarJugador();
            // Contamos el total de los dos arreglos
            $contadorArreglo = count($arregloPalabras);
            $contadorArreglo2 = count($arregloPartidas);
            // Iniciar variable en 0
            $i = 0;
            do {
                 // Solicitamos que ingrese un numero 
                 echo "Ingrese un número entre 0-" . ($contadorArreglo - 1) . ": ";
                 $numeroElegido = solicitarNumeroEntre(0, $contadorArreglo - 1);
                 // Variable que contiene la palabra elegida
                 $palabraSeleccionada = $arregloPalabras[$numeroElegido];

                 // Verificar si ya jugó con esta palabra
                 $correcto = false;
                 while($i < $contadorArreglo2 && !$correcto) {
                    if ($arregloPartidas[$i]["palabraWordix"] == $palabraSeleccionada && $arregloPartidas[$i]["jugador"] == strtolower($nombreUsuario)) {
                        echo escribirRojo("¡Ya jugaste con esta palabra " . $nombreUsuario . "! Intenta con otro número.") . "\n";
                        $correcto = true;
                    }
                    $i++;
            }
            } while ($correcto == true);
            // Iniciar la partida con la palabra seleccionada
            $partidaJugada = jugarWordix($palabraSeleccionada, strtolower($nombreUsuario));
            // Actualizar el arreglo de partidas
            $arregloPartidas[$contadorArreglo2] = $partidaJugada;
            break;

        case 2: // Jugar wordix con palabra aleatoria 
            // Solicitar el nombre al usuario
            $nombreUsuario = solicitarJugador();
            // Contamos los dos arreglos
            $contadorArreglo = count($arregloPalabras);
            $contadorArreglo2 = count($arregloPartidas);
            do{
                // Iniciamos variable en falso
                $correcto = false;
                // Variable con número random
                $numAleatorio = rand(0,$contadorArreglo-1);
                // Palabra con el número random
                $palabraActual = $arregloPalabras[$numAleatorio];
                // Iniciamos variable en 0
                $i = 0;
                // Comprobar si ya jugó con la palabra
                while($i < $contadorArreglo2 && !$correcto){
                    if ($arregloPartidas[$i]["palabraWordix"] == $palabraActual && $arregloPartidas[$i]["jugador"] == $nombreUsuario) {
                        $correcto = true;
                    } 
                    $i++;
                }
    
            } while ($correcto == true);
            // Iniciar la partida con la palabra seleccionada
            $partidaJugada = jugarWordix($palabraActual, strtolower($nombreUsuario));
            // Actualizar el arreglo de partidas 
            $arregloPartidas[$contadorArreglo2] = $partidaJugada;
            break;

        case 3: // Mostrar una partida
            // Contamos el arreglo 
            $contadorArreglo = count($arregloPartidas);           
            // Solicitamos un número 
            echo "Ingrese un número entre 0-" . $contadorArreglo-1 . ": ";
            $numeroDePartida = solicitarNumeroEntre(0, $contadorArreglo-1);
            // Mostramos la partida con el numero seleccionado
            echo mostrarPartida($numeroDePartida, $arregloPartidas);
            break;

        case 4: // Mostrar la primer partida ganadora
            // Solicitamos el nombre el usuario
            $nombreUsuario = solicitarJugador();   
            // Mostramos la primera partida ganada por el usuario
            $primerPartidaGanada = primerPartidaGanada($arregloPartidas, $nombreUsuario);
            if($primerPartidaGanada != -1){
                echo mostrarPartida($primerPartidaGanada, $arregloPartidas);
              // En caso que no tenga partidas ganadas mostramos un mensaje
            } else {
                echo escribirRojo("El jugador " . $nombreUsuario . " no ganó ninguna partida"). "\n";
            }
            break;

        case 5: // Mostrar resumen de jugador 
            // Solicitamos el nombre al usuario
            $nombreUsuario = solicitarJugador();         
            // Mostramos el resumen del usuario
            $mostrar = mostrarResumen($arregloPartidas, $nombreUsuario);
            resumen($mostrar);
            break;

        case 6: // Mostrar listado de partidas ordenada por jugardor y por palabra
            // Llamamos al modulo para ordenar el arreglo
            mostrarPartidasOrdenadas($arregloPartidas);
            break;

        case 7: // Agregar una palabra de 5 letras
            // Solicitamos que ingrese una palabra
            $palabraIngresada = leerPalabra5Letras();
            // Llamamos al arreglo de palabras
            $arregloPalabras = agregarPalabra($arregloPalabras, strtoupper($palabraIngresada));
            echo escribirVerde("¡Palabra agregada correctamente!"). "\n";
            break;

        case 8: // Salir
            // Mostramos mensaje de salida
            echo "Saliendo...";
            break;
    }
} while ($opcion != 8);
?>