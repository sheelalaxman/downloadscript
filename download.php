<?php


for($i=0 ;$i<70 ; $i++)
{ 
	
   $url='http://erp.cbit.org.in/ERP/Admin/StudentPhotos.aspx?StudId='.(3844+$i) .'&ColCode=0001&GrpCode=CBIT';
   $image = file_get_contents($url);
   file_put_contents('C:\xampp\htdocs\cllg\1601167331'.$i.'.jpg', $image);

}

?>
