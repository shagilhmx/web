 <?php 
  
    if(isset($_POST['submit'])){ 
          
        foreach($_POST['quantity'] as $key => $val) { 
            if($val==0) { 
                unset($_SESSION['cart'][$key]); 
            }else{ 
                $_SESSION['cart'][$key]['quantity']=$val; 
            } 
        } 
          
    } 
	if(isset($_POST['submit1']))
	{
header('location:cupons.php');
	}		
?> 
  
<h1>View cart</h1> 
<a href="index.php?page=products">Go back to the products page.</a> 
<form method="post" action="index.php?page=cart"> 
      
    <table> 
          
        <tr> 
            <th>Name</th> 
            <th>Quantity</th> 
            <th>Price</th> 
            <th>Items Price</th> 
        </tr> 
          
        <?php 
          
            $sql="SELECT * FROM product WHERE product_id IN ("; 
                      
                    foreach($_SESSION['cart'] as $id => $value) { 
                        $sql.=$id.","; 
                    } 
                      
                    $sql=substr($sql, 0, -1).")"; 
                    $query=mysqli_query($db,$sql); 
                    $totalprice=0; 
                    while($row=mysqli_fetch_array($query)){ 
                        $subtotal=$_SESSION['cart'][$row['product_id']]['quantity']*$row['cost']; 
                        $totalprice+=$subtotal; 
                    ?> 
                        <tr> 
                            <td><?php echo $row['product_name'] ?></td> 
                            <td><input type="text" name="quantity[<?php echo $row['product_id'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['product_id']]['quantity'] ?>" /></td> 
                            <td><?php echo $row['cost'] ?>Rs</td> 
                            <td><?php echo $_SESSION['cart'][$row['product_id']]['quantity']*$row['cost'] ?>Rs</td> 
                        </tr> 
                    <?php 
                          
                    } 
        ?> 
                    <tr> 
                        <td colspan="4">Total Price: <?php echo $totalprice; ?></td> 
<?php  $_SESSION['total']=$totalprice;       ?>            
				   </tr> 
          
    </table> 
    <br /> 
    <button type="submit" name="submit">Update Cart</button> 
	<button type="submit" name="submit1">ORDER</button>
</form> 
<br /> 
<p>To remove an item set its quantity to 0. </p>