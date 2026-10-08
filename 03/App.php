<?php
require_once __DIR__ . '/BangunDatar.php';
require_once __DIR__ . '/Lingkaran.php';
require_once __DIR__ . '/Persegi.php';
require_once __DIR__ . '/Segitiga.php';

function formatJavaFloat(float $value): string {
    $singlePrecision = unpack('fvalue', pack('f', $value))['value'];
    $formatted = sprintf('%.8g', $singlePrecision);
    return strpbrk($formatted, '.eE') === false ? $formatted . '.0' : $formatted;
}

$bd = new BangunDatar();
$bd->luas();
$bd->keliling();

$lk = new Lingkaran(15);
echo "Luas lingkaran: " . formatJavaFloat($lk->luas()) . "\n";
echo "keliling lingkaran: " . formatJavaFloat($lk->keliling()) . "\n";

$pj = new Persegi(10);
echo "Luas Bujur Sangkar: " . formatJavaFloat($pj->luas()) . "\n";
echo "keliling Bujur Sangkar: " . formatJavaFloat($pj->keliling()) . "\n";

$sg = new Segitiga(10, 8);
echo "Luas Segitiga: " . formatJavaFloat($sg->luas()) . "\n";

// Segitiga mewarisi keliling() dari BangunDatar.
$sg->keliling();
?>
