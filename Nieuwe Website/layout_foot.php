</div>
        <!-- /row -->
 
    </div>
    <!-- /container -->
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<!-- custom script will be here -->
 <script>
$(document).ready(function(){
    // add to cart button listener
    $('.add-to-cart-form').on('submit', function(){
 
        // info is in the table / single product layout
        var id = $(this).find('.product-id').text();
        var quantity = $(this).find('.cart-quantity').val();
 
        // redirect to add_to_cart.php, with parameter values to process the request
        window.location.href = "add_to_cart.php?id=" + id + "&quantity=" + quantity;
        return false;
        });

    // update quantity button listener
    $('.update-quantity-form').on('update', function(){
     
        // get basic information for updating the cart
        var id = $(this).find('.product-id').text();
        var quantity = $(this).find('.cart-quantity').val();
     
        // redirect to update_quantity.php, with parameter values to process the request
        window.location.href = "update_quantity.php?id=" + id + "&quantity=" + quantity;
        return false;
        });
    // change product image on hover
    $(document).on('mouseenter', '.product-img-thumb', function(){
        var data_img_id = $(this).attr('data-img-id');
        $('.product-img').hide();
        $('#product-img-'+data_img_id).show();
        
            echo "<div class='col-md-5'>";
 
    echo "<div class='product-detail'>Price:</div>";
    echo "<h4 class='m-b-10px price-description'>&#36;" . number_format($product->price, 2, '.', ',') . "</h4>";
 
    echo "<div class='product-detail'>Product description:</div>";
    echo "<div class='m-b-10px'>";
        // make html
        $page_description = htmlspecialchars_decode(htmlspecialchars_decode($product->description));
 
        // show to user
        echo $page_description;
    echo "</div>";
 
    echo "<div class='product-detail'>Product category:</div>";
    echo "<div class='m-b-10px'>{$product->category_name}</div>";
 
echo "</div>";

echo "<div class='col-md-2'>";
    // cart item settings
    $cart_item->user_id=1; // we default to a user with ID "1" for now
    $cart_item->product_id=$id;
 
    // if product was already added in the cart
    if($cart_item->exists()){
        echo "<div class='m-b-10px'>This product is already in your cart.</div>";
        echo "<a href='cart.php' class='btn btn-success w-100-pct'>";
            echo "Update Cart";
        echo "</a>";
    }
 
    // if product was not added to the cart yet
    else{
 
        echo "<form class='add-to-cart-form'>";
            // product id
            echo "<div class='product-id display-none'>{$id}</div>";
 
            // select quantity
            echo "<div class='m-b-10px f-w-b'>Quantity:</div>";
            echo "<input type='number' class='form-control m-b-10px cart-quantity' value='1' min='1' />";
 
            // enable add to cart button
            echo "<button style='width:100%;' type='submit' class='btn btn-primary add-to-cart m-b-10px'>";
                echo "<span class='glyphicon glyphicon-shopping-cart'></span> Add to cart";
            echo "</button>";
 
        echo "</form>";
    }
echo "</div>";

        });
});
</script>

</body>
</html>