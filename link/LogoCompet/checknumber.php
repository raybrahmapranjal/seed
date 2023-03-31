 <?php
 $value = '123456789';
$mobileregex = "/^[6-9][0-9]{9}$/" ; 
echo "string"; 
echo "Hi " . preg_match($mobileregex, $value);
    
?>