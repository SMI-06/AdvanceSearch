<?php
$title = 'Edit Product';
require 'include/config.php';
require 'include/header.php';

if (isset($_GET['edit-id'])) {
    $id = $_GET['edit-id'];
}

$select = mysqli_query($con, "SELECT * FROM products where id = $id");
$res = mysqli_fetch_assoc($select);
?>

<div class="row py-2">
    <div class="col-md-12 text-center rounded bg-dark text-white rounded-3">
        <h1>Edit Product</h1>
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
                <div class="row image-sec">
                    <div class="image-card">
                        <img src="Images/<?php echo $res['Product_Image'] ?>" class="img" alt="Product Image">
                        <label for="file-upload" class="upload">
                            <input type="file" id="file-upload" name="Product_Image" class="sr-only">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="Product_Name" class="form-label">Product Name</label>
                        <input type="text" hidden value="<?php echo $res['id'] ?>" class="form-control" name="id" id="Product_Name">
                        <input type="text" value="<?php echo $res['Product_Name'] ?>" class="form-control" name="Product_Name" id="Product_Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="Product_Category" class="form-label">Product Category</label>
                        <!-- <input type="text" value="<?php echo $res['Product_Category'] ?>" class="form-control" name="Product_Category" id="Product_Category"> -->
                        <select class="form-control" name="Product_Category" id="Product_Category">
                            <?php if ($res['Product_Category'] == "Clothes") { ?>
                                <option selected hidden><?php echo $res['Product_Category'] ?></option>
                                <option value="Footwear">Footwear</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Decoration">Decoration</option>
                            <?php } else if ($res['Product_Category'] == "Footwear") { ?>
                                <option selected hidden><?php echo $res['Product_Category'] ?></option>
                                <option value="Clothes">Cloth</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Decoration">Decoration</option>
                            <?php } else if ($res['Product_Category'] == "Electronics") { ?>
                                <option selected hidden><?php echo $res['Product_Category'] ?></option>
                                <option value="Clothes">Cloth</option>
                                <option value="Footwear">Footwear</option>
                                <option value="Decoration">Decoration</option>
                            <?php } else if ($res['Product_Category'] == "Decoration") { ?>
                                <option selected hidden><?php echo $res['Product_Category'] ?></option>
                                <option value="Clothes">Cloth</option>
                                <option value="Footwear">Footwear</option>
                                <option value="Electronics">Electronics</option><?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="Product_Price" class="form-label">Product Price</label>
                        <input type="text" value="<?php echo $res['Product_Price'] ?>" class="form-control" name="Product_Price" id="Product_Price">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="Product_Stock" class="form-label">Product Stock</label>
                        <select class="form-control" name="Product_Stock" id="Product_Stock">
                            <?php if ($res['Product_Stock'] == 10) { ?>
                                <option selected hidden><?php echo $res['Product_Stock'] ?></option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                            <?php } else if ($res['Product_Stock'] == 15) { ?>
                                <option selected hidden><?php echo $res['Product_Stock'] ?></option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                            <?php } else if ($res['Product_Stock'] == 20) { ?>
                                <option selected hidden><?php echo $res['Product_Stock'] ?></option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="25">25</option>
                            <?php } else if ($res['Product_Stock'] == 25) { ?>
                                <option selected hidden><?php echo $res['Product_Stock'] ?></option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <button type="submit" name="edit_products" class="btn btn-dark form-control">Edit Product</button>
            </form>
        </div>
    </div>
</div>
<?php
require 'include/footer.php';
?>