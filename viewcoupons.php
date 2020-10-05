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
			color: #000000;
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
			border: 3px solid #00ff00;
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

			color: #dc143c;
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
	<title> addproducts </title>
	   </head>
	   <body style="background-image:url('bake8.jpg');background-repeat:no-repeat;background-size:cover;">
               
			   <table class="data-table">
			   <tr>
			   <th>
                  <label>Coupon name</label><br>
		       </th>
			   <th>
				   <label>Discount</label><br>
				   </th>
				   <th>
                     <label>discription</label><br>
                    </th>
				</tr>				
				    <?php
					include('config.php');	
					 $sql = "select * from cupons";
      $result = mysqli_query($db,$sql);
	  $num=mysqli_num_rows($result);

				while($items = mysqli_fetch_array($result))
				{
                
		        echo 
		        '<tr >
				<td>'.$items['cupon'].'</td>
				<td>'.$items['discount'].'</td>
				<td>'.$items['discription'].'</td>
				
				</tr>';				 
	  }
	  ?>
				
        </table>
		
			</body>
</html>			