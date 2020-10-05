<?php
   include("config.php");
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
 
if(isset($_POST['sub1']))//to run PHP script on submit
	{
		header("location:addproducts.php");
	}
	
	
if(isset($_POST['sub2']))//to run PHP script on submit
	{
		header("location:deleteproducts.php");
	}
	
if(isset($_POST['sub3']))//to run PHP script on submit
	{
		header("location:viewproducts.php");
	}
if(isset($_POST['sub4']))//to run PHP script on submit
	{
		header("location:viewfeedback.php");
	}
	if(isset($_POST['sub5']))//to run PHP script on submit
	{
		header("location:orderlist.php");
	}if(isset($_POST['sub6']))//to run PHP script on submit
	{
		header("location:addcoupons.php");
	}
}

?>
<html>
   
   <head>
   <style type="text/css">
   body {
	   background-color:skyblue;
	  
   }
 #main
{
  line-height: 400px;
  text-align:center; 
  vertical-align:middle;
}

#frm
{
  display: inline-block;
  horizantal-align: middle;
  line-height: 14px; 
}


   
   </style>
	    
   
      <title >Welcome </title>
   </head>
   <body style="background-image:url('bake5.jpg');background-repeat:no-repeat;background-size:cover;"> 
	   
   <div>
                <h1 align="center" style = "color:white;font-size:70px">CHILL OUT BAKEHOUSE</h1> 
	         <div >
                      <h2 align="right"><a href = "logout.php" style = "color:white">Sign Out</a> </h2>
					  <hr style = "background-color:white"; width:"900px"; height:"2px"></hr>
<div id="main">      
	  <form id="frm"action="" method ="post">
	   
             <br/> <input type = "submit" name="sub1" value = "Addproducts"/> <br /> <br /> <br />
	          <input type = "submit" name="sub2" value = "deleteproducts"/><br /><br /> <br />
	          <input type = "submit" name="sub3" value = "viewproducts"/><br /><br /><br />
              <input type = "submit" name="sub4" value = "feedback"/>	<br /><br /> <br />
               <input type= "submit" name="sub5" value = "orderlist"/><br /><br /><br />
              <input type= "submit"  name="sub6" value = "coupons"/><br /><br /><br />

					  </form>
					  </div>
	         </div> 
          </div>	
   </body>  
</html>