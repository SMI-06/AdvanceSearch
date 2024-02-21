<?php
require 'include/config.php';
if (isset($_REQUEST['add_products'])) {
    $Product_Image = $_FILES['Product_Image']['name'];
    $Image_temp_name = $_FILES['Product_Image']['tmp_name'];
    $Images_Location = 'Images/' . $Product_Image;
    $path = move_uploaded_file($Image_temp_name, $Images_Location);
    $product_name = $_REQUEST['Product_Name'];
    $Product_Category = $_REQUEST['Product_Category'];
    $Product_Price = $_REQUEST['Product_Price'];
    $Product_Stock = $_REQUEST['Product_Stock'];

    if (!($product_name && $Product_Category && $Product_Price && $Product_Stock)) { ?>
        <script>
            alert('Please Enter The Field');
            window.location.href = "./addproduct.php";
        </script>
    <?php } else {
        $insert = "INSERT INTO `products` (`Product_Name`, `Product_Image`, `Product_Category`, `Product_Price`, `Product_Stock`) VALUES ('$product_name','$Product_Image','$Product_Category','$Product_Price','$Product_Stock')";
        $res = mysqli_query($con,$insert);
        // print_r($res); exit();
        if($res){
        ?>
        <script>
            alert('Product Added');
            window.location.href = "./index.php";
        </script>
    <?php }else{?>
    
        <script>
            alert('Error');
            window.location.href = "./index.php";
        </script>
    <?php } }
} else { ?>
    <script>
        alert('Something Wrong In Image Upload');
        window.location.href = "./addproduct.php";
    </script>
<?php }
?>