<?php
$title = 'Show Products';
require 'include/config.php';
require 'include/header.php'; ?>



<div class="row">
    <?php
    $select = "SELECT * FROM `products`";
    $res = mysqli_query($con, $select);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) { ?>
            <div class="col-md-6" id="oldresult">
                <div class="card mb-3" style="max-width: 540px; ">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./Images/<?php echo $row['Product_Image'] ?>" class="img-fluid rounded-start" alt="Images">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Name: <?php echo $row['Product_Name'] ?></h5>
                                <p>Category: <?php echo $row['Product_Category'] ?></p>
                                <p class="card-text"><small class="text-muted">Price: <?php echo $row['Product_Price'] ?></small></p>
                                <p class="card-text"><small class="text-muted">Stock: <?php echo $row['Product_Stock'] ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    }
    ?>
</div>

<?php
require 'include/footer.php';
?>