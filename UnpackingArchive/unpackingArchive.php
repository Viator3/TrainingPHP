<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    /*if(!@copy('http://www.org.net.ua/price_opt.zip','./test.zip'))
    {
        $errors= error_get_last();
        echo "COPY ERROR: ".$errors['type'];
        echo "<br />\n".$errors['message'];
    } else {
     echo "File copied from remote!";
    }

   /* $curl = curl_init('http://www.org.net.ua/price_opt.zip');
    $fp = fopen('test.zip','w');
    curl_setopt($curl, CURLOPT_FILE, $fp);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_exec($curl);
    curl_close($curl);
    fflush($fp);
    fclose($fp);*/

    /*$zip = new ZipArchive;
    $file = realpath("test.zip");
    $res = $zip->open($file);
    if ($res === TRUE) {
        $zip->extractTo('unzip');
        $zip->close();
        echo 'ok';
    } else {
        echo 'failed, code:' . $res;
    }*/

   /* $xml = simplexml_load_file(test.xls);
    $row = 0;
    foreach ($xml->sheetData->row as $item) {
        $out[test.xls][$row] = array();
        //по каждой ячейке строки
        $cell = 0;
        foreach ($item as $child) {
            $attr = $child->attributes();
            $value = isset($child->v)? (string)$child->v:false;
            $out[test.xls][$row][$cell] = isset($attr['t']) ? $sharedStringsArr[$value] : $value;
            $cell++;
        }
        $row++;
}
var_dump($out);*/
//closedir($handle);


/*$dir = "/var/www/html/";
//$handle = @opendir(PATH . '/unzip');
$handle = @opendir($dir);
$out = array();
while ($file = @readdir($handle)) {
    //проходим по всем файлам из директории /unzip
    if ($file != "." && $file != ".." && $file != '_rels') {
        $xml = simplexml_load_file($dir . $file);
        //по каждой строке
        $row = 0;
        foreach ($xml->sheetData->row as $item) {
            $out[$file][$row] = array();
            //по каждой ячейке строки
            $cell = 0;
            foreach ($item as $child) {
                $attr = $child->attributes();
                $value = isset($child->v)? (string)$child->v:false;
                $out[$file][$row][$cell] = isset($attr['t']) ? $sharedStringsArr[$value] : $value;
                $cell++;
            }
            $row++;
        }
    }
}
var_dump($out);*/
/*
$dir = "/var/www/html/";

// Открыть известный каталог и начать считывать его содержимое
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "файл: $file : тип: " . filetype($dir . $file) . "\n" . '<br/>';
        }
        closedir($dh);
    }
}
*/

require_once 'Classes/PHPExcel.php';
$pExcel = PHPExcel_IOFactory::load('test.xls');

// Цикл по листам Excel-файла
foreach ($pExcel->getWorksheetIterator() as $worksheet) {
    // выгружаем данные из объекта в массив
    $tables[] = $worksheet->toArray();
}

foreach( $tables as $table ) {
    echo '<table border="1">';
    // Цикл по строкам
    foreach($table as $row) {
        echo '<tr>';
        // Цикл по колонкам
        foreach( $row as $col ) {
            echo '<td>'.$col.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>
