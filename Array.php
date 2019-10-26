<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>zzz</title>
</head>
<body>
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
                print "<caption><div class='mainDiv'>Matrix A</div></caption>";
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
        print "<caption><div class='mainDiv'>Matrix B</div></caption>";
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
</body>
</html>

