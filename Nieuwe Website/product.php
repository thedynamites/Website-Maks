<?php
// include classes
include_once "config/database.php";
include_once "objects/product.php";
include_once "objects/product_image.php";
include_once "objects/cart_item.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$product = new Product($db);
$product_image = new ProductImage($db);
// get ID of the product to be edited and action
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$action = isset($_GET['action']) ? $_GET['action'] : "";
 
// set the id as product id property
$product->id = $id;
 
// to read single record product
$product->readOne();
 
// set page title
$page_title = $product->name;
$cart_item = new CartItem($db);
 
// get ID of the product to be edited
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$action = isset($_GET['action']) ? $_GET['action'] : "";
 
// set the id as product id property
$product->id = $id;
 
// to read single record product
$product->readOne();

 
// set page title
$page_title = $product->name;

// include page header HTML
include_once 'layout_head.php';

echo "<div class='col-md-12'>";
    if($action=='added'){
        echo "<div class='alert alert-info'>";
            echo "Product was added to your cart!";
        echo "</div>";
    }

    else if($action=='unable_to_add'){
        echo "<div class='alert alert-info'>";
            echo "Unable to add product to cart. Please contact Admin.";
        echo "</div>";
    }
echo "</div>";

// content will be here
 
// include page footer HTML
include_once 'layout_foot.php';
?>