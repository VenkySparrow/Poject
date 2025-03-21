
<?php
 
$localIP = getHostByName(php_uname('n'));  
    $s1=$localIP."/Food_order/customer.php?tno=1"; 
 $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
   
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
$ss='dd';
    $filename = $PNG_TEMP_DIR.''.$ss.''.'.png';
  
    $errorCorrectionLevel = 'L';
   
        $errorCorrectionLevel ="M";    

    $matrixPointSize = 4;
 
       QRcode::png($s1, $filename, $errorCorrectionLevel, $matrixPointSize, 2);  
  


?>
<div align="center"><img src="temp\dd.png" width="250" height="250" />
</div>