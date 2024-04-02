<?php
require '../include/config.php';

if (isset($_REQUEST['add_products'])) {
    $Product_Image = $_FILES['Product_Image']['name'];
    $Image_temp_name = $_FILES['Product_Image']['tmp_name'];
    $Images_Location = '../Images/' . $Product_Image;
    $path = move_uploaded_file($Image_temp_name, $Images_Location);
    $product_name = $_REQUEST['Product_Name'];
    $Product_Category = $_REQUEST['Product_Category'];
    $Product_Price = $_REQUEST['Product_Price'];
    $Product_Stock = $_REQUEST['Product_Stock'];

    if (!($product_name && $Product_Category && $Product_Price && $Product_Stock)) { ?>
        <script>
            location.href = "../products/addproduct.php?id=Filled The Input Field";
        </script>
        <?php } else {
        if ($path) {
            $insert = "INSERT INTO `products` (`Product_Name`, `Product_Image`, `Product_Category`, `Product_Price`, `Product_Stock`) VALUES ('$product_name','$Product_Image','$Product_Category','$Product_Price','$Product_Stock')";
            $res = mysqli_query($con, $insert);
            // print_r($res); exit();
            if ($res) {
        ?>
                <script>
                    window.location.href = "../index.php?id=Product Added Successfully";
                </script>
            <?php } else { ?>

                <script>
                    window.location.href = "../products/addproduct.php?Eid=There Is Some Problem. Please Try Again";
                </script>
            <?php }
        } else { ?>
            <script>
                alert('Something Wrong In Image Upload');
                exit();
                window.location.href = "../products/addproduct.php";
            </script>
        <?php }
    }
}



if (isset($_REQUEST['edit_products'])) {
    $Product_Image = $_FILES['Product_Image']['name'];
    $Image_temp_name = $_FILES['Product_Image']['tmp_name'];
    $Images_Location = '../Images/' . $Product_Image;
    $path = move_uploaded_file($Image_temp_name, $Images_Location);
    $product_id = $_REQUEST['id'];
    $product_name = $_REQUEST['Product_Name'];
    $Product_Category = $_REQUEST['Product_Category'];
    $Product_Price = $_REQUEST['Product_Price'];
    $Product_Stock = $_REQUEST['Product_Stock'];

    if ($path) {
        $imageupdate = mysqli_query($con, "UPDATE `products` SET `Product_Image`='$Product_Image' WHERE `id` = $product_id");
        // exit();
        ?>
        <script>
            window.location.href = "../index.php?id=Product Image Update Successfully";
        </script>
    <?php
    } else {
        $update = mysqli_query($con, "UPDATE `products` SET `Product_Name`='$product_name',`Product_Category`='$Product_Category',`Product_Price`='$Product_Price',`Product_Stock`='$Product_Stock' WHERE `id` = $product_id"); ?>
        <script>
            window.location.href = "../index.php?id=Product Update Successfully";
        </script>
<?php
    }
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = mysqli_query($con,"DELETE FROM `products` where `id` = $id");?>
    <script>
        window.location.href = "../index.php?id=Product Delete Successfully";
    </script>
<?php
}
?>