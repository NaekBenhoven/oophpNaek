<?php 

class Produk {
    public $judul = "judul",
           $penulis = "Penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Weekly Shonen Jump ";
$produk3->harga = "Rp.100.000,00";

var_dump($produk3);

$produk4 = new Produk();
$produk4 ->judul = "Genshin Impact";
$produk4 ->penulis = "Cai Haoyu Liu Wei Luo Yuhao";
$produk4 ->penerbit = "Mihoyo";
$produk4 ->harga = "Gratis";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getlabel();
