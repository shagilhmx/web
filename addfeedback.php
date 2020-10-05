<?php
   include("config.php");
	   if(isset($_POST['add']))
	  {
      $userid = $_POST['userid'];
	  $rate =$_POST['stars']; 
	  $comments=$_POST['comments']; 
	  
	   
      
	  
      $sql = " insert into feedback(userid,stars,comments) values('$userid','$rate','$comments')";
     $result = mysqli_query($db,$sql);
	 
     if(!$result)
	 {
	 echo "Thank You Please Visit Again" ;
	 }
	  }
	  ?>
<html>
<head><title>addproduct Page</title>
      
      
   </head>
   
    <body style="background-image:url('bake7.jpg');background-repeat:no-repeat;background-size:cover;">
	   <br><h1 id="h1"align="center">Please Share your Experience</h1><hr id="hr1"><br>
      <div align = "center">
         <div style = "width:450px; border: solid 5px red; height:350px" align = "left">
          
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
			   <table>
			   <tr>
			   <th>
                  <label>USERID:</label><br><input style = "height:20px" type = "text" name = "userid" class = "box" required /><br /><br />
			   </th>
			   </tr>
			   <tr>
			   <th>
				   <label>RATING TO OUR BAKERY:</label><br><input style = "height:20px" type = "text" name = "stars" class = "box" required /><br /><br />
				</th>
				</tr>
				<tr>
				 <th>
                  <label>COMMENTS:</label><br><input style = "height:20px" type = "text" name = "comments" class = "box" required /><br /><br />
			   </th>
			   </tr>
			   
				</tr>
				
				
		        
				</table>
                  <input id="sub" type = "submit" name="add" value = "Add"/>
				  <a href="thankyou.php">Back</a>
               </form>
			  
					<?php if(isset($error)){ echo "Enter the valid productid or your are alredy in"; } ?>
            </div>
				
         </div>
			<br><br>
			      </div>
	  
	  
	 
	  </body>
<html>