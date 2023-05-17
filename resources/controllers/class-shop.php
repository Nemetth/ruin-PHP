<?php
class Producto{
  public $id;
  public $perfume;
  public $price;
  public $line;
  public $description;
  public $size;
  public $ingredients;
  public $intensity;
  public $img;



public function getId() {
        return $this->id;
    }


public function traer_catalogo(){  //Función de catalogo
$json = file_get_contents($_SERVER['DOCUMENT_ROOT']. '/ruin/resources/data/productos.json');
$jsonData = json_decode($json);
$catalogo = [];



foreach ($jsonData as $value){
  $productos = new self();
          $productos->id = $value->id;
          $productos->perfume = $value->perfume;
          $productos->price = $value->price;
          $productos->line = $value->line;
          $productos->description = $value->description;
          $productos->size = $value->size;
          $productos->ingredients = $value->ingredients;
          $productos->intensity = $value->intensity;
          $productos->img = $value->img;
          $catalogo[] = $productos;

}
  return $catalogo;
}
}

?>