<?php
require 'Mahasiswa.php';

$mhs1 = new Mahasiswa("Muhammad Faathir Madani", "4525210100", 19);
$mhs1->tampilkanInfo();
echo "\n";

$mhs2 = new Mahasiswa("Budi", "12345678");
$mhs2->setUmur(20);
$mhs2->tampilkanInfo();
echo "\n";

$mhs3 = new Mahasiswa("Siti", "87654321", 22);
$mhs3->tampilkanInfo();
echo "\n";

$soja = new Mahasiswa();
$soja->setNama("Soja Purnamasari");
echo "Nama : " . $soja->getNama() . "\n";
$soja->setNim("4523210104");
echo "NIM : " . $soja->getNim() . "\n";
$soja->setUmur(15);
echo "Umur : " . $soja->getUmur() . "\n";
$soja->tampilkanInfo();
echo "\n";

$nenden = new Mahasiswa("Nenden Nuraini", "4523210144", 17);
$nenden->tampilkanInfo();
echo "\n";

$saya = new Mahasiswa("Muhammad Faathir Madani", "4525210100", 19);
$saya->tampilkanInfo();
?>
