<?php
include('config.php');
	   if(isset($_POST['delete']))
	  {
	  $pid=$_POST['productid'];
      $sql = "delete from product where product_id=$pid";
      $result = mysqli_query($db,$sql);
	  if($result)
	  {
		  echo "successfully deleted" ;
	  }
	  else
	  {
		  echo "item not found" ;
	  }
	
	} 
	?>
	<html>
	 <head>
	 <title> deleting </title>
	 </head>
	 <body style="background-image:url('bake10.jpg');background-repeat:no-repeat;background-size:cover;"><br><br><br><br>
	 <div align="center">
	                 <form action = "" method = "post" >
			   <table>
			   <tr>
			   <th>
			   <label style="color:blue"><h2>Deleting Products</h2></label>
                  <label style="color:green"><h2>ProductID:</h2></label><br><input style = "height:20px" type = "text" name = "productid" class = "box" required /><br /><br />
			   </th>
			   </tr>
			   </table>
			                     <input id="sub" type = "submit" name="delete" value = "delete"/>
								  <a href="welcome.php">Back</a>
</div>
	 </body>
	 </html>