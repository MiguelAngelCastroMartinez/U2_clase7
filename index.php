<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Clase 7</title>
</head>
 <body> 
 <div class="jumbotron text-center">
  <h1>Sentencias</h1>
  <p>En esta semana programaremos ejemplos de if simple, compuesto, aninado; Switch, ciclo for y ciclo while.<p>
 </div>
<div class="container">
<h3>Declaraciones condicionales de PHP</h3>
<p>Muy a menudo, cuando escribe código, desea realizar diferentes acciones para diferentes condiciones. Puede usar declaraciones condicionales en su código para hacer esto.</p>
<p>En PHP tenemos las siguientes declaraciones condicionales:</p>
 <ul>
  <li>Declaración if: ejecuta algún código si una condición es verdadera.</li>
  <li>Declaración if ... else: ejecuta algún código si una condición es verdadera y otro código si esa condición es falsa.</li>
  <li>Declaración if ... elseif ... else - ejecuta códigos diferentes para más de dos condiciones instrucción.</li>
  <li>Switch: selecciona uno de los muchos bloques de código que se ejecutarán.</li>
  </ul>

  <br>
  <h3>Ejemplo 1: If Simple.</h3>
  <h6>El simple cuestiona el valor de una variable para ejecurar un proceso. Nota Solo cuestiona 1 vez y solo realiza 1 proceso.</h6>
    <pre>En este ejemplo se uso una variable con un valor inicial de 10 y se cuestiono si esta valia 10 de ser asi mostrara un texto.
    <?php
      $numero = 10;
      if($numero == 10){
        echo '> La variable numero vale 10';
      }
    ?>
    </pre>

  <br>
  <h3>Ejemplo 2: If Compuesto.</h3>
  <pre><h7><b>El compuesto cuestiona el valor de una variable para ejecurar un proceso cuando este es verdadero o falso.</b>
<h7><b>Nota:</b> Solo cuestiona 1 vez y realiza 2 procesos.</h7></pre>
  <pre>En este ejemplo se uso una variable con un valor inicial de 10 y se cuestiono si esta valia 10 de ser asi mostrara un texto vale 10 
