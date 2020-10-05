
	<html>
	<head>
	 <style type="text/css">
 table {
			margin: auto;
			font-family:"Comic Sans MS",cursive,sans-serif;
			font-size: 16px;
		}

		p 
		{
			color: #ffe400;
			font-size:35px;
			text-align: center;
            font-family:"Comic Sans MS",cursive,sans-serif;
		}
		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 16px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 16px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 3px solid #5efeff;
			padding: 7px 16px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			color: #00ff00;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {

			color: #ffd700;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;

		}

		.data-table tbody tr:nth-child(odd) td {

		}
		.data-table tbody tr:hover td {
			background-color: #ffffff;
			border-color: #5efeff;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
</style>
</head>
	<title> orderlist </title>
	   </head>
	   <body style="background-image:url('bake5.jpg');background-repeat:no-repeat;background-size:cover;">
	   <h1>orderlist</h1>
               
			   <table class="data-table">
			   <tr>
			   <th>
                  <label>userID</label><br>
		       </th>
			   <th>
				   <label>Name</label><br>
				   </th>
				   <th>
                     <label>totalcost</label><br>
			 </th>
			 <th>
                      <label>phone</label><br>
			   </th>
					
				</tr>
				
				
				    <?php
					include('config.php');	
					 $sql = "select userid,name,totalcost,mobile from order_details order by totalcost";
      $result = mysqli_query($db,$sql);
	  $num=mysqli_num_rows($result);

								   
				
				while($items = mysqli_fetch_array($result))
				{
 
        
                
		        echo'<tr>';
				echo'<td>'; echo $items['userid']; echo'</td>';
				echo'<td>'; echo $items['name']; echo'</td>';
				echo'<td>'; echo $items['totalcost']; echo'</td>';
				echo'<td>'; echo $items['mobile']; echo'</td>';																																		
					 
							 
				echo'</tr>';				 
	  }
	  ?>
				
        </table>
		
			</body>
</html>			