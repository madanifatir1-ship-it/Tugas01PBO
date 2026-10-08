<?php
require_once __DIR__ . '/Pemain.php';

class Tim {
    private string $namaTim;
    /** @var Pemain[] */
    private array $daftarPemain;

    /** @param Pemain[] $daftarPemain */
    public function __construct(string $namaTim, array $daftarPemain) {
        $this->namaTim = $namaTim;
        $this->setDaftarPemain($daftarPemain);
    }

    public function getNamaTim(): string {
        return $this->namaTim;
    }

    public function setNamaTim(string $namaTim): void {
        $this->namaTim = $namaTim;
    }

    /** @return Pemain[] */
    public function getDaftarPemain(): array {
        return $this->daftarPemain;
    }

    /** @param Pemain[] $daftarPemain */
    public function setDaftarPemain(array $daftarPemain): void {
        foreach ($daftarPemain as $pemain) {
            if (!$pemain instanceof Pemain) {
                throw new InvalidArgumentException('Daftar tim hanya boleh berisi objek Pemain.');
            }
        }

        $this->daftarPemain = $daftarPemain;
    }

    public function tampilkanPemain(): void {
        echo "Tim " . $this->namaTim . " memiliki pemain:\n";
        foreach ($this->daftarPemain as $pemain) {
            echo "- " . $pemain->getNama() . "\n";
        }
    }
}
?>
