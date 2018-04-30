<html>
	<head>
		<title>My Shop</title>
	</head>
	
	<body>
	<p><a href="http://localhost:9000/health"> Check health - product </a></p>
	<p><a href="http://localhost:9001/health"> Check health - order </a></p>
	<p><a href="http://localhost:9002/health"> Check health - payment </a></p>
	<p><a href="http://localhost:80/status.php"> Monitor container status.</a><p>
	<h4> Place order- Go to Bash and type below command
	<b> "curl -H "Content-Type:application/json" -X POST -d '{"productIds": "101,102,"}' http://localhost:9001/orders" </b>
	  </h4>
	<h4> To make a payment for an order given its orderId please refer below command may be syntax is not correct. 
	<b> curl -i localhost:9002/payments/orders/1 </b>
	 </h4>

	</body>
</html>

