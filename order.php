<?php include_once('php/dbconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
</head>
<body>
	<section>
		<table>
			<tr>
				<td>No.</td>
				<td>Names</td>
				<td>Address</td>
				<td>Quantity</td>
				<td>total Price</td>
			</tr>
			<?php $result =mysqli_query($db,"Select * from orders");?>
			<?php while ($row = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?php echo $row['orderId']; ?></td>
				<td><?php echo $row['orderName']; ?></td>
				<td><?php echo $row['orderAddress']; ?></td>
				<td><?php echo $row['orderQuantity']; ?></td>
				<td><?php echo $row['orderPrice']; ?></td>
			</tr>
			<?php } ?>
		</table>
	</section>
</body>
</html>