<?php
include 'config.php';
$store = [];
$store['name'] = 'saied';
$store['lastname'] = 'haghighi';
$store['store_name'] = 'مانی';
$store['username'] = 'saiedhaghighi';
$store['password'] = 'hamed';
$store['email'] = 'behzargari@gmail.com';
$store['has_permission'] = 1;
// $store['created_at'] = '94/5/10';
$store['pics_folder'] = './images/stores/mani';
$store['address'] = 'تهران جنت اباد 35 متری گلستان 16 متری اول جنب بانک تجارت پلاک 21 ' ;
$store['type'] = 'خواربار فروشی';
$db->insert('store', $store);

$brand = [];
$brand['name'] = 'golrang';
$brand['brand_pic'] = './images/brands/golrang.png';
$brand['persian_name'] = 'گلرنگ';
$db->insert('brands' , $brand);

$brand = [];
$brand['name'] = 'shirin_asal';
$brand['brand_pic'] = './images/brands/shirin_asal.png';
$brand['persian_name'] = 'شیرین عسل';
$db->insert('brands' , $brand);

$store_brand = [];
$store_brand['store_id'] = 1;
$store_brand['brand_id'] = 1;
$store_brand['product_type'] = 'محصولات بهداشتی';
$db->insert('store_brand' , $store_brand);

$store_brand = [];
$store_brand['store_id'] = 1;
$store_brand['brand_id'] = 2;
$store_brand['product_type'] = 'خوراکی ها';
$db->insert('store_brand' , $store_brand);



?>