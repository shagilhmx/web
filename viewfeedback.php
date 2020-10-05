	<html>
	<head>
	
  
	<title> opinions of people</title>
	   </head>
	   <style>
	   th{ border:solid black 1px}
	    
	   </style>
	   <body style="background-image:url('bake3.jpg');background-repeat:no-repeat;background-size:cover;">
		<h1> opinions of the people</h1>	
			   <table align="center" style="border:solid black 1px"> 
			   <tr>
			   <th>
                  UserID
		       </th>
			   <th>
				  Ratings
				   </th>
				   <th>
                     Comments
			 </th>
				</tr>
				
				
				    <?php
					include('config.php');	
					 $sql = "select * from feedback";
      $result = mysqli_query($db,$sql);
	  $num=mysqli_num_rows($result);

					
				   
				
				while($items = mysqli_fetch_array($result))
				{
 
        
                echo 
		        '<tr >
				<td align="center">'.$items['userid'].'</td>
				<td align="center">'.$items['stars'].'</td>
				<td align="center">'.$items['comments'].'</td>
				
				</tr>';
								 
								 
	  }
	  ?>
				
        </table>
		
			</body>
</html>			