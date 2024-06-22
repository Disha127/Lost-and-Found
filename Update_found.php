<?php
// error_reporting(0);
require 'found-connection.php';

$id= $_GET['data-id'];

$query = "SELECT * FROM found1 where id= '$id'"; 
$sql = $conn->query($query);  // execute the query

$total =mysqli_num_rows($sql) ;   // count the output for number of
$row = mysqli_fetch_assoc($sql); // bring to associative array

?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="data:;base64,iVBORwOKGO=" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!--BootStrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!--StyleSheet-->
  <!-- <link rel="stylesheet" href="Navbar.css"> -->
  <link rel="stylesheet" href="Report-found-style.css">
  <link rel="stylesheet" href="style.css">
<style>
  h1{
    margin-top: 7%;
  }
</style>
  <title>SOCCA Found LinkUp</title>
</head>

<body>

  <!--Navigation Bar-->
  <div class="Nav-container" id="Nav-container">
    <nav class="navbar navbar-expand-lg fixed-top" data-bs-theme="light" style="background: linear-gradient(to right, #5c6bc0, #512da8);">
      <div class="container-fluid">
        <a class="navbar-brand" href="Lost-Listing.php" style="color:white;">FoundLinkUp</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLightNavbar"
          aria-labelledby="offcanvasLightNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasLightNavbar">
          <div class="offcanvas-header">
            <p class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="color:white;">FoundLinkUp</p>
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
 
<!-- <h1>Report-Found-Form</h1> -->
</center>
  </div>
  </div>


  <div class="container-0">
    <div class="form-header">
      <h2>Report</h2>
      <h1>A Found Item</h1>
    </div>
    <div class="lost-form" id="lost-form">
      <form method="post" enctype="multipart/form-data">
        <h5>Your Details</h5>
        
        <hr class="round" width="60%">
        <h5>Found Item Details</h5>
        <div class="form-group">
        <input type="text" value="<?php echo $row['founditem']; ?>" required="required" id="item" name="founditem" required = "required"/>
          <span>Item Found</span>
        </div>
        <div class="form-group">
        <textarea id="itemdescription" required = "required" name="itemdescription" rows="2" cols="20"> <?php echo $row["itemdescription"]; ?> </textarea>
          <span>Found Item Description</span>
        </div>
        <div class="form-group">
        <input type="text" value="<?php echo $row['place']; ?>"  id="foundplace" name="place" required = "required"/>
          <span>Around where you Found it</span>
        </div>
        <div class="form-group" >
        <img src="<?php echo $row["image"]; ?>" alt=""  <style width="50%"</style>
          <input type="file" id="itemimg" name="uploadfile" accept="image/*" required = "required">
          <span>Item Image</span>
        </div>
        <div>
          <input type="submit" value="Register Upadte Found Item" name="update"/>
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

if($_POST['update'])
 {
    $firstname     = $_POST['firstname'];
    $lastname      = $_POST['lastname'];
    $department    = $_POST['department'];
    $year          = $_POST['year'];
    $foundtitem      = $_POST['founditem'];
    $itemdescription = $_POST['itemdescription'];
    $place         = $_POST['place']; 

    
     $filename= $_FILES["uploadfile"]["name"];
     $tempname= $_FILES["uploadfile"]["tmp_name"]; 
     $folder = "im1/".$filename;
     echo "$folder";
     move_uploaded_file( $tempname, $folder); 

      // $query ="INSERT INTO found1 (firstname,lastname,department,year,founditem,itemdescription,place,image)VALUE ('$firstname','$lastname','$department','$year','$foundtitem','$itemdescription','$place','$folder')";

        $query="update found1 set founditem='$foundtitem',itemdescription='$itemdescription',place='$place',image='$folder'WHERE id='$id'";

      $data = mysqli_query($conn,$query);
    
      if($data){
      //  echo "successfully";
      echo "<script> alert(data in to display)</script>";
       ?>
<meta http-equiv=refresh
      content="0; URL=http://localhost/tmd/Pages/copy/Found-Listing%20.php"/>

<?php
     }
     else{
      echo "successfully not";
     }

    }
    ?>
