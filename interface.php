<h3>Interface</h3>

<?php 
interface ProductInterface { //กำหนดว่า class ใดก็ตามที่จะ implement กับ interface ตัวนี้จะชื่อ getInfos
    public function getInfo();
}

class Product implements ProductInterface {
    public function getInfo() {
        return "Product";
    }
}

$product = new Product();
echo $product->getInfo();
?>

