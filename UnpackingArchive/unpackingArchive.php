<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

   if(!@copy('http://www.org.net.ua/price_opt.zip','./test.zip'))
    {
        $errors= error_get_last();
        echo "COPY ERROR: ".$errors['type'];
        echo "<br />\n".$errors['message'];
    } else {
     echo "File copied from remote! . <br/>";
    }

   $zip = new ZipArchive;
    $file = realpath("test.zip");
    $res = $zip->open($file);
    if ($res === TRUE) {
        $zip->extractTo('unzip');
        $zip->close();
        echo 'ok';
    } else {
        echo 'failed, code:' . $res;
    }


require_once 'PHPExcel.php';
$pExcel = PHPExcel_IOFactory::load('unzip/'.'price_opt.xls');

// Цикл по листам Excel-файла
foreach ($pExcel->getWorksheetIterator() as $worksheet) {
    // выгружаем данные из объекта в массив
    $tables[] = $worksheet->toArray();
}
//var_dump($tables);

$con = mysqli_connect("localhost", "root", "", "base_price");
mysqli_set_charset($con,"utf-8");

if (mysqli_connect_errno()) {
    echo "Filed: " . mysqli_connect_error();
}

//$query = "INSERT INTO `orgtekhnika_price` (`id`, `brand_name`, `model`, `price_usd`, `price_uah`, `existence`) VALUES ('1', '', '', NULL, NULL, '')";
//$zapros = mysqli_query($con, $query);

foreach( $tables as $table ) {


    // Цикл по строкам
    foreach($table as $row) {

        //       Выберает по ID
        $s =  str_replace(',','', $row[0] );
        if (!is_numeric($s)) {
            continue;
        }
        $d = str_replace('','', $row[1] );
        $query = "INSERT INTO `orgtekhnika_price` (`id`, `brand_name`, `model`, `price_usd`, `price_uah`, `existence`) VALUES ($s, $d, '', NULL, NULL, '')";
        $zapros = mysqli_query($con, $query);



        // Цикл по колонкам
//        foreach( $row as $key => $col ) {
//            if ($key == 0) {
//                $query = "INSERT INTO `orgtekhnika_price` (`id`, `brand_name`, `model`, `price_usd`, `price_uah`, `existence`) VALUES ('1', '', '', NULL, NULL, '')";
//                $zapros = mysqli_query($con, $query);
//            }
//
//            //Убирает четвертый столбец
////            if ($key != 3 ) {
////
////            }
//        }

    }

}

?>
