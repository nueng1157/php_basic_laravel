<h3>Class and Method</h3>

<?php 
class Product { //ชื่อ class จะขึ้นต้นด้วยตัวใหญ่
    public $name;
    public $price;

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    function getInfo() { //method ชื่อจะขึ้นต้นด้วยตัวเล็กคำต่อไปเป้นตัวใหญ่
        return "Name: ".$this->name. "  Price: ".$this->price;
    }
}

$product = new Product('Product 1', 100);
echo $product->getInfo(); //จะ return $name กับ $price มาให้
?>

