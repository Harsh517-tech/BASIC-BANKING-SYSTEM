<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
	<style type="text/css">
		body{
			background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2wJgtpKFKvzH62_ixZpSyvJ5HJKQOUdNCJw&usqp=CAU");
			margin: 0;
			background-size: cover;
		}
		h2{
			text-align: center;
			font-size: 80px;
		}
		
		button{
      		font-size: 30px;
      		padding: 25px 50px;
      		justify-content: center;
      		background-color: #071a3d;
			  color:white;
		}
		a{
      color: white;
      font-size:20px;
    }

    
    .container{
    	padding-left: 625px;

    }
	</style>
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
    <div class="topnav" id="myTopnav">
        
            
		<a  class="active" href="index.php"><i class="fa fa-home"></i> Home</a>
		<a  href="table.php"></i> User List</a>
		<a href="transaction.php"></i> Transaction History</a>
		</div>
		<?php $dbhost = "localhost";
              $dbuser = "id16135060_my_banking1";
              $dbpass = "W=6oZi!#Bh6#ucbH";
              $db = "id16135060_my_banking";
              $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error); ?>
		
		<?php 
		$sender_name = $_POST["sender_name"];
		$receiver_name = $_POST["receiver_name"];
		$amount = $_POST["amount"];
		
	
		 $sql5="SELECT `NAME`, `BALANCE` FROM `user_list` WHERE name='$sender_name'";
		$result5=mysqli_query($conn, $sql5); 
		$row=mysqli_fetch_array($result5) ;
		$money= $row['BALANCE'];
	
		
		
		?>
	
	
	
		<?php $sql3 = "SELECT `NAME`,`ID`  FROM `user_list` WHERE Name='$receiver_name' ";
		$result3 = mysqli_query($conn, $sql3); 
		
		if (mysqli_fetch_assoc($result3)<1){ 
			 include 'user.php';
		 } 
		elseif ($money<$amount) {
			 include 'user 2.php';
			 
		 }
	
		else{
			 $sql4 = "UPDATE user_list SET balance=balance-$amount WHERE Name='$sender_name'";
			$sql2= "UPDATE user_list SET balance=balance+$amount WHERE Name='$receiver_name' ";
			 $result2 = mysqli_query($conn, $sql2); 
			 $result3 = mysqli_query($conn, $sql4);
			 $sql = "INSERT INTO transaction_list VALUES ('$sender_name','$receiver_name',  $amount)";
			$result = mysqli_query($conn, $sql); 
			$sql7 = "INSERT INTO transaction_list( `Sender`, `Receiver`, `Amount`) VALUES ('$sender_name','$receiver_name','$amount')";
	$query = mysqli_query($conn, $sql7);
			 include 'user 1.php';
			 
	
		 }
	
	
	
		?>
		
		
		
	
		
	
	
	
	</body>
	</html>