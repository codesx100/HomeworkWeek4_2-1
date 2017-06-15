<?php

 $product_description = filter_input(INPUT_POST, 'product_description');
 $list_price= filter_input(INPUT_POST, 'list_price');
 $discount_percent = filter_input(INPUT_POST,'discount percernt');

 $discount_amount = $discount_percent * $list_price * .01;
 $discount_price = $list_price - $discount_amount;

 $list_price_description = '$'.number_format($list_price,2);
 $discount_percent_description = $discount_percent . '%'
  $discount_amount_description = number_format($discount_percent,2);
 $discount_price_description = "$".number_format($discount_price,2);
 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>
 

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo discount_amount_description; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo discount_price_description; ?></span><br>
    </main>
</body>