<?php
	session_start();
include('config.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bakery- Online Shop</title>

	
</head>
<body>		
		
		
					
		<!-- Content -->
		<section class="container-content">
			<div class="content">
				<?php
											{
												
								 {


								// Wyszukanie all itemow nalezacych do danej kategorii
									$sqlItems = $connection->query("SELECT * FROM product);
									$items = $sqlItems->fetch_all(PDO::FETCH_NUM);

									echo '
									<table>
										<th></th>
										<th>Name</th>
										<th>Price</th>
										<th>Quantity</th>
										<th></th>
										<th></th>
									';

									// Wypisanie kazdego itemu nalezacego do danej kategorii
									foreach ($items as $item) {
										echo '
										<tr>
											<td>'.$item['product_name'].'</td>
											<td>'.$item['cost'].'</td>
											<td>'.$item['quantity'].'</td>
											<td><div class="styled-select slate">
											<select class="product-quantity-select">';
											for( $i= 1 ; $i <= $item['quantity'] ; $i++ )
											{
											  echo '<option>' .$i. '</option>';
											}			  
											echo '</select>		
											</div></td>
											<td><button type="submit" class="btn btn-adjust js-product-buy" data-product-id="'.$item['product_id'].'">Add me!</button></td>
										</tr>';
									}
									echo '</table>';
								}
							}
						}
					 catch(Exception $e) {
						echo '<span style="color: red;">Server error! WARNING!!!</span>';
						// Do wyrzucenia potem
						echo '<br /> Developer error info: '.$e;
						}
	
</body>
</html>