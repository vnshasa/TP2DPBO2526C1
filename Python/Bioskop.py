class Bioskop:
    def __init__(self, id, namaBioskop, lokasi, jumlahStudio):
        self.__id = id
        self.__namaBioskop = namaBioskop
        self.__lokasi = lokasi
        self.__jumlahStudio = jumlahStudio

    def getId(self): return self.__id
    def setId(self, id): self.__id = id
    def getNamaBioskop(self): return self.__namaBioskop
    def setNamaBioskop(self, namaBioskop): self.__namaBioskop = namaBioskop
    def getLokasi(self): return self.__lokasi
    def setLokasi(self, lokasi): self.__lokasi = lokasi
    def getJumlahStudio(self): return self.__jumlahStudio
    def setJumlahStudio(self, jumlahStudio): self.__jumlahStudio = jumlahStudio
