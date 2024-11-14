<h3>Object and array</h3>

<?php
//สร้าง class
class Product{
    public $name;
    public $price;
}


//สร้าง object
$p1 = new Product();
$p1->name = 'Product 1'; //กำหนดชื่อ
$p1->price = 100; //กำหนดราคา

$p2 = new Product();
$p2->name = 'Product 2'; //กำหนดชื่อ
$p2->price = 100; //กำหนดราคา

$p3 = new Product();
$p3->name = 'Product 3'; //กำหนดชื่อ
$p3->price = 100; //กำหนดราคา

$products = [$p1, $p2, $p3];
?>

<table border ="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>
    
    <?php foreach ($products as $product){?>

   
    <tr>
        <td><?php echo $product->name; ?></td>
        <td><?php echo $product->price; ?></td>
    </tr>
    <?php } ?>
</table>