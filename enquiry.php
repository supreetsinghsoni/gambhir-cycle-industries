<?php

      include('header.php');
      
   
?>


   
 
 
        	
    <form name="enquiry" action="sendsms.php" method="POST" enctype="multipart/form-data">
    
    Your name:<br>
    <input name="name" type="text" value="" size="30" required /><br>
    Your organization name:<br>
    <input name="organization" type="text" value="" size="30"/><br>
    Your address:<br>
    <select name="country" class="countries" id="countryId">
    <option value="">Select Country</option>
    </select>
    <select name="state" class="states" id="stateId">
    <option value="">Select State</option>
    </select>
    <select name="city" class="cities" id="cityId">
    <option value="">Select City</option>
    </select>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://iamrohit.in/lab/js/location.js"></script><br>
    Your number:<br>
    <input name="number" type="text" value="" size="30"required /><br>
    Your organization:<br>
    <input name="organization" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send Enquiry"    >
    </form>


<p>&nbsp;</p>
            
            
       <?php 
include('footer.php'); 
?> 	  



