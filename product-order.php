<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">

          <?php include('message.php'); ?>

          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h4>Product Details
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
                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="buy_id" value="<?= $product['id']; ?>">

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
                                            <div class="mb-3">
                                                <button type="submit" name="buy_product" class="btn btn-primary">
                                                    Buy product
                                                </button>
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

                              </tbody>
                          </table>

                      </div>
                  </div>
              </div>
          </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
