<?php 
$page = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], "/") + 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>lost and found</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="icon" href="data:;base64,iVBORwOKGO=" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!--BootStrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="homepageone.css">
    

</head>
<body>
    
    <!--- Navigation Bar ---->
    
   <div class="Nav-container" id="Nav-container">
     <nav class="navbar navbar-expand-lg fixed-top" data-bs-theme="light" style="">
      <div class="container-fluid">
        <a class="navbar-brand" href="Lost-Listing.php" style="color:black;">Lost and Found</a>

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
                <a class="nav-link <?= $page == "homepageone.php"? 'active bg-gradient-primary': '';?>" href="homepageone.php" style="color:black;">Homepage</a>
              </li>
             
              <li class="nav-item  mx-auto px-4">
                <a class="nav-link  <?= $page == "Lost-Listings.php"? 'active bg-gradient-primary': '';?>"  href="Lost-Listing.php" style="color:black;">Lost Listings</a>
              </li>
              <li class="nav-item mx-auto px-4">
                <a class="nav-link <?= $page == "Found-Listing%20.php"? 'active bg-gradient-primary': '';?>"href = "Found-Listing%20.php" style="color:black;">Found Listings</a>
              </li>
              <li class="nav-item mx-auto px-4">
                <a class="nav-link <?= $page == "My_Listings.php"? 'active bg-gradient-primary': '';?>" href="My_Listings.php"" href="My-Listings.php" style="color:black;">My Listings</a>
                
          </div>
        </div>
      </div>
    </nav> 
  </div>


<!-- End of Navigation bar -->
<main>
    <section class="intro">
        <!-- hero section -->
        
            <div class="textsection">
                <h2 class="lofo_p">Find What You Lost or Reunite What You Found</h2>
                <p>Report lost items, claim found items, and reunite what's been misplaced.</p>
                <div class="btnlofo">
                <form action="Report-Lost-Form.php" method="post">
               <button class="reportlost" type="submit"> <i class="fa-solid fa-magnifying-glass"></i> Report a Lost Item</button>
              </form>
              <div style="display: flex; align-items: center;">
  <form action="Report-Found-Form.php" method="post">
    <button class="reportfound" type="submit"> <i class="fa-solid fa-lightbulb"></i> Found an Item?</button>
  </form>
 
</div> 
            </div>
            </div>
            <div class="imgsection">
                <img src="https://th.bing.com/th/id/OIP.onItG6hYAobG4V6_tIDWqwHaHa?rs=1&pid=ImgDetMain" alt="" class="responsive">
            </div>
       
    </section>
    <section class="inspire">
      <div class="inspiration">
        <div class="inspireimg">
          <img src="https://cartknitter.com/wp-content/uploads/2023/09/pd1.png" alt="" class="responsive">
        </div>
        <div class="inspiretext">
        <h3 class="big">Why We Built This</h3>
        <p>The hustle and bustle of college life often leads to misplaced treasures.  Between jam-packed schedules and unfamiliar surroundings, it's easy to lose that lucky keychain or favorite notebook.  This Lost and Found website is inspired by the shared experience of college students searching for those lost items that hold a special place.  By creating a platform for easy reporting and browsing, we hope to reunite students with their lost belongings and bring a little peace of mind to the campus community.</p>  
      </div>
      </div>
    </section>
    <section class="whyworks">
    
        <h3 class="big extra">How it works</h3>
        <div class="workcontain">
          
        <div class="process signIn">
          <img src="Mobile login-pana.png" alt="Sign In Icon" class="workcard"/>
          <div class="sipara">
          <h4 class="big">Sign Up / Sign In</h4>
          <p class="para">Create a user account or log in into your existing one using Google, Facebook, or email.</p>
          </div>
          <form action="Homepage.php" method="post">
               <button class="reportlost" type="submit"> <i class="fa-solid fa-pen-to-square "></i>    Sign In  </button>
              </form>
             </div> 
        
        <div class="process listing">
          <img src="https://th.bing.com/th/id/OIP.Q8oLpKUdh45aEzSXa2RgEwHaGD?rs=1&pid=ImgDetMain" alt="Listing Icon" class="workcard"/>
          <div class="listingpara">
            <h4 class="big">List Lost/Found item </h4>
            <p>
              Check details of your lost or found item below and we will take care of the rest!
            </p>
          </div>
          <div style="display: flex; ">
  <form action="http://localhost/tmd/Pages/copy/Lost-Listing.php" method="post">
    <button  class="reportlost" type="submit">  <i class="fa-solid fa-magnifying-glass"></i> Lost Items</button>
  </form>
  <form action="http://localhost/tmd/Pages/copy/Found-Listing%20.php" method="post">
    <button class="reportfound" type="submit"> <i class="fa-solid fa-lightbulb"></i> Found Items</button>
  </form>
</div>
 
        </div>
        <div class="process notified">
          <div class="notifyimg">
          <img src="Push notifications-cuate.png" alt="">
          <h4 class="big">Updates with Notifications</h4>
          <p>Our system is configured to automatically notify you of any critical updates or changes to ensure you are always working with the most current information.</p>
        </div>
        </div>
</div>
        </section>
        <section class="contact-container">
  <div class="contact-text">
    <h3 class="big nows">Contact Us</h3>
    <p>We're here to help! If you have any questions or concerns, please don't hesitate to contact us. We're here to help!</p>
    <div class="social_icons"> 
    <p><i class="fa-solid fa-paper-plane"></i>Contact@gmail.com</p>
  <p> <i class="fa-solid fa-square-phone"></i>0123456789</p>
  <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
  <a href="https://in.pinterest.com/"><i class="fa-brands fa-square-twitter"></i></a>
  <a href="https://www.linkedin.com/feed/"><i class="fa-brands fa-linkedin"></i></a>
  <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></div>
 <br>
  </div>
  <div class="contact-form">
    <form action="contact.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
  </div>
</section>
</main>
<footer>
    <div class="last">
      <p class="one">© 2024 TMD. All Rights Reserved. Privacy Policy | Terms of Service</p>
  <!-- <p class="two">
    <i class="fa-regular fa-copyright"></i> Created by TMD
  </p></div> -->
  
</footer>
</div>  
</body>
</html>
