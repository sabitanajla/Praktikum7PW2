<?php

class Tes{

}

$a = new Tes();


class Mobil{
    public $nama,
            $merk,
            $warna;

    public function tambahKecepatan(){

    }

    public function kurangiKecepatan(){

    }
}



class Produk{
    public $nama  = 'ini nama',
           $jenis = 'ini jenis',
           $harga = 9999;


    public function __construct($nama, $jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    public function printHarga(){
        return $this->harga;
    }
}




$produk2 = new Produk("BAJU HITAM POLOS", "KAOS", 14000);



echo "Produk 2 : $produk2->nama, $produk2->jenis";
echo "<br>";
echo "Harga : " . $produk2->printHarga();





?>