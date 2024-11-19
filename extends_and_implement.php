<h3>Extends and Implement</h3> 

<?php 
interface ProductInterface { //implement เป็นการกำหนดชื่อ
    public function getInfo();
}

class ParentClass {
    public function getInfo() {
        return "Parent Class";
    }
}

class Product extends ParentClass implements ProductInterface {
    public function getInfo() {
        return "Product";
    }
}

$product = new Product();
echo $product->getInfo();
?>

