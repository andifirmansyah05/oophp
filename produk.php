<?php


class Produk2
{
    public $judul, $penulis, $penerbit, $harga;

    public function getLabel() {
        return "$this->judul, $this->penulis";
    }
};

$produk1 = new Produk2();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shueisha";
$produk1->harga = 30000;

$produk2 = new Produk2();
$produk2->judul = "Uncharted"; 
$produk2->penulis = "Neil Druckmann";
$produk2->penerbit = "Sony Computer";
$produk2->harga = 25000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
// var_dump($produk1);
echo "Game : " . $produk2->getLabel();





?>