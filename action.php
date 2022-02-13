<?php
require_once 'vendor/autoload.php';
use App\classes\Series;
use App\classes\Product;

if(isset($_GET['pages']))
{
    if($_GET['pages']=='home')
    {
        include "pages/home.php";
    }
    elseif ($_GET['pages']=='all-product')
    {
        $product= new Product();
        $products= $product->getAllProduct();
        include "pages/product.php";
    }
}
elseif(isset($_POST['btn']))
{
    $series= new Series($_POST);
    $result=$series->index();
    include 'pages/home.php';
}