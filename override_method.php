<h3>Override Method</h3>

<?php 
class ParentClass {
    public function getInfo() {
        return "Parent Class";
    }
}

class Product extends ParentClass {  //สืบทอดคุณสมบัติมาจาก class แม่ ถ้าชื่อ method เหมือนกัน ของ child class จะทับค่าของ parent class
    public function getInfo() {
        return "Product Class";
    }
}

$product = new Product();
echo $product->getInfo();
?>

