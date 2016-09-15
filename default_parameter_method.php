<?php
// buat class laptop
class laptop {
   // buat method untuk class laptop
   public function hidupkan_laptop($pemilik="Joko",$merk="Samsung") {
     return "Hidupkan Laptop $merk punya $pemilik";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_andi= new laptop();
  
echo $laptop_andi->hidupkan_laptop();
// hasil: "Hidupkan Laptop Samsung punya Joko";
  
echo "<br />";
  
echo $laptop_andi->hidupkan_laptop("Andi", "Lenovo");
// hasil: "Hidupkan Laptop Lenovo punya Andi";
?>