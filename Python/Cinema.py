from Bioskop import Bioskop

class Cinema(Bioskop):
    def __init__(self, id, namaBioskop, lokasi, jumlahStudio,
                judulFilm, genre, durasi, sutradara, rumahProduksi, tahunRilis):
        super().__init__(id, namaBioskop, lokasi, jumlahStudio)
        self.__judulFilm = judulFilm
        self.__genre = genre
        self.__durasi = durasi
        self.__sutradara = sutradara
        self.__rumahProduksi = rumahProduksi
        self.__tahunRilis = tahunRilis

    def getJudulFilm(self): return self.__judulFilm
    def setJudulFilm(self, judulFilm): self.__judulFilm = judulFilm
    def getGenre(self): return self.__genre
    def setGenre(self, genre): self.__genre = genre
    def getDurasi(self): return self.__durasi
    def setDurasi(self, durasi): self.__durasi = durasi
    def getSutradara(self): return self.__sutradara
    def setSutradara(self, sutradara): self.__sutradara = sutradara
    def getRumahProduksi(self): return self.__rumahProduksi
    def setRumahProduksi(self, rumahProduksi): self.__rumahProduksi = rumahProduksi
    def getTahunRilis(self): return self.__tahunRilis
    def setTahunRilis(self, tahunRilis): self.__tahunRilis = tahunRilis
