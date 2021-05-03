<?php
class Product {
  public $nama;
  public function __construct($nama){
    $this->nama=$nama;
  }

  public function tampil(){
    echo "$this->nama<br>";
    for ($i =1; $i <= 3; $i++){ 
        echo "$i. Menu $this->nama $i<br>";
    }  
  }

}

$menu1 = new Product("Makanan");
$menu2 = new Product("Minuman");
$menu3 = new Product("Parsel");
echo $menu1->tampil();
echo $menu2->tampil();
echo $menu3->tampil();


?>