<?php
include("connection2.php");

$id = $_GET["id"];

$query = "DELETE  FROM lost2 WHERE id='$id' "; 
$data = mysqli_query($conn,$query);

if($data){
    // echo "data deleted";
    echo "<script> alert('Data Delete into Database')</script>";
    ?>
<meta http-equiv=refresh
      content="0; URL=http://localhost/tmd/Pages/copy/My_Listings.php"/>

<?php
}
else{
    echo "Failed To Deleted";
}

?>