<?php
    include "model/connect.php";
    include "view/header.php";

    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'trangchu':
                include "model/product.php";
                $pr = new Product;
                $pr = $pr -> showAll();
                include_once 'view/index.php';
                break;
            case 'sanpham':
                include_once 'view/product.php';
                break;
            case 'cuahang':
                include_once 'view/store.php';
                break;
            case 'menu':
                include_once 'view/menu.php';
                break;
            default:
                include "model/product.php";
                $pr = new Product;
                $pr = $pr -> showAll();
                include 'view/index.php';
                break;
        }
    }
    else{
        include "model/product.php";
        $pr = new Product;
        $pr = $pr -> showAll();
        include 'view/index.php';
    }

    include "view/footer.php";
    
?>