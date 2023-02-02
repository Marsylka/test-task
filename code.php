<?php
session_start();
require 'dbcon.php';


if(isset($_POST['order_edit']))
{
    $date_dt = $_POST['date_dt'];
    $product_id = mysqli_real_escape_string($con, $_POST['order-id']);
    $query = "UPDATE orders SET id_date='$date_dt' WHERE id='$product_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Date Time Inserted Successfully";
        header("Location: order.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Date Time Not Inserted";
        header("Location: order.php");
        exit(0);
    }
}

if(isset($_POST['delete_order']))
{
    $order_id = mysqli_real_escape_string($con, $_POST['delete_order']);

    $query = "DELETE FROM orders WHERE id='$order_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Order Deleted Successfully";
        header("Location: order.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Order Not Deleted";
        header("Location: order.php");
        exit(0);
    }
}

if(isset($_POST['update_product']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $cost = mysqli_real_escape_string($con, $_POST['cost']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $grop = mysqli_real_escape_string($con, $_POST['grop']);

    $query = "UPDATE products SET name='$name', cost='$cost', price='$price', grop='$grop' WHERE id='$product_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "product Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "product Not Updated";
        header("Location: index.php");
        exit(0);
    }

}

if(isset($_POST['buy_product']))
{

    $id_time = date("Y-m-d H:i:s");
    $product_id = mysqli_real_escape_string($con, $_POST['buy_id']);


    $query = "INSERT INTO orders (id_date,ord_prod) VALUES ('$id_time','$product_id')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Someting wrong!";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_product']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $cost = mysqli_real_escape_string($con, $_POST['cost']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $grop = mysqli_real_escape_string($con, $_POST['grop']);

    $query = "INSERT INTO products (name,cost,price,grop) VALUES ('$name','$cost','$price','$grop')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "product Created Successfully";
        header("Location: product-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "product Not Created";
        header("Location: product-create.php");
        exit(0);
    }
}

if(isset($_POST['delete_product']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['delete_product']);

    $query = "DELETE FROM products WHERE id='$product_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "product Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "product Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

?>
