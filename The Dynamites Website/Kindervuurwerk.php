<?php
// connect to database
include 'config/database.php';
 
// include objects
include_once "objects/kinder4.php";
include_once "objects/kinder_image4.php";
include_once "objects/cart_item.php";
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$product = new Product4($db);
$product_image = new ProductImage4($db);
$cart_item = new CartItem($db);

// set page title
$page_title="Kindervuurwerk!";
 
// page header html
include 'layout_head.php';
 
// contents will be here 
// to prevent undefined index notice
$action = isset($_GET['action']) ? $_GET['action'] : "";
 
// for pagination purposes
$page = isset($_GET['page']) ? $_GET['page'] : 1; // page is the current page, if there's nothing set, default is page 1
$records_per_page = 6; // set records or rows of data per page
$from_record_num = ($records_per_page * $page) - $records_per_page; // calculate for the query LIMIT clause

// read all products in the database
$stmt=$product->read($from_record_num, $records_per_page);
 
// count number of retrieved products
$num = $stmt->rowCount();
 
// if products retrieved were more than zero
if($num>0){
    // needed for paging
    $page_url="Kindervuurwerk.php?";
    $total_rows=$product->count();
 
    // show products
    include_once "read_products_template.php";
}
 
// tell the user if there's no products in the database
else{
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>No products found.</div>";
    echo "</div>"; 

}
// layout footer code
include 'layout_foot.php';
?>