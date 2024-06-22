<?php
require 'connection2.php';
$query = "SELECT * FROM lost2";
$sql = $conn->query($query);  // execute the query

if (!$sql) {
    // handle query execution error
    die("Error executing query: " . $conn->error);
}
?>
<?php 
$page = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], "/") + 1);
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

  <link rel="stylesheet" href="style.css">
  <!-- <link rel="stylesheet" href="Lost-Listing-style.css"> -->

  <link rel="shortcut icon" href="OIP.jpg" type="image/x-icon">
  <title>SOCCA LostLinkUp</title>
  <!-- <script>
        function openProductDetails(id) {
            // Replace with actual product information retrieval logic
            const productDetails = "Product details for ID: " + id;
            alert("yes good");
            // Option 1: Redirect user's browser
            // window.location.href = "product_details.html?id=" + productId;

            // Option 2: Open product information in a new tab/window
            window.open("products.php?id=" + id, "_blank");
        }
    </script> -->
    <!-- linear-gradient(to right, #5c6bc0, #512da8) -->
</head>

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

  <!-- <div class="box"> -->
<!-- <div class="pic">
  <img src="" alt="lost">
</div>
<div class="text">
  <h1 class="taxt">Lost Items</h1>
  <h2 class="lost">Lost Item Information</h2>
</div>
</div>-->
   
  <?php 
require 'connection2.php';
?>

error_reporting(0);

 <h1 class="high">Lost Items </h1>

  <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
   
     <div class="main">
    
        <img src="<?php echo $row["image"]; ?>" alt="" class="lost_item_image" >
      
  
      <div class="caption">
        <!-- <p class="date">18 January 2017</p> -->
        <p class="name"> <?php echo $row["lostitem"]; ?></p>
        <p class="desc"> item description :-<?php echo $row["itemdescription"]; ?></p>
        <p class="place">place where you lost :-  <?php echo $row["place"]; ?></p>
      <center>
        <button class="add btn" data-id="<?php echo $row["id"]; ?>" onclick = found()>Found</button>
        <a href='lost-delete.php?id=<?= htmlspecialchars($row["id"])?>'><input type="submit" value="delete" class="delete btn" onclick = 'return checkdelete()'></a> 


         
         <a href='lost_update.php? data-id=<?php echo $row["id"]; ?> '<input type="update" value="Update" class="btn add" ">Update</a>
 

         <!-- <a href='lostalldata.php? data-id=<?php echo $row["id"]; ?> '<input type="alldata" value="alldata" class="btn add" ">Alldata</a> -->




        <!-- <script src="js_lost.js"></script> -->
        <script>function found() {
    alert('Are You Sure Want To Mark This Item As Found');
    const specific = prompt("Any unique think about that item item  will be helpful to find it back.");
    if (specific == "") {
        alert("You didn't enter a unique thing");
    } else if (!specific) {
        alert("you pressed cancel");
    } else {
    
      const popW = 400; // Width of the popup window
        const popH = 100; // Height of the popup window
        const leftPos = (screen.availWidth - popW) / 2;
        const topPos = (screen.availHeight - popH) / 2;

        const popupWindow = window.open('', 'ImageUploadPopup', `
            width=${popW}, height=${popH},
            top=${topPos}, left=${leftPos},
            scrollbars=yes, resizable=yes
        `);

        // Create a new div element in the popup window
        const div = popupWindow.document.createElement('div');
        div.id = 'image-upload-popup';

        // Write the HTML for the image upload form inside the div element
        div.innerHTML = `
            <div id="image-upload-form">
                <h1>Upload an Image</h1>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" accept="image/*" name="image">
                    <input type="submit" value="Upload">
                </form>
            </div>
        `;

        // Append the div element to the body of the popup window
        popupWindow.document.body.appendChild(div);
    


// <style>
// #image-upload-popup {
//     position: absolute;
//     top: 50%;
//     left: 50%;
//     transform: translate(-50%, -50%);
//     background-color: white;
//     border: 1px solid gray;
//     padding: 20px;
//     box-shadow: ;
// }

// </style>
 }
}         
 </script></div>   
    
  </center>
</div>
  </div>

  
 <?php 
    }
     ?>
  </div>

  <script>
       var    id = document.getElementsByClassName("add");
       for(var i = 0; i<id.length; i++){
           id[i].addEventListener("click",function(event){
               var target = event.target;
               var id = target.getAttribute("data-id");
               var xml = new XMLHttpRequest();
               xml.onreadystatechange = function(){
                   if(this.readyState == 4 && this.status == 200){
                       var data = JSON.parse(this.responseText);
                       target.innerHTML = data.in_cart;
                       document.getElementById("badge").innerHTML = data.num_cart + 1;
                   }
               }

               xml.open("GET","connection2.php?id="+id,true);
               xml.send();
            
           })
       }
       </script>
       
<!-- 
<button onclick="openForm()" id="addBtn" style="display: none;">Add Report</button>
<form action="/report/index.php" method="post" enctype="multipart/form-data" id="myForm  -->

<script>
function checkdelete(){
    return confirm('Are you sure you want to delete this data?');
}

</script>
</div>


  <!-- Bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
<?php
error_reporting(0);

 $lost = "SELECT * FROM lost2 WHERE id='".$row['id']."'";
  $all_item = $conn ->query($lost);
  ?>