<?php
require_once 'Person.php';

$person1 = new Person("Lenu", 2000, "Hanoi");
$person2 = new Person("Lephuong", 2002, "Namdinh");

$age1 = $person1->tinhTuoi();
$age2 = $person2->tinhTuoi();

if ($age1 > $age2) {
    echo $person1->getName() . "lớn tuổi hơn với số tuổi " . $age1;
} elseif ($age1 < $age2) {
    echo $person1->getName() . "nhỏ tuổi hơn với số tuổi" . $age1;
} else {
    echo $person1->getName() . " và " . $person2->getName() . " bằng tuổi nhau";
}
