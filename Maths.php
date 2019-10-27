<?php
abstract class Maths{

    public $matrixArrayA;
    public $matrixArrayB;

        public function __construct($matrixArrayA, $matrixArrayB) 
        {
            $this->matrixArrayA = $matrixArrayA;
            $this->matrixArrayB = $matrixArrayB;
        }

        public function GetRowNumA() : int
        {
            $rowA = count($this->matrixArrayA);
            return $rowA;
        }
        public function GetRowNumB() : int
        {
            $rowB = count($this->matrixArrayB);
            return $rowB;
        }

        public function GetColNumA() : int
        {
            $colA = count($this->matrixArrayA[1]);
            return $colA;
        }
        public function GetColNumB() : int
        {
            $colB = count($this->matrixArrayB[1]);
            return $colB;
        }
        
}

class Actions extends Maths{

        public function AddMatrix(){

            $rowA = $this->GetRowNumA();
            $rowB = $this->GetRowNumB();
            $colA = $this->GetColNumA();
            $colB = $this->GetColNumB();
            $matrixArrayA = $this->matrixArrayA;
            $matrixArrayB = $this->matrixArrayB;
            if ($rowA==$rowB && $colA==$colB){       // Sprawdzenie czy macierze sa tego samego rozmiaru
                print "<table class='resultTable'>";
                print "<caption>Aadding result</caption>";
                 for ($k=1; $k<=$rowA; $k++){
                 print "<tr>";
                    for ($l=1; $l<=$colA; $l++){
                        $adding = $matrixArrayA[$k][$l] + $matrixArrayB[$k][$l];
                        print "<td>".$adding."</td>";           // wyswietlanie nowej tabeli z macierzy
                    }print "<tr>";
                 
                }print "</table>";
             }else{
                 echo "<div id='error'>Inoperative matrix size for adding</div></br>"; // jeżeli w któryms zapytaniu if wartosc bedzie false wyswietli sie blad
             }
        }

        public function SubMatrix(){

            $rowA = $this->GetRowNumA();
            $rowB = $this->GetRowNumB();
            $colA = $this->GetColNumA();
            $colB = $this->GetColNumB();
            $matrixArrayA = $this->matrixArrayA;
            $matrixArrayB = $this->matrixArrayB;
            if ($rowA==$rowB && $colA==$colB){          // Sprawdzenie czy macierze sa tego samego rozmiaru
                print "<table class='resultTable'>";
                print "<caption>Subtracting result</caption>";
                    for ($k=1; $k<=$rowB; $k++){
                    print "<tr>";
                      for ($l=1; $l<=$colB; $l++){
                      $subtraction = $matrixArrayA[$k][$l] - $matrixArrayB[$k][$l];
                      print "<td>".$subtraction."</td>"; // wyswietlanie nowej tabeli z macierzy
                      }print "<tr>";
                     }print "</table>\n";
            }else{
           echo "<div id='error'>Inoperative matrix size for subtracting</div></br>"; // jeżeli w któryms zapytaniu if wartosc bedzie false wyswietli sie blad
            } 
        }

        public function MultMatrix(){

            $rowA = $this->GetRowNumA();
            $rowB = $this->GetRowNumB();
            $colA = $this->GetColNumA();
            $colB = $this->GetColNumB();
            $matrixArrayA = $this->matrixArrayA;
            $matrixArrayB = $this->matrixArrayB;
            if($colA != $rowB){   // sprawdzenie poprawnosci warunku dla mnozenia tutaj Sprawdzenie czy ilosc kolumn macierzy A jest równa ilosci wierszy macierzy B
            echo "<div id='error'></br>Inoperative matrix sizes for multiplying</div>";
            }else{
                print "<table class='resultTable'>";
                print "<caption>Multiplying result</caption>";
                    for ($i=1; $i <=$rowA; $i++){
                        print "<tr>";
                        for($j=1; $j <=$colB; $j++){           
                            $result[$i][$j] = 0;
                            for($k=1; $k <=$rowB; $k++){
                                $multiply = $result[$i][$j] += $matrixArrayA[$i][$k] * $matrixArrayB[$k][$j]; // do zmiennej $result[$i][$j] zostanie dodany wynik mnożenia odpowiednich pól macierzy
                            }print "<td>".$multiply."</td>";
                        }print "<tr>";
                    } print "</table>";     
            }
        }

        public function DetMatrix(){

            $rowA = $this->GetRowNumA();
            $rowB = $this->GetRowNumB();
            $colA = $this->GetColNumA();
            $colB = $this->GetColNumB();
            $matrixArrayA = $this->matrixArrayA;
            $matrixArrayB = $this->matrixArrayB;
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
        
                print "<div id='det'></br>Matrix A determinant = <b>".$determinantA."</br></b> Matrix B determinant = <b>".$determinantB."</b>";
            }elseif ($rowA == $colA && $rowA == 2 && $rowB == $colB && $rowB == 2){
                $determinantA = $matrixArrayA[1][1]*$matrixArrayA[2][2]-$matrixArrayA[1][2]*$matrixArrayA[2][1];
        
                $determinantB = $matrixArrayB[1][1]*$matrixArrayB[2][2]-$matrixArrayB[1][2]*$matrixArrayB[2][1];
        
                print "<div id='det'></br>Matrix A determinant = <b>".$determinantA."</br></b> Matrix B determinant = <b>".$determinantB."</b>";
            }else{
                echo "<div id='error'></br>Inoperative matrix sizes for determining the determinant";
            }
        }
    }
?>
