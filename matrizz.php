<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


            $operacion = $_POST["opcion"];
            $opc = $operacion;

$numeroN = $_POST["mult"];
$numn = intval($numeroN);

// matriz A

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


//suma 
        switch ($opc){
            case 'deter':
                $x = $numX1*$numX5*$numX9 + $numX4*$numX8*$numX3 + $numX7*$numX2*$numX6;
                $z = $x - $numX3*$numX5*$numX7 - $numX6*$numX8*$numX1 - $numX9*$numX2*$numX4;
            echo $z;
        break;
            case 'inver':
                //editando funcion para calcular ls determinantes
               /* function Calcular_MatrizInversa($x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9){*/
                    
                    $total=$numX1*$numX5*$numX9 + $numX4*$numX8*$numX3 +$numX7*$numX2*$numX6;
                    $total=$total+($numX3*$numX5*$numX7)*-1 + ($numX6*$numX8*$numX1)*-1 + ($numX9*$numX2*$numX4)*-1;
                    //si el total es 0 no tiene determinante
                    if($total!=0){
                        $num1=$numX5*$numX9-$numX8*$numX6;
                        echo "Resultado matriz inversa 3x3<br>";
                        echo " ".$num1/$total." ".((($numX2*$numX9-$numX8*$numX3)*-1)/$total)."  ".(($numX2*$numX6-$numX5*$numX3)/$total);
                        echo "<br></br>";
                        echo "".((($numX4*$numX9-$numX7*$numX6)*-1)/$total)."  ".((($numX1*$numX9-$numX7*$numX3))/$total)."  ".((($numX1*$numX6-$numX4*$numX3)*-1)/$total);
                        echo "<br></br>";
                        echo "".((($numX4*$numX8-$numX7*$numX5))/$total)."  ".((($numX1*$numX8-$numX7*$numX2)*-1)/$total)."  ".(($numX1*$numX5-$numX4*$numX2)/$total);
                        }
                    else
                        {
                        echo "El determinante de la matriz es cero, la matriz es no invertible";  
                        }
                    /*   } 
                
/*
//en caso se presione el boton de calcular mandara 
 // los valores que tengas los text x1,x2,x4,x5 a la funcion
 //Calcular_MatrizInversa:
 if ($_POST['Calcular']) {Calcular_MatrizInversa($_REQUEST[x1],$_REQUEST[x2],$_REQUEST[x3],$_REQUEST[x4],$_REQUEST[x5],$_REQUEST[x6],$_REQUEST[x7],$_REQUEST[x8],$_REQUEST[x9]);}                            
    /*$inre1 = $numX5*$numX9;
    $inre2 = $numX8*$numX6;
    $resul1 = $inre1-$inre2;
    echo $resul1;
    $inre3 = $numX4*$numX9;
    $inre4 = $numx7*$numX6;
    $resul2 = $inre3-$inre4;
    echo $resul2;
    $inre5 = $numX4*$numX8;
    $inre6 = $numX7*$numX5;
    $resul3 = $inre5-$inre6;
    echo $resul3;
    $inre7 = $numX2*$numX9;
    $inre8 = $numX8*$numX3;
    $resul4 = $inre7-$inre8;
    echo $resul4;
    $inre9 = $numX1*$numX9;
    $inre10 = $numX7*$numX3;
    $resul5 = $inre9-$inre10;
    echo $resul5;
    $inre11 = $numX1*$numX8;
    $inre12 = $numX7*$numX2;
    $resul6 = $inre11-$inre12;
    echo $resul6;
    $inre13 = $numX2*$numX6;
    $inre14 = $numX5*$numA3;
    $resul7 = $inre13-$inre14;
    echo $resul7;
    $inre15 = $numX1*$numX6;
    $inre16 = $numX4*$numX3;
    $resul8 = $inre15-$inre16;
    echo $resul8;
    $inre17 = $numX1*$numX5;
    $inre18 = $numX4*$numX2;
    $resul9 = $inre17-$inre18;
    echo $resul9;
    // OPERACIÓN DE NEGACIÓN
    $resuln1 = $resul1*1;
    $resuln4 = $resul4*(-1);
    $resuln7 = $resul7*1;
    $resuln2 = $resul2*-1;
    $resuln5 = $resul5*1;
    $resuln8 = $resul8*-1;
    $resuln3 = $resul3*1;
    $resuln6 = $resul6*-1;
    $resuln9 = $resul9*1;
                
                
                
                
                
                
                
        echo $resuln1.", ".$resuln2." ,".$resuln3."<br>";
        echo $resuln4.", ".$resuln5.", ".$resuln6."<br>";
        echo $resuln7.", ".$resuln8.", ".$resuln9."<br>";*/
    break;


//Transpuesta  

	case 'trans':
                echo "La Transpuesta de la matriz es: "."<br><br>";
                echo "
                <div class=\"row\">
                <div class=\"col s1\">$numX1</div>
                <div class=\"col s1\">$numX4</div>
                <div class=\"col s1\">$numX7</div>
                </div>
      <div class=\"row\">
      <div class=\"col s1\">$numX2</div>
      <div class=\"col s1\">$numX5</div>
      <div class=\"col s1\">$numX8</div> 
    </div>
      <div class=\"row\">
      <div class=\"col s1\">$numX3</div>
      <div class=\"col s1\">$numX6</div>
      <div class=\"col s1\">$numX9</div>
    </div>";
              

    	break;
     case 'mul':
        $re1 = $numn*$numX1;
        $re2 = $numn*$numX2;
        $re3 = $numn*$numX3;
        $re4 = $numn*$numX4;
        $re5 = $numn*$numX5;
        $re6 = $numn*$numX6;
        $re7 = $numn*$numX7;
        $re8 = $numn*$numX8;
        $re9 = $numn*$numX9;
                
            echo "La MULTIPLICACION escalar de la matriz es: "."<br><br>";
           echo "
            <div class=\"row\">
      <div class=\"col s1\">$re1</div>
      <div class=\"col s1\">$re2</div>
      <div class=\"col s1\">$re3</div>
    </div>
      <div class=\"row\">
      <div class=\"col s1\">$re4</div>
      <div class=\"col s1\">$re5</div>
      <div class=\"col s1\">$re6</div> 
    </div>
      <div class=\"row\">
      <div class=\"col s1\">$re7</div>
      <div class=\"col s1\">$re8</div>
      <div class=\"col s1\">$re9</div>
    </div>";
        
    break;
}


 ?>   
 