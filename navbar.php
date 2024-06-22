<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="Navbar.css">
</head>
<body>
<div class="Nav-container" id="Nav-container">
    <nav class="navbar navbar-expand-lg fixed-top" data-bs-theme="light" style="background-color: #fff;">
      <div class="container-fluid">
        <a class="navbar-brand" >FoundLinkUp</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLightNavbar"
          aria-labelledby="offcanvasLightNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasLightNavbar">
          <div class="offcanvas-header">
            <p class="offcanvas-title" id="offcanvasDarkNavbarLabel">LostLinkUp</p>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item  mx-auto px-4">
                <a class="nav-link"  <?= $page == "Lost-Listings.php"? 'active bg-gradient-primary': '';?>"  href="Lost-Listing.php">Lost Listings</a>
              </li>
              <li class="nav-item mx-auto px-4">
                <a class="nav-link <?= $page == "Found-Listing .php"? 'active bg-gradient-primary': '';?>"  href="Found-Listing .php">Found Listings</a>
              </li>
              <li class="nav-item dropdown mx-auto px-4">
                <a class="nav-link dropdown-toggle active" href="Found-Listing.php" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Create Listings
                </a>
                <ul class="dropdown-menu" style="background-color: #dc3586; border-color: white;">
                  <li><a class="dropdown-item" href="Report-Lost-Form.php">Report a Lost</a></li>
                  <li><a class="dropdown-item" href="Report-Found-Form.php">Report a Found</a></li>
                </ul>
              </li>
              <li class="nav-item mx-auto px-4">
                <a class="nav-link <?= $page == "My_Listings.php"? 'active bg-gradient-primary': '';?>" href="My_Listings.php">My Listings</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>


</body>
</html>