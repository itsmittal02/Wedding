<?php
      include("db.php");
	  $rs=mysqli_query($conn,"select * from project where sn>3");
	  $sn=1;
	  while($r=mysqli_fetch_array($rs)){
	     $src="images/".$sn.".jpg";
		 $tar="profile/".$r["code"].".jpg";
		 copy($src,$tar);
		 $sn++;
		 
		 }
?>
		 