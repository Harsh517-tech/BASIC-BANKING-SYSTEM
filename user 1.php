<!DOCTYPE html>
<html>
<head>
	<title>Successful</title>
	<style>
		 .click{
		    width: 20px;
			background-color: #071a3d;
			color: white;
			font-size: 25px;
		}
		.click:hover{
			background-color: black
			
		}
        .container{
			width: 400px;
			padding-left: 450px;
			font-size:90px;
		}
		.container input{
			width:100%;
			clear: both;
			font-size: 70px;
		}
		
    	
		h2{
      		font-size: 50px;
      		text-align: center;
      		color: black;
      		text-shadow: 1px 1px 2px black, 0 0 25px lightblue, 0 0 5px white;
    	}
		
	</style>
</head>
<body>
  
	<?php include 'connection.php' ?>
	
	<?php 
	$sender_name = $_POST["sender_name"];
	$receiver_name = $_POST["receiver_name"];
	$amount = $_POST["amount"];
	?>
	<h2>Congratulations!! <br><br>Transfer from <i><u><?php echo $sender_name ?></i></u> to <i><u><?php echo $receiver_name ?></u></i> is successful</h2>
	<h2>For an amount of   <u><?php echo$amount ?></u>  </h2>
	<div class="container">
	<button><a href="transaction.php"><b>Check Transaction History</b></a></button>
	</div>
	

</body>
</html>