<?php
        class Matrix {
            private $row;
            private $col;
                function __construct($row , $col){
                    $this->row=$row;
                    $this->col=$col;
                }
            function CreateMatrix(){
                $row = $this->row;
                $col = $this->col;
                print "<table class='mainTable'>";
                print "<caption>Matrix A</caption>";
                for ($i=1; $i<=$row; $i++) {
                    print "<tr>";
                    for ($j=1; $j<=$col; $j++) {
                        print "<td>".($matrix [$i][$j] = mt_rand(0,10))."</td>";
                    }   
                    print "</tr>"; 
                }
              print "</table>";
              return ($matrix);
    }
}
class Matrix2{
    private $row;
    private $col;
        function __construct($row , $col){
            $this->row=$row;
            $this->col=$col;
        }
    function CreateMatrix(){
        $row = $this->row;
        $col = $this->col;
        print "<table class='mainTable1'>";
        print "<caption>Matrix B</caption>";
        for ($x=1; $x<=$row; $x++) {
            print "<tr>";
            for ($y=1; $y<=$col; $y++) {
                print "<td>".($matrix2 [$x][$y] = mt_rand(0,10))."</td>";
            }  
            print "</tr>";       
        }
        print "</table>";    
      return ($matrix2);
    }
}
?>
