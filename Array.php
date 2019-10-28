<?php
        class Matrix {
            public $row , $col , $array;
                public function __construct(int $row , int $col){
                    $this->row=$row;
                    $this->col=$col;
                    for ($i=1; $i<=$row; $i++) {
                        for ($j=1; $j<=$col; $j++) {
                            ($array [$i][$j] = mt_rand(0,10));
                        }
                    }
                  $this->array=$array;
                }
                public function GetArray(){
                    $array = $this->array;
                    return $array;
                }
                public function GetNumRows() : int
                {       
                    
                    $array = $this->GetArray();
                    $Rows = count($array);
                    return $Rows;
                }
                public function GetNumCols() : int
                {
                    $Cols = count($this->array[1]);
                    return $Cols;
                 }
        }        
?>