de lo contrario un texto no vale 10.
    <?php
      $numero = 100;
      if($numero == 11){
        echo '> La variable numero vale 10';
      }
      else{
        echo '> La variable numero no vale 10';
      }
    ?>
    </pre>

  <br>
  <h3>Ejemplo 3: If Anidado</h3>
  <h6>El anidado se emplea cuando requierimos de un proceso que tenga mas de un cuestionamiento o que su resultado sea nuevamente custionado.</h6>
  <pre>En este se analiza si una variable tiene un valor que se unidad, decena, centena o ninguna de ellas.</pre>
    <?php
      $numero = 1;
      if($numero >= 1){
        if($numero <= 9){
          echo "> La variable numero es una <b>UNIDAD</b>";
        }
        else{
          if($numero <= 99){
            echo '> La variable numero es una <b>DECENA</b>';
          }
          else{
            if($numero <= 999){
              echo '> La variable numero es una <b>CENTENA</b>';
            }
            else{
              echo '> La variable numero no es una unidad, decena o centena';
            }
          }
        }
      }
      else{
          echo '> La variable numero no es una unidad, decena o centena';
      }

    echo '</p>';
    $numero = 10;
    if($numero >= 1 and $numero <= 9){
      echo '> La variable numero es una <b>UNIDAD</b>';
    }
    else{
        if($numero >= 10 and $numero <= 99){
          echo '> La variable numero es una <b>DECENA</b>';
        }
        else{
            if($numero >= 100 and $numero <= 999){
              echo '> La variable numero es una <b>CENTENA</b>';
            }
            else{
              echo '> La variable numero no es una unidad, decena o centena';
            }
        }
    }
    ?>
    
  <br><br>
  <h3>Ejemplo 4: Switch</h3>
  <h6>El switch es una sentencia de seleccion multiple donde una serie de posibles resultados cuestionan el valor de una variable</h6>
  <pre>Vamos a poner como ejemplo las seleccion de 4 posibles valores.
  <?php
    $opcion = 2;
      switch($opcion){
          case 1:
            echo '> Esta es la opcion <b>1</b>';
          break;
          case 2:
            echo '> Esta es la opcion <b>2</b>';
          break;
          case 3:
            echo '> Esta es la opcion <b>3</b>';
          break;
          case 4:
            echo '> Esta es la opcion <b>4</b>';
          break;
          default:
            echo '> Esa opcion <b>NO EXISTE</b>';
          break;
      }
  ?>
  </pre>
  </div>

  <br>
  <div class = "jumbotron text-center">
    <h2>Ciclos en PHP</h2>
  </div>

  <div class = "container">
    <p>A menudo, cuando escribe código, desea que el mismo bloque de código se ejecute una y otra vez un cierto número de veces. Entonces, en lugar de agregar varias líneas de código casi iguales en un script, podemos usar bucles. Los bucles se utilizan para ejecutar el mismo bloque de código una y otra vez, siempre que se cumpla una determinada condición.</p>
    <p>En PHP, tenemos los siguientes tipos de bucles:<p>
    <ul>
      <li>While - recorre un bloque de código siempre que la condición especificada sea verdadera.</li>
      <li>Do...while - recorre un bloque de código una vez y luego repite el ciclo siempre que la condición especificada sea verdadera.</li>
      <li>For - recorre un bloque de código un número específico de veces.</li>
      <li>Foreach - recorre un bloque de código para cada elemento en una matriz.</li>
    <ul>
  </div>

  <br/>
  
  <div class = "container">
  <h3>Ejemplo 1: Ciclo While</h3>
    <p>El ciclo while es de tipo indefinido esto quiere decir que realizara un numero x de veces un poceso o procesos mientra que una condicion sea verdadera. nota en este tipo de ciclos se debe colocar un proceso de cierre. <br>Vamos a poner como ejemplo una variable <b>x</b> que inicia en <b>1</b> y que termina mientras sea menor que <b>6</b>.</p>
      <?php
        $x = 1;
        while($x < 6){
          echo '> El valor de la variable x es: <b>'.$x.'</b><br/>';
          $x++;
        }
      ?>
  
  <br>
  <h3>Ejemplo 2: Ciclo While anidado</h3>
    <p>Los cliclo tienen la propiedad de contener dentro a otro ciclo y a este tipo de procesos se les denomina anidados.<br>Vamos a poner como ejemplo imprimir las tablas de multiplicar</p>
      <?php
        $tabla = 1;
        $por = 1;
        while($tabla <= 10){
          while($por <= 10){
            echo $tabla.' x '.$por.' = '.$tabla*$por.'<br>';

            $por++;
          }
          $tabla++;
          $por=1;
        }
      ?>

  <br>
  <h3>Ejemplo 3: Ciclo do While Simple</h3>
    <p>El do while tiene como diferencia el ejecutar primero un proceso y despues condicionar el ciclo, en el while simple se condiciona primero y despues se ejecuta el proceso.<br>Vamos a poner como ejemplo un menu de 3 opciones 1. saludo1, 2. saludo2, 3. termina.</p>
      <?php
        $opcion = 1;
        do{
            echo 'El valor de la variable opcion es: '.$opcion.'<br/>';
            $opcion++;
        }while($opcion!=4);
    ?>
  <br>
  <h3>Ejemplo 4: Ciclo for Simple</h3>
    <p>El Clico for es un ciclo definido quiere decir que tiene un inicio, una condicion y un fin. Nota en este tipo de ciclos podemos inicializar una variable cosa que en el while o do while no.<br>Vamos a poner como ejemplo un menu de 3 opciones 1. saludo1, 2. saludo2, 3. termina.</p>
    <?php
      for($y=01; $y<4; $y++){
        echo '-- El valor de la variable Y es: <b>'.$y.'</b><br/>';
      }
      echo '<br/>';
      for($y=00; $y<13; $y+=3){
        echo '-- El valor de la variable Y es: <b>'.$y.'</b><br/>';
      }
    ?>

  <br>
  <h3>Ejemplo 5: Ciclo for Tablas de Multiplicar</h3>
    <?php
      for($ciclo=1;$ciclo<=10;$ciclo++){
        echo "<table border>";
        echo "<tr center>
                <td colspan='5'>Tabla de multiplicar del ".$ciclo."</td>
              </tr>";
        echo '<br>';
      for($ciclo2=1;$ciclo2<=10;$ciclo2++){
        $mult=$ciclo*$ciclo2;
        echo "<tr align=center><td>".$ciclo."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$mult."</td></tr>";
      }
        echo "</table>";
      }
    ?>

  </div>
 </body>
</html>