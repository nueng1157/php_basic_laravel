<h3>Class and Object</h3>

<?php
//สร้าง class
class Product{
    public $name;
    public $price;
}


//สร้าง object
$product1 = new Product();
$product1->name = 'Product 1'; //กำหนดชื่อ
$product1->price = 100; //กำหนดราคา

$product2 = new Product();
$product2->name = 'Product 2'; //กำหนดชื่อ
$product2->price = 200; //กำหนดราคา

echo $product1->name; //เรียกชื่อมาดู
echo '<br />';
echo $product1->price; //เรียกราคามาดู
echo '<br />';

echo $product2->name; //เรียกชื่อมาดู
echo '<br />';
echo $product2->price; //เรียกราคามาดู

?>