 <?php  
 //excel.php  
 header('Content-Type: application/vnd.ms-word');  
 header('Content-disposition: attachment; filename='.rand().'.doc');  
 echo $_GET["data"];  
 ?>  