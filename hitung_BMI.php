<?php
    class HasilBMI{
        public $nama,
               $bb,
               $tb,
               $umur,
               $jk;
    
    
        public function __construct($nama, $bb, $tb, $umur, $jk){
            $this->nama = $nama;
            $this->bb   = $bb;
            $this->tb   = $tb;
            $this->umur = $umur;
            $this->jk   = $jk;
        }
    
        public function HasilBMI(){
            $this->tb = $_POST['tb']/100; 
            $rumus_tb = $this->tb * $this->tb;
            $hasil_tb = number_format($rumus_tb, 2, '.', '');
            $hasil = $_POST['bb'] / $hasil_tb;
            $hasil_bmi = number_format($hasil, 1, '.', '');
            return $hasil_bmi;
        }  


        public function hitungBMI(){
            $hasil_bmi = $this->HasilBMI();
            if ($hasil_bmi <= 18.5) {
                return "Kekurangan Berat Badan";
                
            } else if ($hasil_bmi > 18.5 AND $hasil_bmi <= 24.9 ) {
                return "Normal (Ideal)";
                
            } else if ($hasil_bmi > 25.0 AND $hasil_bmi <= 29.9) {
                return "Kelebihan Berat Badan";
                
            } else{
                return "Obesitas";
            
            }      
         }
     }
    
    
    $hasil = new HasilBMI($_POST['nama'], $_POST['bb'], $_POST['tb'], $_POST['umur'], $_POST['jk']);
    
            echo "<hr>";
            echo "OUTPUT FORM BMI";
            echo "<br>";
            echo "<br>";
            echo "Nama :$hasil->nama";
            echo "<br>";
            echo "Berat Badan :$hasil->bb";
            echo "<br>";
            echo "Tinggi Badan :$hasil->tb";
            echo "<br>";
            echo "Umur :$hasil->umur";
            echo "<br>";
            echo "Jenis Kelamin :$hasil->jk";
            echo "<br>";
            echo "BMI : " . $hasil->HasilBMI();
            echo "<br>";
            echo "Hasil : " . $hasil->hitungBMI();
            echo "<hr>";
?>

