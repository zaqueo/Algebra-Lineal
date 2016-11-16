<?php
// prevenir cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");


$operacion = $_POST["opciones"];
$opc = $operacion;

//Matriz A

$nX1 = $_POST["x1"];
$numX1 = intval($nX1);

$nX2 = $_POST["x2"];
$numX2 = intval($nX2);

$nX3 = $_POST["x3"];
$numX3 = intval($nX3);

$nX4 = $_POST["x4"];
$numX4 = intval($nX4);

$nX5 = $_POST["x5"]; 
$numX5 = intval($nX5);

$nX6 = $_POST["x6"];
$numX6 = intval($nX6);

$nX7 = $_POST["x7"];
$numX7 = intval($nX7);

$nX8 = $_POST["x8"];
$numX8 = intval($nX8);

$nX9 = $_POST["x9"];
$numX9 = intval($nX9);

//Matriz B

$nY1 = $_POST["y1"];
$numY1 = intval($nY1);

$nY2 = $_POST["y2"];
$numY2 = intval($nY2);

$nY3 = $_POST["y3"];
$numY3 = intval($nY3);

$nY4 = $_POST["y4"];
$numY4 = intval($nY4);

$nY5 = $_POST["y5"];
$numY5 = intval($nY5);

$nY6 = $_POST["y6"];
$numY6 = intval($nY6);

$nY7 = $_POST["y7"];
$numY7 = intval($nY7);

$nY8 = $_POST["y8"];
$numY8 = intval($nY8);

$nY9 = $_POST["y9"];
$numY9 = intval($nY9);

//Suma

switch ($opc) {
    case 'sumar':

    $r1 = $numX1 + $numY1;
    $r2 = $numX2 + $numY2;
    $r3 = $numX3 + $numY3;
    $r4 = $numX4 + $numY4;
    $r5 = $numX5 + $numY5;
    $r6 = $numX6 + $numY6;
    $r7 = $numX7 + $numY7;
    $r8 = $numX8 + $numY8;
    $r9 = $numX9 + $numY9;

        echo "La suma de las matrices es: "."<br><br>";
        echo "
            <div class=\"row\">
      <div class=\"col s1\">$r1</div>
      <div class=\"col s1\">$r2</div>
      <div class=\"col s1\">$r3</div>
    </div>
      <div class=\"row\">
      <div class=\"col s1\">$r4</div>
      <div class=\"col s1\">$r5</div>
      <div class=\"col s1\">$r6</div> 
    </div>
      <div class=\"row\">
      <div class=\"col s1\">$r7</div>
      <div class=\"col s1\">$r8</div>
      <div class=\"col s1\">$r9</div>
    </div>";
     break;

     case 'resta':

        $r1 = $numX1 - $numY1;
        $r2 = $numX2 - $numY2;
        $r3 = $numX3 - $numY3;
        $r4 = $numX4 - $numY4;
        $r5 = $numX5 - $numY5;
        $r6 = $numX6 - $numY6;
        $r7 = $numX7 - $numY7;
        $r8 = $numX8 - $numY8;
        $r9 = $numX9 - $numY9;
         
        echo "resta de las matrices : "."<br><br>";
         echo "
            <div class=\"row\">
      <div class=\"col s1\">$r1</div>
      <div class=\"col s1\">$r2</div>
      <div class=\"col s1\">$r3</div>
    </div>
      <div class=\"row\">
      <div class=\"col s1\">$r4</div>
      <div class=\"col s1\">$r5</div>
      <div class=\"col s1\">$r6</div> 
    </div>
      <div class=\"row\">
      <div class=\"col s1\">$r7</div>
      <div class=\"col s1\">$r8</div>
      <div class=\"col s1\">$r9</div>
    </div>";
        break;

// multiplicacion 

    case 'multiplicacion':
            
        $r1 = $numX1*$numY1 + $numX2*$numY4 + $numX3*$numY7;
        $r2 = $numX1*$numY2 + $numX2*$numY5 + $numX3*$numY8;
        $r3 = $numX1*$numY3 + $numX2*$numY6 + $numX3*$numY9;
        $r4 = $numX4*$numY1 + $numX5*$numY4 + $numX6*$numY7;
        $r5 = $numX4*$numY2 + $numX5*$numY5 + $numX6*$numY8;
        $r6 = $numX4*$numY3 + $numX5*$numY6 + $numX6*$numY9;
        $r7 = $numX7*$numY1 + $numX8*$numY4 + $numX9*$numY7;
        $r8 = $numX7*$numY2 + $numX8*$numY5 + $numX9*$numY8;
        $r9 = $numX7*$numY3 + $numX8*$numY6 + $numX9*$numY9;
         

        echo "La MULTIPLICACION de las matrices es: "."<br><br>";
           echo "
            <div class=\"row\">
      <div class=\"col s1\">$r1</div>
      <div class=\"col s1\">$r2</div>
      <div class=\"col s1\">$r3</div>
    </div>
      <div class=\"row\">
      <div class=\"col s1\">$r4</div>
      <div class=\"col s1\">$r5</div>
      <div class=\"col s1\">$r6</div> 
    </div>
      <div class=\"row\">
      <div class=\"col s1\">$r7</div>
      <div class=\"col s1\">$r8</div>
      <div class=\"col s1\">$r9</div>
    </div>";
    break;
}
 ?>   
 
