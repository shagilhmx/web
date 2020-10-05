<?php
session_start();
include('config.php');
if(isset($_POST['OK']))
{
$tc=$_SESSION['total'];
$cupons=$_POST['cupons'];
$sql="select discount from cupons WHERE  cupon='$cupons'";
$result=mysqli_query($db,$sql);
$res=mysqli_fetch_array($result);
$tc = $tc -($tc * ($res['discount']/100));
echo "$tc";
$_SESSION['discount']=$tc;

header('location:placeorder.php');
}
if(isset($_post['back']))
{
header('location:cart.php');
}
?>
<html>
<head>
<title> Apply Coupons</title>
</head>
<body style="background-image:url('bake8.jpg');background-repeat:no-repeat;background-size:cover;"><h1>CUPONS </h1>
<br><br><br><br>
	 <div align="center">
               <form action = "" method = "post">
			   <table>
			   <tr>
			   <th>
                  <label>Cupons:</label><br><input style = "height:20px" type = "text" name = "cupons" class = "box" /><br /><br />
			   </th>
			   </tr>
			   </table>
			                     <input id="sub" type = "submit" name="OK" value = "OK"/>
                                <input id="sub" type = "submit" name="back" value = "back"/>

			   </form>
</div>			   </body>
			   </html>
