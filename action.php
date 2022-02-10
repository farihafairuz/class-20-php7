<?php
require_once 'vendor/autoload.php';
use App\classes\Series;
if(isset($_GET['pages']))
{
    if($_GET['pages']=='home')
    {
        include "pages/home.php";
    }
}
elseif(isset($_POST['btn']))
{
    $series= new Series($_POST);
    $result=$series->index();
    include 'pages/home.php';
}