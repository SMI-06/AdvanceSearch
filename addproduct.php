<?php
$title = 'Add Products';
require 'include/config.php';
require 'include/header.php'; ?>

<div class="row">
    <div class="col-md-12 text-center rounded bg-dark text-white rounded-3">
        <h1>Add Product</h1>
    </div>
</div>



<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <?php if (isset($_GET['id']) == "Filled The Input Field") { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Warning! </strong> <?php echo $_GET['id'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php  } else if (isset($_GET['Eid']) == "There Is Some Problem. Please Try Again") { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Oops! </strong> <?php echo $_GET['Eid'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <form action="include/query.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <div class="row image-sec">
                        <label for="Product_Image" class="form-label product_image_label">Product Image</label>
                            <label for="file-upload" class="upload">
                                <input type="file" id="file-upload" name="Product_Image" class="sr-only">
                            </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Product_Name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="Product_Name" id="Product_Name">
                </div>
                <div class="mb-3">
                    <label for="Product_Category" class="form-label">Product Category</label>
                    <select class="form-control" name="Product_Category" id="Product_Category">
                        <option selected hidden>Select Category</option>
                        <option value="Clothes">Cloth</option>
                        <option value="Footwear">Footwear</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Decoration">Decoration</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Product_Price" class="form-label">Product Price</label>
                    <input type="text" class="form-control" name="Product_Price" id="Product_Price">
                </div>
                <div class="mb-3">
                    <label for="Product_Stock" class="form-label">Product Stock</label>
                    <select class="form-control" name="Product_Stock" id="Product_Stock">
                        <option selected hidden>Select Stock</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                    </select>
                </div>
                <button type="submit" name="add_products" class="btn btn-dark form-control">Add Product</button>
            </form>
        </div>
    </div>
</div>
<?php
require 'include/footer.php';
?>