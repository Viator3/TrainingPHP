
<?php
$ar = array(
    array('artikul' => 'Внешняя батарея 1500mAh', 'brand' => 'Brando'),
    array('artikul' => 'Тактический чехол  aggressor ', 'brand' => 'aggressor'),
    array('artikul' => 'CAT5E (FTP Solid), KLM, 4*2*0,50 CCA INDOOR PVC Jacket			', 'brand' => 'KLM '),
    array('artikul' => 'Наушники Plantronics Audio 478 Stereo USB Headset ', 'brand' => 'Plantronics '),
    array('artikul' => 'Мультиинструмент Leatherman OHT Black Stainless Steel Multi-Tool Black Molle Sheath - 831540 ', 'brand' => 'Leatherman'),
    array('artikul' => 'CAT5E (FTP Solid), KLM, 4*2*0,50 CCA INDOOR PVC Jacket			', 'brand' => 'KLM'),
);

foreach ($ar as $row) {
    $s = searchArt($row['artikul'], $row['brand']);
    var_dump($s);
}

function searchArt($artikul, $brand) {
    $brand = trim($brand);
    $artikul = trim($artikul);

    $strLength = stripos($artikul, $brand);
    $brendLength = strlen($brand);
    $str = substr($artikul, $strLength + $brendLength);
    if (($strLength !== false) && (($strLength + $brendLength) != strlen($artikul))) {

        return $str;
    } else {
        return $artikul;
    }
}
?>