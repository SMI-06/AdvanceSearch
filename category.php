<?php
$title = 'Show Products';
require 'include/config.php';
require 'include/header.php'; ?>

<div class="row">
    <div class="col-md-12">
        <?php if (isset($_GET['id']) == "Product Added Successfully") { ?>
            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert"> -->
            <!-- <strong>Yahoo! </strong> <?php echo $_GET['id'] ?> -->
            <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> -->
            <!-- <span aria-hidden="true">&times;</span> -->
            <!-- </button> -->
            <!-- </div> -->
        <?php  } ?>
    </div>
</div>

<div class="row">
    <div class="col-md-6 offset-3 my-4">
        <form action="">
            <input type="text" class="form-control" name="search" id="search" placeholder="Search Here">
        </form>
    </div>
</div>


<div id="searchresult" class="row">

</div>


<div class="row" id="oldresult">
    <?php
    if (isset($_GET['id']) == "clothes") {
        $select = "SELECT * FROM `products` where `Product_Category` = 'Clothes'";
        $res = mysqli_query($con, $select);
        if (mysqli_num_rows($res) > 0) { ?>
            <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px; ">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="Images/<?php echo $row['Product_Image'] ?>" class="img-fluid rounded-start" alt="Images">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Name: <?php echo $row['Product_Name'] ?></h5>
                                    <p>Category: <?php echo $row['Product_Category'] ?></p>
                                    <p class="card-text">Price: <?php echo $row['Product_Price'] ?></p>
                                    <p class="card-text">Stock: <?php echo $row['Product_Stock'] ?></p>
                                    <p class="card-text icon"><a href="editproduct.php?edit-id=<?php echo $row['id'] ?>" class="card-text"> <i class="bi bi-pencil-square"></i></a></p>
                                    <p class="card-text icon2"><a href="deleteproduct.php?delete-id=<?php echo $row['id'] ?>" class="card-text"> <i class="bi bi-trash"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        } 
        else { ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <div class="alert alert-dark d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <div>
                                &nbsp;&nbsp; There is no product to show...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    } else if (isset($_GET['fid']) == "footwear") {
        $select = "SELECT * FROM `products` where `Product_Category` = 'Footwear'";
        $res = mysqli_query($con, $select);
        if (mysqli_num_rows($res) > 0) { ?>
            <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px; ">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="Images/<?php echo $row['Product_Image'] ?>" class="img-fluid rounded-start" alt="Images">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Name: <?php echo $row['Product_Name'] ?></h5>
                                    <p>Category: <?php echo $row['Product_Category'] ?></p>
                                    <p class="card-text">Price: <?php echo $row['Product_Price'] ?></p>
                                    <p class="card-text">Stock: <?php echo $row['Product_Stock'] ?></p>
                                    <p class="card-text icon"><a href="editproduct.php?edit-id=<?php echo $row['id'] ?>" class="card-text"> <i class="bi bi-pencil-square"></i></a></p>
                                    <p class="card-text icon2"><a href="deleteproduct.php?delete-id=<?php echo $row['id'] ?>" class="card-text"> <i class="bi bi-trash"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        } else { ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <div class="alert alert-dark d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <div>
                                &nbsp;&nbsp; There is no product to show...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    } else if (isset($_GET['eid']) == "Electronics") {
        $select = "SELECT * FROM `products` where `Product_Category` = 'Electronics'";
        $res = mysqli_query($con, $select);
        if (mysqli_num_rows($res) > 0) { ?>
            <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px; ">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="Images/<?php echo $row['Product_Image'] ?>" class="img-fluid rounded-start" alt="Images">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Name: <?php echo $row['Product_Name'] ?></h5>
                                    <p>Category: <?php echo $row['Product_Category'] ?></p>
                                    <p class="card-text">Price: <?php echo $row['Product_Price'] ?></p>
                                    <p class="card-text">Stock: <?php echo $row['Product_Stock'] ?></p>
                                    <p class="card-text icon"><a href="editproduct.php?edit-id=<?php echo $row['id'] ?>" class="card-text"> <i class="bi bi-pencil-square"></i></a></p>
                                    <p class="card-text icon2"><a href="deleteproduct.php?delete-id=<?php echo $row['id'] ?>" class="card-text"> <i class="bi bi-trash"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        } else { ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <div class="alert alert-dark d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <div>
                                &nbsp;&nbsp; There is no product to show...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    } else if (isset($_GET['did']) == "decorations") {
        $select = "SELECT * FROM `products` where `Product_Category` = 'Decoration'";
        $res = mysqli_query($con, $select);
        if (mysqli_num_rows($res) > 0) { ?>
            <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px; ">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="Images/<?php echo $row['Product_Image'] ?>" class="img-fluid rounded-start" alt="Images">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Name: <?php echo $row['Product_Name'] ?></h5>
                                    <p>Category: <?php echo $row['Product_Category'] ?></p>
                                    <p class="card-text">Price: <?php echo $row['Product_Price'] ?></p>
                                    <p class="card-text">Stock: <?php echo $row['Product_Stock'] ?></p>
                                    <p class="card-text icon"><a href="editproduct.php?edit-id=<?php echo $row['id'] ?>" class="card-text"> <i class="bi bi-pencil-square"></i></a></p>
                                    <p class="card-text icon2"><a href="deleteproduct.php?delete-id=<?php echo $row['id'] ?>" class="card-text"> <i class="bi bi-trash"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        } else { ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <div class="alert alert-dark d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <div>
                                &nbsp;&nbsp; There is no product to show...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    }else { ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="alert alert-dark d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <div>
                            &nbsp;&nbsp; Please Add Products
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    ?>
</div>

<?php
require 'include/footer.php';
?>

<script>
    $(document).ready(function() {
        $('#search').keyup(function() {
            var value = $(this).val();
            if (value != "") {
                $.ajax({
                    url: 'include/fetch_data.php',
                    method: 'POST',
                    data: {
                        value: value
                    },
                    success: function(data) {
                        $('#searchresult').html(data);
                        $('#searchresult').show();
                        $('#oldresult').hide();
                    }
                });
            } else {
                $('#searchresult').hide();
                $('#oldresult').show();
            }
        })
    })
</script>