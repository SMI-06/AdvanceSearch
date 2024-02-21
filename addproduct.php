<?php
$title = 'Add Products';
require 'include/config.php';
require 'include/header.php'; ?>

<div class="row">
    <div class="col-md-12 text-center bg-dark text-white rounded-3">
        <h1>Add Product</h1>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-12">
        <form action="query.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="Product_Image" class="form-label">Product Image</label>
                <input type="file" class="form-control" name="Product_Image" id="Product_Image_id">
            </div>
            <div class="mb-3">
                <label for="Product_Name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="Product_Name" id="Product_Name">
            </div>
            <div class="mb-3">
                <label for="Product_Category" class="form-label">Product Category</label>
                <input type="text" class="form-control" name="Product_Category" id="Product_Category">
            </div>
            <div class="mb-3">
                <label for="Product_Price" class="form-label">Product Price</label>
                <input type="text" class="form-control" name="Product_Price" id="Product_Price">
            </div>
            <div class="mb-3">
                <label for="Product_Stock" class="form-label">Product Stock</label>
                <input type="text" class="form-control" name="Product_Stock" id="Product_Stock">
            </div>
            <button type="submit" name="add_products" class="btn btn-dark form-control">Add Product</button>
        </form>
    </div>
</div>


<?php
require 'include/footer.php';
?>