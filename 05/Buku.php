<?php
require_once __DIR__ . '/Bab.php';

class Buku {
    private string $judulBuku;
    /** @var Bab[] Bab dibuat dan dimiliki oleh Buku (komposisi). */
    private array $daftarBab = [];

    public function __construct(string $judulBuku) {
        $this->judulBuku = $judulBuku;
        $this->tambahBab();
    }

    private function tambahBab(): void {
        $this->daftarBab[] = new Bab("Pendahuluan");
        $this->daftarBab[] = new Bab("Isi");
        $this->daftarBab[] = new Bab("Penutup");
    }

    public function getJudulBuku(): string {
        return $this->judulBuku;
    }

    public function setJudulBuku(string $judulBuku): void {
        $this->judulBuku = $judulBuku;
    }

    public function tampilkanBab(): void {
        echo "Buku " . $this->judulBuku . " memiliki bab:\n";
        foreach ($this->daftarBab as $bab) {
            echo "- " . $bab->getJudulBab() . "\n";
        }
    }
}
?>
