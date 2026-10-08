<?php
require_once __DIR__ . '/Mahasiswa.php';

class MahasiswaInternational extends Mahasiswa {
    private string $negaraAsal;

    public function __construct(
        string $nama = "Belum Diisi",
        string $nim = "Belum Diisi",
        int|string $umurAtauNegara = "Belum Diisi",
        ?string $negaraAsal = null
    ) {
        if (is_int($umurAtauNegara)) {
            parent::__construct($nama, $nim, $umurAtauNegara);
            $this->negaraAsal = $negaraAsal ?? "Belum Diisi";
        } else {
            parent::__construct($nama, $nim);
            $this->negaraAsal = $umurAtauNegara;
        }
    }

    public function getNegaraAsal(): string {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void {
        $this->negaraAsal = $negaraAsal;
    }

    public function tampilkanInfo(): void {
        parent::tampilkanInfo();
        echo "Negara Asal: " . $this->negaraAsal . "\n";
    }
}
?>
