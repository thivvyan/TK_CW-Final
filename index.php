<?php
@include 'config.php';
?>
<?php include 'header.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rare Finds</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!--Carousel-->
  <div id="carouselExample" class="carousel slide" style="background-color: #777;">
    <div class="carousel-inner"
      style="background-color: #777; object-fit:contain; margin-left: auto; margin-right: auto;">
      <div class="carousel-item active">
        <img src="Images/Artifacts01.png" class="d-block w-100;" style="object-fit:contain;" alt="Artefact 01">
      </div>
      <div class="carousel-item">
        <img src="Images/Artifacts02.png" class="d-block w-100" style="object-fit:contain;" alt="Aretefact 02">
      </div>
      <div class="carousel-item">
        <img src="Images/Artifacts03.png" class="d-block w-100" style="object-fit:contain;" alt="Aretefact 03">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--Carousel Close-->
  <!--Products-->
  <section class="container mt-5">
    <?php
    // Fetch the latest 9 products from the product table
    $query = "SELECT * FROM `product` ORDER BY product_id DESC LIMIT 9";
    $result = mysqli_query($conn, $query) or die();
    $products = mysqli_fetch_assoc($result);
    ?>


    <div class="container">
      <h2 class="text-center" style="margin-top: 5%;">Our Collection</h2>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $select_products = mysqli_query($conn, "SELECT * FROM `product` ORDER BY product_id DESC LIMIT 9");
        if (mysqli_num_rows($select_products) > 0) {
          while ($product = mysqli_fetch_assoc($select_products)) {
        ?>
            <div class="col" style="margin-top: 3%;">
              <div class="card h-100">
              <img src="uploaded_img/<?php echo $product['image']; ?>" alt="" class="card-img-top" style="height:300px">
                <div class="card-body">
                  <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                  <p class="card-text">$<?php echo htmlspecialchars($product['price']); ?></p>
                  <button type="button" class="btn btn-primary mt-auto">Add to Cart</button>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "<p class='text-center'>No products found.</p>";
        }
        ?>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"> </script>
    <script src="scripts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Initialize the popover
      var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
      var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl, {
          trigger: 'focus', // Ensures popover closes when clicking outside
        });
      });
    </script>

  </section>

  <!--Footer-->
  <div class="container-fluid" style="width:100%;">
    <footer class="bg-dark text-white mt-4 p-4 text-center" style="width:auto; height: 50px;">
      <p>&copy; 2024 Artefact Shop. All rights reserved.</p>
    </footer>
  </div>

</body>

</html>