public class Dokter {
    private String nama;

    public Dokter(String nama) {
        this.nama = nama;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public void merawat(Pasien pasien) {
        System.out.println("Dokter " + this.nama + " merawat pasien " + pasien.getNama());
    }
}