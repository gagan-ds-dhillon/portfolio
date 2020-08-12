<?php

// COLLECT DATA
// Create the function collectArray.
// This function contains the parameter 
// that defines the required product-type. 

function collectArray($parameter){

    // Make $products from your stock available 
    // inside this function.(use statement global)
    global $products;

    // Have a new empty array ready for 
    // collecting required products 
    $collect = [];
    
    // Check if $products array has any elements 
    if(sizeof($products) > 0){
        
        // If so,
        // scan through $products array (foreach-loop) and check
        // each product if it contains the required product-code 
        foreach($products as $product){
            if($product['product-code'] == $parameter){
                $collect[] = $product;
            }
            // If the match is found, push the 
            // fitting product into $collect array. 
        // close if
        }
        
        // If $collect is not empty, return collect
        if(sizeof($collect) > 0){
        return $collect;}else{
        // otherwise: return products
        return $products;
        // close conditional
        }

    // close if
    }

// close collectArray
}




// PRINT HTML:
// Create function printHTML.
function printHTML(){
    // Check if a product-code is in $_GET array. If product code is 
    // in $_GET array, it means user selected it, and you will 
    // print only the products of the selected type, otherwise
    // print all products.
    if(isset($_GET["data-prod"])){
        $loop = collectArray($_GET["data-prod"]);
    }else{
        $loop = collectArray('');
    }




    // You need to loop through the array of selected products,
    foreach($loop as $item){
        $productname = $item["product-name"];
        $productprice = $item["product-price"];
        $productimage = $item["product-image"];

        echo '<div class="col-sm-12 col-md-6 col-lg-3 mb-0">
                <figure class="py-2">
                    <img src="'.$productimage.'" class="img-fluid" alt="'.$productname.'">
                    <figcaption>
                        <ul class="pl-2 pt-2">
                            <li>'.$productname.'</li>
                            <li>'.$productprice.'</li>
                        </ul>
                    </figcaption>
                </figure>
            </div>';
    
        // create HTML tags in the fly and extract values 
        // of each product into proper or corresponding HTML tag.
        // Print the HTML content.
    // Close loop.
    }
// Close printHTML.
}
?>