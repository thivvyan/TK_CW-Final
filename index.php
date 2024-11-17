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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!--Carousel-->
  <div id="carouselExample" class="carousel slide" style="background-color: #777;">
    <div class="carousel-inner"
      style="background-color: #777; object-fit:contain; margin-left: auto; margin-right: auto;">
      <div class="carousel-item active">
        <img src="Images/Artifacts01.png" class="d-block w-100;" alt="Artefact 01">
      </div>
      <div class="carousel-item">
        <img src="Images/Artifacts02.png" class="d-block w-100" alt="Aretefact 02">
      </div>
      <div class="carousel-item">
        <img src="Images/Artifacts03.png" class="d-block w-100" alt="Aretefact 03">
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
    <h2 class="text-center" style="margin-top: 5%;">Our Collection</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- Example Product Card -->
      <div class="col" style="margin-top: 3%;">
        <div class="card">
          <img src="images/Artifacts01.png" class="card-img-top" alt="Artifact 1">
          <div class="card-body">
            <h5 class="card-title">Artifact Name</h5>
            <p class="card-text">$100</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Artifact Details"
              data-bs-content="More information about this artifact.">View Details</button>
          </div>
        </div>
        <div class="card">
          <img src="images/Artifacts01.png" class="card-img-top" alt="Artifact 1">
          <div class="card-body">
            <h5 class="card-title">Artifact Name</h5>
            <p class="card-text">$100</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Artifact Details"
              data-bs-content="More information about this artifact.">View Details</button>
          </div>
        </div>
      </div>
      <div class="col" style="margin-top: 3%;">
        <div class="card">
          <img src="images/Artifacts01.png" class="card-img-top" alt="Artifact 1">
          <div class="card-body">
            <h5 class="card-title">Artifact Name</h5>
            <p class="card-text">$100</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Artifact Details"
              data-bs-content="More information about this artifact.">View Details</button>
          </div>
          <div class="card">
            <img src="images/Artifacts01.png" class="card-img-top" alt="Artifact 1">
            <div class="card-body">
              <h5 class="card-title">Artifact Name</h5>
              <p class="card-text">$100</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Artifact Details"
                data-bs-content="More information about this artifact.">View Details</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col" style="margin-top: 3%;">
        <div class="card">
          <img src="images/Artifacts01.png" class="card-img-top" alt="Artifact 1">
          <div class="card-body">
            <h5 class="card-title">Artifact Name</h5>
            <p class="card-text">$100</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Artifact Details"
              data-bs-content="More information about this artifact.">View Details</button>
          </div>
          <div class="card">
            <img src="images/Artifacts01.png" class="card-img-top" alt="Artifact 1">
            <div class="card-body">
              <h5 class="card-title">Artifact Name</h5>
              <p class="card-text">$100</p>
              <button type="button" class="btn btn-primary" data-bs-toggle="popover" title="Artifact Details"
                data-bs-content="More information about this artifact.">View Details</button>
            </div>
          </div>
        </div>
      </div>

      <!--Footer-->
      <div class="container-fluid">
        <footer class="bg-dark text-white mt-4 p-4 text-center" style="width:auto; height: 100%;">>
          <p>&copy; 2024 Artefact Shop. All rights reserved.</p>
      </div>
</footer>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"> </script>
      <script src="scripts.js"></script>

</body>

</html>