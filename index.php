<?php 
include('header.php'); 
?>

<div class="w3-content w3-section" style="max-width:500px">
<img class="mySlides" src="images/BallRacer.png" >
<img class="mySlides" src="images/BrakeShoeRikshaw.png" >
<img class="mySlides" src="images/CycleBrakeClip.png" >
<img class="mySlides" src="images/KidsBicycleBasketfitting.png" >
<img class="mySlides" src="images/KidsBicycleBasketFitting2.png" >
<img class="mySlides" src="images/LockPatti.png" >
<img class="mySlides" src="images/PedalPatti.png" >
<img class="mySlides" src="images/RelayTypeBrakeShoe.png" >
<img class="mySlides" src="images/RubberFittedRikshawBrakeShoe.png" >
<img class="mySlides" src="images/SideSupportClip.png" >
<img class="mySlides" src="images/SideSupportSariyaType.png" >
<img class="mySlides" src="images/SideSupportWheel.png" >
<img class="mySlides" src="images/SideSupportWheel2.png" >
<img class="mySlides" src="images/SLRBrakeShoe.png" >
<img class="mySlides" src="images/StandPatti.png" >
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>




		<div id="content">
        	<h2></h2>
        	<p>&nbsp;</p>
           	<p>&nbsp;</p>
              	<p>Gambhir Cycle Industries,a company based in Ludhiana Punjab (INDIA), established in 1987 with the able and wise guidance of S. Darshan Singh Gambhir. Our Company has achieved experience of many years in the bicycle parts manufacturing and supplying with keeping in mind to promote our leading company worldwide. Currently S. Darshan Singh Gambhir along with his sons, S. Jaspreet Singh Gambhir and S. Vimaldeep Singh Gambhir is handling and managing manufacturing and distribution process of bicycle parts & bicycle accessories.

</p>
<p>&nbsp;</p>
</div>
      <?php 
include('footer.php'); 
?> 	  

