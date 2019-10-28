<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Łukasz Adamowicz Zadanie Rekrutacyjne</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
     <div id="wrapper">
        <div id="content-wrap">
            <div id="left-sidebar">
                <div id="sticky"><form action="MainFile.php" method="post">
                    Input numbers for rows and columns from range 1-7</br>
                    <b>Matrix A</b></br></br>Rows                              
                            <input type="number" name="rowA" min='1' max='7' value = '2' id="rowA"></br>Columns
                            <input type="number" name="colA" min='1' max='7' value = '2' id="colA"></br>
                        </br><b>Matrix B</b></br></br>Rows
                             <input type="number" name="rowB" min='1' max='7' value = '2' id="rowB"></br>Columns
                             <input type="number" name="colB" min='1' max='7' value = '2' id="colB">
                        </br><button type="submit">Create Matrices</button>
                        </form></div>
                </br>Determinant works only for 2x2 and 3x3 Matrices.
            </div>
               <div id="content">
                    <div id="inner-content">
                <?php
                        if (isset($_POST['rowA'])){
                            require_once('Array.php'); // załadowanie osobnego pliku z szablonem macierzy
                            include_once('Maths.php'); // Odklejenie pliku z działaniami na macierzach od głównego pliku
                            include_once('DisplayMatrices.php');
                            $rowA = $_POST['rowA'];    //
                            $colA = $_POST['colA'];    //   Pobranie danych 
                            $rowB = $_POST['rowB'];    //
                            $colB = $_POST['colB'];    // 
                        
                            $matA = new Matrix($rowA , $colA);       // Stworzenie macierzy A z podanymi parametrami
                            $matB = new Matrix($rowB , $colB);      // Stworzenie macierzy B z podanymi parametrami

                            $maths = new Maths ($matA->GetArray(), $matB->GetArray(), $matA->GetNumRows(), $matB->GetNumRows(), $matA->GetNumCols(), $matB->GetNumCols()); 
                            
                            $MatrixA = new DispalyMatricesMain($matA->GetArray(), 'Matrix A');
                            $MatrixB = new DispalyMatricesMain($matB->GetArray(), 'Matrix B');

                            if ($rowA==$rowB && $colA==$colB){
                                $AddingM = new DispalyMatrices($maths->AddMatrix(), 'Adding Result');
                                echo "</br>";
                                $SubtractionM = new DispalyMatrices($Subtraction = $maths->SubMatrix(), 'Subtraction Result');
                            }else{
                                echo "<div id='error'></br>Inoperative matrix size for adding and subtracting</div></br>";
                            }
                            if($colA == $rowB){
                                echo "</br>";
                                $MultiplyM = new DispalyMatrices($Multiply = $maths->MultMatrix(), 'Multiplying Result');
                            }else{
                                echo "<div id='error'></br>Inoperative matrix sizes for multiplying</div>";
                            }
                            if($rowA == 2 && $rowB == 2 && $colA == 2 && $colB == 2){
                                echo "</br>Determinant for matrix A = <b>".$maths->DetMatrix2A()."</b>";
                                echo "</br>Determinant for matrix B = <b>".$maths->DetMatrix2B()."</b>";
                            }else if($rowA == 3 && $rowB == 3 && $colA == 3 && $colB == 3){
                                echo "</br>Determinant for matrix A = <b>".$maths->DetMatrix3A()."</b>";
                                echo "</br>Determinant for matrix B = <b>".$maths->DetMatrix3B()."</b>";
                            }else{
                                echo "<div id='error'></br>Inoperative matrix sizes for determing determinant</div>";
                            }
                        }
                ?>
                    </div>
               </div>
            </div>
            <div id="footer"><p>Łukasz Adamowicz Zadanie rekrutacyjne</p></div>
    </div>
</body>
</html>
