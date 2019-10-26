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
                            $rowA = $_POST['rowA'];    //
                            $colA = $_POST['colA'];    //   Pobranie danych 
                            $rowB = $_POST['rowB'];    //
                            $colB = $_POST['colB'];    // 
                        
                            $matA = new Matrix($rowA , $colA);       // Stworzenie macierzy A z podanymi parametrami
                            $matB= new Matrix2($rowB , $colB);      // Stworzenie macierzy B z podanymi parametrami
                            $matrixArrayA = $matA->CreateMatrix();    // wywołanie macierzy A
                            $matrixArrayB = $matB->CreateMatrix();   // wywołanie macierzy B

                            include_once('Maths.php'); // Odklejenie pliku z działaniami na macierzach od głównego pliku
                        }
                ?>
                    </div>
               </div>
            </div>
            <div id="footer"><p>Łukasz Adamowicz Zadanie rekrutacyjne</p></div>
    </div>
</body>
</html>
