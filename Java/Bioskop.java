public class Bioskop {
    private int id;
    private String namaBioskop;
    private String lokasi;
    private int jumlahStudio;

    public Bioskop(int id, String namaBioskop, String lokasi, int jumlahStudio) {
        this.id = id;
        this.namaBioskop = namaBioskop;
        this.lokasi = lokasi;
        this.jumlahStudio = jumlahStudio;
    }

    public int getId() { return id; }
    public void setId(int id) { this.id = id; }
    public String getNamaBioskop() { return namaBioskop; }
    public void setNamaBioskop(String namaBioskop) { this.namaBioskop = namaBioskop; }
    public String getLokasi() { return lokasi; }
    public void setLokasi(String lokasi) { this.lokasi = lokasi; }
    public int getJumlahStudio() { return jumlahStudio; }
    public void setJumlahStudio(int jumlahStudio) { this.jumlahStudio = jumlahStudio; }
}
