<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  </head>
  <body>

    <div class="container mt-5">

            <?php include('message.php'); ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Product Add
                                <a href="index.php" class="btn btn-danger float-end">BACK</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST">

                                <div class="mb-3">
                                    <label>Product Name</label>
                                    <input required type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Product Cost</label>
                                    <input required type="number" name="cost"  min="0"  step="0.01" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Product Price</label>
                                    <input required type="number" name="price"  min="0"  step="0.01" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Product Group</label>
                                    <input required type="text" name="grop" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="save_product" class="btn btn-primary">Save product</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
