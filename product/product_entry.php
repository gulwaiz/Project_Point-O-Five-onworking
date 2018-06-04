<!DOCTYPE html>
<html>

<head><title>Product entry</title>

<link href="product_entry.css" rel="stylesheet" style="text/css">

</head>

<body>

<!-- details -->
<div id="box_d">
<div id="box">

<!-- heading -->
<p id="heading">Please Enter Your Product Details</p>

<!-- form begin-->
<form action="thanks.php" method="POST">
<ul>

<li>
<p class="text_style">Product Brand</p>
<input type="text" id="p_brand" name="p_brand" class="list_stye">
</li>

<li>
<p class="text_style">Product Name</p>
<input type="text" id="p_name" name="p_name" class="list_stye">
</li><br><br><br><br><br><br><br><br>

<li>
<p class="text_style">Product Model</p>
<input type="text" id="p_model" name="p_model" class="list_stye">
</li>

<li>
<p class="text_style">Net Quantity</p>
<input type="text" id="p_quantity" name="p_quantity" class="list_stye">
</li><br><br><br><br><br><br><br><br>

</ul>



<ul>

<li>
<p class="text_style">MRP</p>
<input type="text" id="p_price" name="p_price" class="list_stye">
</li>

<li>
<p class="text_style">Manufactured Date</p>
<input type="text" id="p_mdate" name="p_mdate" class="list_stye">
</li><br><br><br><br><br><br><br><br>

<li>
<p class="text_style">Warranty</p>
<input type="text" id="p_warranty" name="p_warranty" class="list_stye">
</li>

<li>
<p class="text_style">Bar Code</p>
<input type="text" id="p_barcode" name="p_barcode" class="list_stye">
</li>

<li style="display:none;">
<p class="text_style"  >E-mail</p>
<input type="email" id="email" name="email" value="$email" class="list_stye" >
</li>


</ul>

<input type="submit" value="SUBMIT DETAILS" id="submit" name="submit">

</form>

</div>

</div>

</body>

</html>