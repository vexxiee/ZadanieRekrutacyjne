<?php
        class Matrix {
            private $row;
            private $col;
            private $name;
                public function __construct(int $row , int $col, string $name){
                    $this->row=$row;
                    $this->col=$col;
                    $this->name=$name;
                }
            public function CreateMatrix(){
                $row = $this->row;
                $col = $this->col;
                $name = $this->name;
                print "<table class='mainTable'>";
                print "<caption>Matrix ".$name."</caption>";
                for ($i=1; $i<=$row; $i++) {
                    print "<tr>";
                    for ($j=1; $j<=$col; $j++) {
                        print "<td>".($array [$i][$j] = mt_rand(0,10))."</td>";
                    }print "</tr>"; 
                }print "</table>";
              return ($array);}
}
?>
