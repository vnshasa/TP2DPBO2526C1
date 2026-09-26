from Cinema import Cinema

class Premiere(Cinema):
    def __init__(self, id, namaBioskop, lokasi, jumlahStudio,
                judulFilm, genre, durasi, sutradara, rumahProduksi, tahunRilis,
                studio, jamTayang, hargaTiket):
        super().__init__(id, namaBioskop, lokasi, jumlahStudio,
                        judulFilm, genre, durasi, sutradara, rumahProduksi, tahunRilis)
        self.__studio = studio
        self.__jamTayang = jamTayang
        self.__hargaTiket = hargaTiket

    def getStudio(self): return self.__studio
    def setStudio(self, studio): self.__studio = studio
    def getJamTayang(self): return self.__jamTayang
    def setJamTayang(self, jamTayang): self.__jamTayang = jamTayang
    def getHargaTiket(self): return self.__hargaTiket
    def setHargaTiket(self, hargaTiket): self.__hargaTiket = hargaTiket

    def data(self):
        return [
            str(self.getId()), self.getNamaBioskop(), self.getLokasi(), str(self.getJumlahStudio()),
            self.getJudulFilm(), self.getGenre(), self.getDurasi(), self.getSutradara(),
            self.getRumahProduksi(), str(self.getTahunRilis()), self.getStudio(),
            self.getJamTayang(), str(self.getHargaTiket())
        ]
