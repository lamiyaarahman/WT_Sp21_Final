<?php
     if(isset($_COOKIE["username"])){
		 
		 header("Location:cookies.php")
	 }

?>
<html>
      <h1>WELCOME<?php echo $_COOKIE["username"];?></h1>
</html>