<?php 

class DispalyMatricesMain{


    public function __construct($Array, string $ArrayName)
    {
        echo "<table class='mainTable'>";
                echo "<caption>".$ArrayName."</caption>";
                foreach($Array as $row){
                    echo "<tr>";
                    foreach ($row as $column){
                        echo "<td>$column</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
    }
}        

class DispalyMatrices{


    public function __construct($Array, string $ArrayName)
    {
        echo "<table class='resultTable'>";
                echo "<caption>".$ArrayName."</caption>";
                foreach($Array as $row){
                    echo "<tr>";
                    foreach ($row as $column){
                        echo "<td>$column</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
    }
}        

?>