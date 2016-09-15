<?php
// buat class laptop
class laptop {
  
   // buat property untuk class laptop
   public $pemilik;
   public $merk;
  
   // buat method untuk class laptop
   public function hidupkan_laptop() {
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
   }
  
   public function matikan_laptop() {
     return "Matikan Laptop $this->merk punya $this->pemilik";
   }
  
   public function restart_laptop() {
     $matikan=$this->matikan_laptop();        
     $hidupkan= $this->hidupkan_laptop();
     $restart=$matikan."<br />".$hidupkan;
     return $restart;
   }
}
  

?>