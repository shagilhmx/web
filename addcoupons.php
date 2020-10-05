<?php
   include("config.php");
	   if(isset($_POST['add']))
	  { 
      $Coupon =$_POST['coupon']; 
	  $discount=$_POST['Discount']; 
	  $discription=$_POST['discription'];
      $sql = " insert into cupons(cupon,discount,discription) values('$Coupon','$discount','$discription')";
     $result = mysqli_query($db,$sql);
	 
     if(!$result)
	 {
	 echo "Coupon not added" ;
	 }
     else
     {
	 echo " coupon succesfully added" ;}
	 }
	 
?>
<html>
<head><title>coupons Page</title>
      
      
   </head>
    
    <body style="background-image:url('bake8.jpg');background-repeat:no-repeat;background-size:cover;">
<div align = "center">
         <div style = "width:450px; border: solid 5px; height:350px" align = "left">
				<div style = "color:#000000; align:center;padding:3px;height:20px"><b>coupons:-</b></div>
            
               <div style = "margin:60px">
               <form name="form1" action = "" method = "post" class="col-lg-6" enctype="multipart/form-data">
			   <table>
			   <tr>
			   <th>
                  <label>Coupon:</label><br><input style = "height:20px" type = "text" name = "coupon" class = "box" required /><br /><br />
			   </th>
			   </tr>
			   <tr>
			   <th>
				   <label>Discount:</label><br><input style = "height:20px" type = "text" name = "Discount" class = "box" required /><br /><br />
				</th>
				</tr>
				<tr>
				 <th>
                  <label>Description:</label><br><input style = "height:20px" type = "text" name = "discription" class = "box" required /><br /><br />
			   </th>
			   </tr>
		

				
				
		        
				</table>
                  <input id="sub" type = "submit" name="add" value = "Add"/>
				   <a href="welcome.php">Back</a>
				  
               </form>
			  
					<?php if(isset($error)){ echo "Enter the valid productid or your are alredy in"; } ?>
            </div>
				
         </div>
			<br><br>
			      </div>
	  
	  
	 
	  </body>
<html>