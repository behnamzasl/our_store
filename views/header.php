<?php
 require_once("config.php");
//   $behnam = [];

//   // $db->where("id" , 1);
// //   $products = $db->get('products');
//   $user = $db->get('users');
$stores = $db->get('store');
// $stores = [];

?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>سرویس خرید گروهی</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
<!--  -->
<link rel="stylesheet" href="css/uikit.min.css" />

<!-- Custom styles for this template -->
<link href="css/logo-nav.css" rel="stylesheet">

<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>

</head>
<body style="margin-top:-56px;">

