<?php
// buat class induk: komputer
class komputer {
  
   public $merk = "asus";
   public $processor = "intel";
   public $memory = "8GB";
  
   public function beli_komputer() {
     return "Beli komputer baru";
   }
}
  
// turunkan class komputer ke laptop
class laptop extends komputer {
  
   public function lihat_spec() {
     return "merk: $this->merk, processor: $this->processor, 
     memory: $this->memory";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();
  

  
//panggil method objek
echo $laptop_baru->beli_komputer();
echo "<br />";
echo $laptop_baru->lihat_spec();
?>