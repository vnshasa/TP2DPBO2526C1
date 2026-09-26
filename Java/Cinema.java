public class Cinema extends Bioskop {
    private String judulFilm;
    private String genre;
    private String durasi;
    private String sutradara;
    private String rumahProduksi;
    private int tahunRilis;

    public Cinema(int id, String namaBioskop, String lokasi, int jumlahStudio,
                String judulFilm, String genre, String durasi,
                String sutradara, String rumahProduksi, int tahunRilis) {
        super(id, namaBioskop, lokasi, jumlahStudio);
        this.judulFilm = judulFilm;
        this.genre = genre;
        this.durasi = durasi;
        this.sutradara = sutradara;
        this.rumahProduksi = rumahProduksi;
        this.tahunRilis = tahunRilis;
    }

    public String getJudulFilm() { return judulFilm; }
    public void setJudulFilm(String judulFilm) { this.judulFilm = judulFilm; }
    public String getGenre() { return genre; }
    public void setGenre(String genre) { this.genre = genre; }
    public String getDurasi() { return durasi; }
    public void setDurasi(String durasi) { this.durasi = durasi; }
    public String getSutradara() { return sutradara; }
    public void setSutradara(String sutradara) { this.sutradara = sutradara; }
    public String getRumahProduksi() { return rumahProduksi; }
    public void setRumahProduksi(String rumahProduksi) { this.rumahProduksi = rumahProduksi; }
    public int getTahunRilis() { return tahunRilis; }
    public void setTahunRilis(int tahunRilis) { this.tahunRilis = tahunRilis; }
}
