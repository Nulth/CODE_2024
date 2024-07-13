<?php
class DongVat
{
    // phạm vi truy cập: private public protected default
    // property
    private $name;
    public $color;
    public $quantity;
    // hàm tạo(constructor)
    public function __construct($name, $color, $quantity)
    {
        $this->name = $name;
        $this->color = $color;
        $this->quantity = $quantity;
    }
    //   method
    public function tiengKeu($tieng)
    {
        echo $tieng;
    }
    // getter
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    // hàm hủy destructor
    public function __destruct()
    {
        echo " đối tượng được hủy";
    }
}

// khởi tạo object
$dog1 = new DongVat('Gaugau', 'Black', '4');
$dog1->color = 'Yellow';
echo $dog1->color;
// echo $dog1->name;

echo $dog1->getName();
$dog1->setName('corgi');
echo $dog1->getName();


$dog1->tiengKeu('aaaa');
unset($dog1);
