public class Premiere extends Cinema {
    private String studio;
    private String jamTayang;
    private int hargaTiket;

    public Premiere(int id, String namaBioskop, String lokasi, int jumlahStudio,
                    String judulFilm, String genre, String durasi,
                    String sutradara, String rumahProduksi, int tahunRilis,
                    String studio, String jamTayang, int hargaTiket) {
        super(id, namaBioskop, lokasi, jumlahStudio,
            judulFilm, genre, durasi, sutradara, rumahProduksi, tahunRilis);
        this.studio = studio;
        this.jamTayang = jamTayang;
        this.hargaTiket = hargaTiket;
    }

    public String getStudio() { return studio; }
    public void setStudio(String studio) { this.studio = studio; }
    public String getJamTayang() { return jamTayang; }
    public void setJamTayang(String jamTayang) { this.jamTayang = jamTayang; }
    public int getHargaTiket() { return hargaTiket; }
    public void setHargaTiket(int hargaTiket) { this.hargaTiket = hargaTiket; }

    public String[] data() {
        return new String[] {
            String.valueOf(getId()),
            getNamaBioskop() + " / " + getLokasi() + " / " + getJumlahStudio() + " studio",
            getJudulFilm() + " / " + getGenre() + " / " + getDurasi(),
            getSutradara() + " / " + getRumahProduksi() + " / " + getTahunRilis(),
            getStudio() + " / " + getJamTayang() + " / Rp" + getHargaTiket()
        };
    }
}
