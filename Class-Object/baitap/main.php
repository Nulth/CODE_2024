<!-- SanPham(private thuộc tính) 
 ma_sanpham
 ten
 gia 
 soluong
 loai

 LoaiSP(private thuộc tính)
 ma_loai
 ten

 1.Tạo đối tượng loaiSP,SanPham
 2.Tạo 5 sp cùng loại
 3.Tính tổng các sp cùng loại
 

-->
<?php

require_once 'SanPham.php';
require_once 'LoaiSP.php';

$samsung = new LoaiSP('01', 'Samsung');
$samsungS22 = new SanPham('SP01', 'SamsungS22', '50000', '1', '001');

// var_dump($samsung);
// var_dump($samsungS22);

$sp1 = new SanPham('SP01', 'SamsungS22', '50000', '1', '001');
$sp2 = new SanPham('SP02', 'SamsungS23', '60000', '2', '002');
$sp3 = new SanPham('SP03', 'SamsungS24', '70000', '3', '003');
$sp4 = new SanPham('SP04', 'SamsungS25', '80000', '4', '004');
$sp5 = new SanPham('SP05', 'SamsungS26', '90000', '5', '005');

$tongGia = $sp1->getGia() + $sp2->getGia() + $sp3->getGia() + $sp4->getGia() + $sp5->getGia();
echo $tongGia;
