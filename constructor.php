<?php


class Produk
{
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->judul, $this->penulis";
    }
}
;

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shueisha", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 25000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();





?>