<?php
require('products_db.php');
require('components/header.php');
$id = $_GET['product_id'];
$is_new=get_product_is_new($id);
$is_last=get_product_is_last($id);
$title = get_product_title($id);
$img_url = get_img_url($id);

$price = get_product_price($id);
$discount = get_product_discount($id);
$product_class="item";
if ($discount>0)
{
	$price_with_discount=$price-$discount;
}
if ($is_new) 
{
	$product_class=$product_class.' item-new';
}
if ($discount > 1400 and $is_last) 
{
	$product_class=$product_class.' item-hot';
}
require('components/product_info.php');
require('components/footer.php');


