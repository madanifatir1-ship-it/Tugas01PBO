<?php
class Bab {
    private string $judulBab;

    public function __construct(string $judulBab) {
        $this->judulBab = $judulBab;
    }

    public function getJudulBab(): string {
        return $this->judulBab;
    }

    public function setJudulBab(string $judulBab): void {
        $this->judulBab = $judulBab;
    }
}
?>
