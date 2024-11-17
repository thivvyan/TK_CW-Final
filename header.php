<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rare Finds</title>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
  </head>
 <!---Header Yo -->
 <div class="container">
      <div class="d-flex justify-content-between">
            <img src="images/logo1.png" alt="logo" style="float:left; width: 150px; height:60px;padding-bottom: 5px;margin-top:5px;">
              <form class="form-inline d-flex align-items-cente" style="margin-top:5px;">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 900px; height: 50px; margin-left: 20px;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="height: 50px; width: 80px; background-color :#212529; color: white; margin-left:20px; ">Search</button>
       <!-- Login Button -->
      <button class="btn btn-outline-success my-2 my-sm-0" onclick="openLoginForm()" type="button"
        style="height: 50px; background-color :#212529; color: white;">Login</button>

      <!-- Signup Button -->
      <button class="btn btn-outline-success my-2 my-sm-0" onclick="openSignupForm()" type="button"
        style="height: 50px; background-color :#212529; color: white;">Signup</button>

            </form>
          </div>
        </div>
    <!--Header Close-->

<header class="header">

   <div class="flex">

      <a href="#" class="logo">Customer Portal</a>

      <nav class="navbar">
         <a href="product.php"> View Products</a>
         <a href="contactus.php">Contact Us</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `shopping_cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>

<body>
   <!-- Login Button Form -->
   <div class="modal" id="loginForm">
        <form action="/action_page.php" class="form-container">
          <h1>Login</h1>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeLoginForm()">Close</button>
        </form>
      </div>

      <!-- Signup Button Form -->
      <div class="modal" id="signupForm">
        <form action="/action_page.php" class="form-container">
          <h1>Sign up</h1>

          <label for="suFirstname"><b>First Name</b></label>
          <input type="text" placeholder="Enter First Name" name="suFirstname" required>

          <label for="suLastname"><b>LastName</b></label>
          <input type="text" placeholder="Enter Last Name" name="suLastname" required>

          <label for="suContact"><b>Contact Number</b></label>
          <input type="tel" placeholder="Enter Contact Number" name="suContact" required>

          <label for="suEmail"><b>Email</b></label>
          <input type="email" placeholder="Enter Email" name="suEmail" required>

          <label for="suPsw"><b>New Password</b></label>
          <input type="password" placeholder="Enter Password" name="suPsw" id="suPsw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
            required>

          <label for="suVpsw"><b>Verify Password</b></label>
          <input type="password" placeholder="Verify Password" name="suVpsw" id="suVpsw" oninput="verifyPassword()" required>

          <button type="submit" class="btn">Signup</button>
          <button type="button" class="btn cancel" onclick="closeSignupForm()">Cancel</button>
        </form>
      </div>

      <script>
        function openLoginForm() {
          document.getElementById("loginForm").style.display = "flex";
        }

        function closeLoginForm() {
          document.getElementById("loginForm").style.display = "none";
        }

        function openSignupForm() {
          document.getElementById("signupForm").style.display = "flex";
        }

        function closeSignupForm() {
          document.getElementById("signupForm").style.display = "none";
        }

        function verifyPassword() {
          var input = document.getElementById('suVpsw');
          if (input.value != document.getElementById('suPsw').value) {
            input.setCustomValidity('Password Must be Matching.');
          } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
          }
        }
      </script>
</body>