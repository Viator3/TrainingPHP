<?php
require_once 'PHPExcel.php';
$pExcel = PHPExcel_IOFactory::load('test.xls');

// Цикл по листам Excel-файла
foreach ($pExcel->getWorksheetIterator() as $worksheet) {
    // выгружаем данные из объекта в массив
    $tables[] = $worksheet->toArray();
}
var_dump($tables);
echo '<br>';
foreach( $tables as $table ) {
//   // echo '<table border="1">';
//    // Цикл по строкам

    foreach($table as $row) {
        if (is_numeric($row[0])) {
            echo $row[0];
        }
//
//        echo '<br>';
//        // Цикл по колонкам
//        foreach( $row as $col ) {
//
//            //echo '<td>'.$col.'</td>';
//
//                echo $col;
//
//            echo "\n";
//
        }
//        //echo '</tr>';
//    }
//   // echo '</table>';
}
?>