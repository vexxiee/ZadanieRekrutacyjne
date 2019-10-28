<?php
class Maths{

            public $matrixArrayA;
            public $matrixArrayB;
            public $row1, $row2, $col1, $col2;
            public function __construct($matrixArrayA, $matrixArrayB, int $row1, int $row2, int $col1, int $col2) 
            {
                $this->matrixArrayA = $matrixArrayA;
                $this->matrixArrayB = $matrixArrayB;
                $this->row1 = $row1;
                $this->row2 = $row2;
                $this->col1 = $col1;
                $this->col2 = $col2;
            }

        public function AddMatrix(){
            $rowA = $this->row1;
            $rowB = $this->row2;
            $colA = $this->col1;
            $colB = $this->col2;
            $matrixArrayA = $this->matrixArrayA;
            $matrixArrayB = $this->matrixArrayB;
                    for ($k=1; $k<=$rowB; $k++){
                      for ($l=1; $l<=$colB; $l++){
                        $result[$k][$l] = 0;
                      $result[$k][$l] += $matrixArrayA[$k][$l] + $matrixArrayB[$k][$l];
                      }
                     }
                     return $result;
        }

        public function SubMatrix(){

            $rowA = $this->row1;
            $rowB = $this->row2;
            $colA = $this->col1;
            $colB = $this->col2;
            $matrixArrayA = $this->matrixArrayA;
            $matrixArrayB = $this->matrixArrayB;
                    for ($k=1; $k<=$rowB; $k++){
                      for ($l=1; $l<=$colB; $l++){
                        $result[$k][$l] = 0;
                        $result[$k][$l] += $matrixArrayA[$k][$l] - $matrixArrayB[$k][$l];
                      }
                     }
                     return $result;
        }

        public function MultMatrix(){

            $rowA = $this->row1;
            $rowB = $this->row2;
            $colA = $this->col1;
            $colB = $this->col2;
            $matrixArrayA = $this->matrixArrayA;
            $matrixArrayB = $this->matrixArrayB;   
                    for ($i=1; $i <=$rowA; $i++){
                        for($j=1; $j <=$colB; $j++){           
                            $result[$i][$j] = 0;
                            for($k=1; $k <=$rowB; $k++){
                                $result[$i][$j] += $matrixArrayA[$i][$k] * $matrixArrayB[$k][$j]; // do zmiennej $result[$i][$j] zostanie dodany wynik mnożenia odpowiednich pól macierzy
                            }
                        }
                    }   
            return $result;
        }

        public function DetMatrix3A(){
            $matrixArrayA = $this->matrixArrayA;
        
                $determinantA = $matrixArrayA[1][1]*$matrixArrayA[2][2]*$matrixArrayA[3][3] +
                            $matrixArrayA[1][2]*$matrixArrayA[2][3]*$matrixArrayA[3][1] +
                            $matrixArrayA[1][3]*$matrixArrayA[2][1]*$matrixArrayA[3][2] -
                            $matrixArrayA[1][1]*$matrixArrayA[2][3]*$matrixArrayA[3][2] -
                            $matrixArrayA[1][2]*$matrixArrayA[2][1]*$matrixArrayA[3][3] -
                            $matrixArrayA[1][3]*$matrixArrayA[2][2]*$matrixArrayA[3][1];
        
                return $determinantA;
               
        }   

        public function DetMatrix3B(){
            $matrixArrayB = $this->matrixArrayB;

            $determinantB = $matrixArrayB[1][1]*$matrixArrayB[2][2]*$matrixArrayB[3][3] +
            $matrixArrayB[1][2]*$matrixArrayB[2][3]*$matrixArrayB[3][1] +
            $matrixArrayB[1][3]*$matrixArrayB[2][1]*$matrixArrayB[3][2] -
            $matrixArrayB[1][1]*$matrixArrayB[2][3]*$matrixArrayB[3][2] -
            $matrixArrayB[1][2]*$matrixArrayB[2][1]*$matrixArrayB[3][3] -
            $matrixArrayB[1][3]*$matrixArrayB[2][2]*$matrixArrayB[3][1];      

            return $determinantB;

        }

        public function DetMatrix2A(){
            $matrixArrayA = $this->matrixArrayA;
        
                $determinantA = $matrixArrayA[1][1]*$matrixArrayA[2][2]-$matrixArrayA[1][2]*$matrixArrayA[2][1];
        
                return $determinantA;
               
        }   
        
        public function DetMatrix2B(){
            $matrixArrayB = $this->matrixArrayB;
        
                $determinantB = $matrixArrayB[1][1]*$matrixArrayB[2][2]-$matrixArrayB[1][2]*$matrixArrayB[2][1];;
        
                return $determinantB;
                
            }
    }
?>
