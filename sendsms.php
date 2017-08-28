






<?php

      
      include('way2sms-api.php');
     
       $message= 'name :'.$_POST['name'].' number :'.$_POST['number']. 'organization :'.$_POST['organization'].' country :'.$_POST['country'].' state :'.$_POST['state'].'city :'.$_POST['city'].' message :'.$_POST['message'];
       $res = sendWay2SMS ( '9781596370' , 'jacknjones' , '9781596370', $message); 
         


	include('enquiry.php');
   
?>

