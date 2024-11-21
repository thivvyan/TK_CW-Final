<?php

@include 'config.php';

if (isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM `shopping_cart` WHERE name = '$product_name'");

    if (mysqli_num_rows($select_cart) > 0) {
        $message[] = 'product already added to cart';
    } else {
        $insert_product = mysqli_query($conn, "INSERT INTO `shopping_cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
        $message[] = 'product added to cart successfully';
    }
}

$search_query = "";
if (isset($_POST['search_query']) && !empty(trim($_POST['search_query']))) {
    $search_query = mysqli_real_escape_string($conn, $_POST['search_query']);
    $select_products = mysqli_query($conn, "SELECT * FROM `product` WHERE name LIKE '%$search_query%'");
} else {
    $select_products = mysqli_query($conn, "SELECT * FROM `product`");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Products</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i></div>';
    }
}
?>

<?php include 'header.php'; ?>

<div class="container">
<section class="products">
   <h1 class="heading">
      <?php echo !empty($search_query) ? "Search Results for '$search_query'" : "Latest Products"; ?>
   </h1>

   <div class="box-container">
      <?php
      if (mysqli_num_rows($select_products) > 0) {
          while ($fetch_product = mysqli_fetch_assoc($select_products)) {
      ?>
      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn btn-primary" value="Add to Cart" name="add_to_cart">
         </div>
      </form>
      <?php
          }
      } else {
          echo "<p>No products found</p>";
      }
      ?>
   </div>
</section>
</div>

<script src="js/script.js"></script>
</body>
</html>
