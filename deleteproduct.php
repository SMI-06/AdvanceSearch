<?php
$title = 'Edit Product';
require '../include/config.php';
require '../include/header.php';

if (isset($_GET['delete-id'])) {
    $id = $_GET['delete-id'];
}

$select = mysqli_query($con, "SELECT * FROM products where id = $id");
$row = mysqli_fetch_assoc($select);
?>

<div class="row py-2">
    <div class="col-md-12 text-center rounded bg-dark text-white rounded-3">
        <h1>Delete Product</h1>
    </div>
</div>


<div class="card mb-3 offset-3" style="max-width: 540px; ">
    <div class="row g-0">
        <div class="col-md-4 offset-4">
            <img src="../Images/<?php echo $row['Product_Image'] ?>" class="img-fluid rounded-start" alt="Images">
        </div>
        <div class="col-md-8 offset-2">
            <div class="card-body text-center">
                <h5 class="card-title">Name: <?php echo $row['Product_Name'] ?></h5>
                <p>Category: <?php echo $row['Product_Category'] ?></p>
                <p class="card-text">Price: <?php echo $row['Product_Price'] ?></p>
                <p class="card-text">Stock: <?php echo $row['Product_Stock'] ?></p>
                <p class="card-text">Are You Sure? <a href="../include/query.php?delete=<?php echo $id?>" name="delete" class="btn btn-danger">Delete</a></p>
            </div>
        </div>
    </div>
</div>