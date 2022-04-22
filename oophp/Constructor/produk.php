<?php 

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Weekly Shonen Jump", "Rp.100.000,00");
$produk2 = new Produk("Genshin Impact", "Cai Haoyu Liu Wei Luo Yuhao", "Mihoyo", "Gratis");
$produk3 = new Produk("Mobile Legend");
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);