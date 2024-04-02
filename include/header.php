<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo $title ?></title>

    <style>
        .icon {
            position: absolute;
            top: 12%;
            left: 90%;
        }

        .icon2 {
            position: absolute;
            top: 25%;
            left: 90%;
        }

        .data {
            text-align: center;
            position: relative;
            top: 40px;
            border: solid 1px;
            height: 25px;
        }

        .name {
            text-align: center;
            position: relative;
            top: 33px;
            border: solid 1px;
            height: 35px;
        }

        .img {
            text-align: center;
            position: relative;
            top: 10px;
            height: 100%;
            width: 50%;
            border-radius: 25px;
            left: 25%;
        }

        .image-sec {
            height: 200px;
            width: 200px;
            border-radius: 25px;
            position: relative;
            left: 40%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .image-card {
            position: relative;
            height: 50%;
            width: 100%;
            border-radius: 25px;
        }

        .input-image {
            position: relative;
            top: 20px;
            display: none;
        }

        .upload {
            width: 50px;
            height: 50px;
            display: inline-block;
            position: relative;
            cursor: pointer;
        }

        .upload::before {
            content: '';
            display: block;
            position: absolute;
            top: 250%;
            left: -30px;
            width: 100%;
            height: 100%;
            background-image: url("Images/upload.svg");
            /* Replace with the path to your upload icon */
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        /* Hide the default file input visually */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        .product_image_label {
            position: relative;
            top: 30px;
            left: 50px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning px-3 py-3   ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SMI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <div class="btn-group">
                            <a class="dropdown-toggle nav-link" style="cursor: pointer;" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="category.php?id=clothes">Clothes</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="category.php?fid=footwear">Footwear</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="category.php?eid=electronics">Electronics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="category.php?did=decorations">Decorations</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addproduct.php">Add Product</a>
                    </li>
                </ul>
            </div>
            <div class="ml-auto">
                <p class="btn btn-dark">Advance Search</p>
            </div>
        </div>
    </nav>


    <div class="container mt-3">