<?php
// error_reporting(0);
require 'connection2.php';
?>  

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="data:;base64,iVBORwOKGO=" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!--BootStrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!--StyleSheet-->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="Report-Lost-style.css"> 

  <title>SOCCA LostLinkUp</title>
</head>
<!-- style="background-color:#735DA5 -->
<body>

  <!--Navigation Bar-->
  <div class="Nav-container" id="Nav-container">
    <nav class="navbar navbar-expand-lg fixed-top" data-bs-theme="light" style="background: linear-gradient(to right, #5c6bc0, #512da8);">
      <div class="container-fluid">
        <a class="navbar-brand" href="Lost-Listing.php" style="color:white;">LostLinkUp</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLightNavbar"
          aria-labelledby="offcanvasLightNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasLightNavbar">
          <div class="offcanvas-header">
            <p class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="color:white;">LostLinkUp</p>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
           
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item mx-auto px-4">
                <a class="nav-link <?= $page == "homepageone.php"? 'active bg-gradient-primary': '';?>" href="homepageone.php">Homepage</a>
              </li>
             
              <li class="nav-item  mx-auto px-4">
                <a class="nav-link  <?= $page == "Lost-Listings.php"? 'active bg-gradient-primary': '';?>"  href="Lost-Listing.php" style="color:white;">Lost Listings</a>
              </li>
              <li class="nav-item mx-auto px-4">
                <a class="nav-link <?= $page == "Found-Listing%20.php"? 'active bg-gradient-primary': '';?>"href = "Found-Listing%20.php" style="color:white;">Found Listings</a>
              </li>
              <li class="nav-item mx-auto px-4">
                <a class="nav-link <?= $page == "My_Listings.php"? 'active bg-gradient-primary': '';?>" href="My_Listings.php"" href="My-Listings.php" style="color:white;">My Listings</a>
                <li class="nav-item dropdown mx-auto px-4">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false" style="color:white;">
                  Create Listings
                </a>
                <ul class="dropdown-menu" style="background: linear-gradient(to right, #5c6bc0, #512da8);
; border-color: white;">
                  <li><a class="dropdown-item" href="Report-Lost-Form.php">Report a Lost</a></li>
                  <li><a class="dropdown-item" href="Report-Found-Form.php">Report a Found</a></li>
                </ul>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>

  
  <div class="container-0">
    <div class="form-header">
      <h2>Report</h2>
      <h1>A Lost Item</h1>
    </div>
    <div class="lost-form" id="lost-form">
      <form method="post" enctype="multipart/form-data">
        <h5>Your Details</h5>
        <div class="form-group">
          <input type="text" required="required" id="firstname" name="firstname" />
          <span>First Name</span>
        </div>
        <div class="form-group">
          <input type="text" required="required" id="lastname" name="lastname"/>
          <span>Last Name</span>
        </div>
        <div class="form-group">
          <input type="text" required="required" id="department" name="department"/>
          <span>Department</span>
        </div>
        <div class="form-group">
          <div class="custom-control custom-radio custom-control-inline">
            <label for="1styear" class="custom-control-label">
              <input type="radio" name="year" value="1" id="1styear" class="custom-control-input">
              1st Year</label>
            <label for="2ndyear" class="custom-control-label">
              <input type="radio" name="year" value="2" id="2ndyear" class="custom-control-input">
              2nd Year</label>
            <label for="3rdyear" class="custom-control-label">
              <input type="radio" name="year" value="3" id="3rdyear" class="custom-control-input">
              3rd Year</label>
            <label for="4thyear" class="custom-control-label">
              <input type="radio" name="year" value="4" id="4thyear" class="custom-control-input">
              4thYear</label>
          </div>
        </div>
        <hr class="round" width="60%">
        <h5>Lost Item Details</h5>
        <div class="form-group">
          <input type="text" required="required" id="item" name="lostitem"/>
          <span>Item Lost</span>
        </div>
        <div class="form-group">
          <textarea id="itemdescription" name="itemdescription" rows="2" cols="20"></textarea>
          <span>Lost Item Description</span>
        </div>
        <div class="form-group">
          <input type="text" id="lostplace" name="place"/>
          <span>Around where you lost it</span>
        </div>
        <div class="form-group" >
          <input type="file" id="itemimg" name="uploadfile" accept="image/*">
          <span>Item Image(Optional)</span>
        </div>
        <div>
          <input type="submit" value="Register Lost Item" name="submit"/>
        </div>
      </form>
    </div>
  </div>

  <!--Bootstrap js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
    
    
    
    
    
   


<?php
error_reporting(0);

if($_POST['submit'])
 {
    $firstname     = $_POST['firstname'];
    $lastname      = $_POST['lastname'];
    $department    = $_POST['department'];
    $year          = $_POST['year'];
    $lostitem      = $_POST['lostitem'];
    $itemdescription = $_POST['itemdescription'];
    $place         = $_POST['place']; 

    
     $filename= $_FILES["uploadfile"]["name"];
     $tempname= $_FILES["uploadfile"]["tmp_name"]; 
     $folder = "im/".$filename;
     echo "$folder";
     move_uploaded_file( $tempname, $folder); 

      $query ="INSERT INTO lost2 (firstname,lastname,department,year,lostitem,itemdescription,place,image)VALUE ('$firstname','$lastname','$department','$year','$lostitem','$itemdescription','$place','$folder')";
      $data = mysqli_query($conn,$query);
    
      if($data){
      //  echo "successfully";
      echo "<script> alert(data in to display)</script>";
       ?>
<meta http-equiv=refresh
      content="0; URL=http://localhost/tmd/Pages/copy/Lost-Listing.php"/>

<?php
     }
     else{
      echo "successfully not";
     }

    }
    ?>







