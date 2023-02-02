<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>product View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>product View Details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $product_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM products WHERE id='$product_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $product = mysqli_fetch_array($query_run);
                                ?>

                                    <div class="mb-3">
                                        <label>Product Name</label>
                                        <h2>
                                            <?=$product['name'];?>
                                        </h2>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Product Cost</label>
                                        <h5>
                                            <?=$product['cost'];?>
                                        </h5>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Product Price</label>
                                        <h5>
                                            <?=$product['price'];?>
                                        </h5>
                                    </div>
                                    <div class="mb-3">
                                        <label>Product Group</label>
                                        <h3>
                                            <?=$product['grop'];?>
                                        </h3>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
