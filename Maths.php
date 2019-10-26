<?php


/////DODAWANIE MACIERZY/////////

    if ($rowA==$rowB && $colA==$colB){       // Sprawdzenie czy macierze sa tego samego rozmiaru
        print "<table class='resultTable'>";
        print "<caption>Matrix adding result</caption>";
         for ($k=1; $k<=$rowA; $k++){
         print "<tr>";
            for ($l=1; $l<=$colA; $l++){
                $adding = $matrixArrayA[$k][$l] + $matrixArrayB[$k][$l];
                print "<td>".$adding."</td>";           // wyswietlanie nowej tabeli z macierzy
            }print "<tr>";
         
        }print "</table>";
     }else{
         echo "<div id='error'>Inoperative matrix size for adding</div>\n"; // jeżeli w któryms zapytaniu if wartosc bedzie false wyswietli sie blad
     }



/////ODEJMOWANIE MACIERZY/////////

         if ($rowA==$rowB && $colA==$colB){          // Sprawdzenie czy macierze sa tego samego rozmiaru
              print "<table class='resultTable'>";
              print "<caption>Matrix subtracting result</caption>";
                  for ($k=1; $k<=$rowB; $k++){
                  print "<tr>";
                    for ($l=1; $l<=$colB; $l++){
                    $subtraction = $matrixArrayA[$k][$l] - $matrixArrayB[$k][$l];
                    print "<td>".$subtraction."</td>"; // wyswietlanie nowej tabeli z macierzy
                    }print "<tr>";
                   }print "</table>\n";
     }else{
         echo "<div id='error'>Inoperative matrix size for subtracting</div>\n"; // jeżeli w któryms zapytaniu if wartosc bedzie false wyswietli sie blad
     } 
    

/////MNOŻENIE MACIERZY MACIERZY/////////


    $r=count($matrixArrayA); // ilosc wierszy macierzy A
    $c=count($matrixArrayB[1]); //ilosc kolumn macierzy B
    $p=count($matrixArrayB);        // ilosc wierszy macierzy b
    if(count($matrixArrayA[1]) != $p){   // sprawdzenie poprawnosci warunku dla mnozenia tutaj Sprawdzenie czy ilosc kolumn macierzy A jest równa ilosci wierszy macierzy B
     echo "\n<div id='error'>Inoperative matrix sizes for multiplying</div>";
    }else{
        print "<table class='resultTable'>";
        print "<caption>Matrix multiplying result</caption>";
            for ($i=1; $i <=$r; $i++){
                print "<tr>";
                for($j=1; $j <=$c; $j++){           
                    $result[$i][$j] = 0;
                    for($k=1; $k <=$p; $k++){
                        $multiply = $result[$i][$j] += $matrixArrayA[$i][$k] * $matrixArrayB[$k][$j]; // do zmiennej $result[$i][$j] zostanie dodany wynik mnożenia odpowiednich pól macierzy
                    }print "<td>".$multiply."</td>";
                }print "<tr>";
            } print "</table>";     
        } 

    
/////WYZNACZNIK MACIERZY DLA 2X2 i 3x3/////////
    if ($rowA == $colA && $rowA == 3 && $rowB == $colB && $rowB == 3){
        $determinantA = $matrixArrayA[1][1]*$matrixArrayA[2][2]*$matrixArrayA[3][3] +
                     $matrixArrayA[1][2]*$matrixArrayA[2][3]*$matrixArrayA[3][1] +
                     $matrixArrayA[1][3]*$matrixArrayA[2][1]*$matrixArrayA[3][2] -
                     $matrixArrayA[1][1]*$matrixArrayA[2][3]*$matrixArrayA[3][2] -
                     $matrixArrayA[1][2]*$matrixArrayA[2][1]*$matrixArrayA[3][3] -
                     $matrixArrayA[1][3]*$matrixArrayA[2][2]*$matrixArrayA[3][1];

        $determinantB = $matrixArrayB[1][1]*$matrixArrayB[2][2]*$matrixArrayB[3][3] +
                     $matrixArrayB[1][2]*$matrixArrayB[2][3]*$matrixArrayB[3][1] +
                     $matrixArrayB[1][3]*$matrixArrayB[2][1]*$matrixArrayB[3][2] -
                     $matrixArrayB[1][1]*$matrixArrayB[2][3]*$matrixArrayB[3][2] -
                     $matrixArrayB[1][2]*$matrixArrayB[2][1]*$matrixArrayB[3][3] -
                     $matrixArrayB[1][3]*$matrixArrayB[2][2]*$matrixArrayA[3][1];         

        print "Matrix A determinant = <b>".$determinantA."</br></b> Matrix B determinant = <b>".$determinantB."</b>";
    }elseif ($rowA == $colA && $rowA == 2 && $rowB == $colB && $rowB == 2){
        $determinantA = $matrixArrayA[1][1]*$matrixArrayA[2][2]-$matrixArrayA[1][2]*$matrixArrayA[2][1];

        $determinantB = $matrixArrayB[1][1]*$matrixArrayB[2][2]-$matrixArrayB[1][2]*$matrixArrayB[2][1];

        print "Matrix A determinant = <b>".$determinantA."</br></b> Matrix B determinant = <b>".$determinantB."</b>";
    }else{
        echo "<div id='error'>Inoperative matrix sizes for determining the determinant</div";
    }

?>