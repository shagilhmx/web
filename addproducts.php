<?php
   include("config.php");
	   if(isset($_POST['add']))
	  {
		  $tm=md5(time());
    $fnm=$_FILES["f1"]["name"];
    $dst="./books_image/".$tm.$fnm;
    $dst1="books_image/".$tm.$fnm;

    move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);


      $productid = $_POST['productid'];
	  $name =$_POST['productname']; 
	  
	  
      $price =$_POST['cost']; 
	  
	  
	   
     


	  
      $sql = " insert into product(product_id,product_name,cost,productimage) values('$productid','$name','$price','$dst1')";
     $result = mysqli_query($db,$sql);
	 
     if(!$result)
	 {
	 echo "product already exists" ;
	 }
     else
     {
	 echo "succesfully added" ;}
	 }

?>
<html>
<head><title>addproduct Page</title>
      
      
   </head>
    
    <body style="background-image:url('bake11.jpg');background-repeat:no-repeat;background-size:cover;">
	   <br><h1 id="h1"align="center">Bakery Products</h1><hr id="hr1"><br>
      <div align = "center">
         <div style = "width:450px; border: solid 5px red; height:350px" align = "left">
            <div style = "background-color:brown; color:#FFFFFF; padding:3px;height:20px"><b>adding products:-</b></div>
				
            <div style = "margin:30px">
               
               <form name="form1" action = "" method = "post" class="col-lg-6" enctype="multipart/form-data">
			   <table>
			   <tr>
			   <th>
                  <label>ProductID:</label><br><input style = "height:20px" type = "text" name = "productid" class = "box" required /><br /><br />
			   </th>
			   </tr>
			   <tr>
			   <th>
				   <label>Name:</label><br><input style = "height:20px" type = "text" name = "productname" class = "box" required /><br /><br />
				</th>
				</tr>
				<tr>
				 <th>
                  <label>cost:</label><br><input style = "height:20px" type = "text" name = "cost" class = "box" required /><br /><br />
			   </th>
			   </tr>
			   
			   
			
				

                                <td>
                                     <tr>
                                       Product Image:
                                        <input type="file" name="f1" required="">
                                    </td>
                                </tr>

				
				
		        
				</table>
                  <input id="sub" type = "submit" name="add" value = "Add"/>
				  <a href="welcome.php">Back</a>
				  
               </form>
			  
					<?php if(isset($error)){ echo "Enter the valid productid or your are already in"; } ?>
            </div>
				
         </div>
			<br><br>
			      </div>
	  
	  
	 
	  </body>
<html>