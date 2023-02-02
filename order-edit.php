<?php
session_start();
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

    <title>Product Edit</title>
</head>
<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order time Edit
                            <a href="order.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                      <?php
                      if(isset($_GET['id']))
                      {
                        $product_id = mysqli_real_escape_string($con, $_GET['id']);
                          $query = "SELECT * FROM orders WHERE id='$product_id' ";
                          $query_run = mysqli_query($con, $query);

                          if(mysqli_num_rows($query_run) > 0)
                          {
                              $product = mysqli_fetch_array($query_run);
                              ?>
                              <form action="code.php" method="POST">
                                  <input type="hidden" name="order-id" value="<?=$product['id'];?>">

                                <div class="form-group mb-3">
                                    <label class="mb-3" for="">Change Date & Time</label>
                                    <input type="datetime-local" name="date_dt" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" name="order_edit" class="btn btn-primary">Edit Order</button>
                                  </div>

                                </form>
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
