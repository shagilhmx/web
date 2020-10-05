 <?php 
    session_start(); 
    require("config.php"); 
    if(isset($_GET['page'])){ 
          
        $pages=array("products", "cart"); 
          
        if(in_array($_GET['page'], $pages)) { 
              
            $_page=$_GET['page']; 
              
        }else{ 
              
            $_page="products"; 
              
        } 
          
    }else{ 
          
        $_page="products"; 
          
    } 
  
?> 

<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
      
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <link rel="stylesheet" href="css/reset.css" /> 
    <link rel="stylesheet" href="css/style.css" /> 
      
  
    <title>Shopping Cart</title> 
  
  
</head> 
  
<body style="background-image:url('bake12.jpg');background-repeat:no-repeat;background-size:cover;">
       
    <div id="container"> 
  
        <div id="main"> 
              
            <?php require($_page.".php"); ?> 
  
        </div><!--end of main--> 
          
        <div id="sidebar"> 
              
        </div><!--end of sidebar--> 
  
    </div><!--end container--> 
  
</body> 
</html>

<h1>Cart</h1> 
<?php 
  
    if(isset($_SESSION['cart'])){ 
          
        $sql="SELECT * FROM product WHERE product_id IN ("; 
          
        foreach($_SESSION['cart'] as $id => $value) { 
            $sql.=$id.","; 
        } 
          
        $sql=substr($sql, 0, -1).")"; 
        $query=mysqli_query($db,$sql); 
        while($row=mysqli_fetch_array($query)){ 
              
        ?> 
            <p><?php echo $row['product_name'] ?> x <?php echo $_SESSION['cart'][$row['product_id']]['quantity'] ?></p> 
        <?php 
              
        } 
    ?> 
        <hr /> 
        <a href="index.php?page=cart"><h1>Go to cart</h1></a> 
    <?php 
          
    }else{ 
          
        echo "<p>Your Cart is empty. Please add some products.</p>"; 
          
    } 
  
?>