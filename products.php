<?php

    if(isset($_GET['action']) && $_GET['action']=="add"){

        $id=intval($_GET['id']);

        if(isset($_SESSION['cart'][$id])){

            $_SESSION['cart'][$id]['quantity']++;

        }else{

            $sql_s="SELECT * FROM product
                WHERE product_id={$id}";
            $query_s=mysqli_query($db,$sql_s);
            if(mysqli_num_rows($query_s)!=0){
                $row_s=mysqli_fetch_array($query_s);

                $_SESSION['cart'][$row_s['product_id']]=array(
                        "quantity" => 1,
                        "cost" => $row_s['cost']
                    );


            }else{

                $message="This product id it's invalid!";

            }

        }

    }

?>
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
    <h1>Product List</h1>
    <?php
        if(isset($message)){
            echo "<h2>$message</h2>";
        }
    ?>
    <table class="data-table">
        <tr>
            <th>Name</th>
            <th>id</th>
            <th>Price</th>
			<th>productimages</th>
            <th>Action</th>
        </tr>

        <?php

            $sql="SELECT * FROM product";
            $query=mysqli_query($db,$sql);

            while ($row=mysqli_fetch_array($query)) {

        ?>
            <tr>
                <td><?php echo $row['product_name'] ?></td>
                <td><?php echo $row['product_id'] ?></td>
                <td><?php echo $row['cost'] ?>RS</td>
				<?php echo '<td>'; ?> <img src='<?php echo $row["productimage"]; ?>' height="100"
                                                     width="100"> <?php echo '</td>';?>

                <td><a href="index.php?page=products&action=add&id=<?php echo $row['product_id'] ?>">Add to cart</a></td>
            </tr>
        <?php

            }

        ?>

    </table>
