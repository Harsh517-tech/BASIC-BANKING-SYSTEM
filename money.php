
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Send Money!!</title>
	<style type="text/css">
		form{
			font-size: 40px;
			font-weight:30px;
			text-align: center;
			margin: auto;
			padding-top: 80px;
			color: rgb(43, 41, 41);
		}
		label{
			padding-top: 20px;
			justify-content: left;
			font-weight: 100px;
			
		}
		.container{
			width: 500px;
			
			padding-left: 400px;
			
		}
		.container input{
			width:90%;
			clear: both;
			height: 35px;
			border: 50px;
			color:black;
		}
		button{
			font-size: 30px;
      		padding: 50px 10px;
      		background-color: #071a3d; 
			color: rgb(37, 36, 36);
			margin-left: 700px;
		}
		

		
		.press{
			padding-top: 50px;
			padding-left: 750px;
			margin-left: 700px;
		}
		body{
			background-image: url("https://nairabarter.com/blog/wp-content/uploads/2020/03/5-Ways-To-Transfer-Or-Send-Money-From-Nigeria.jpg");
			margin: 0;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.click{
			width: 300px;
			background-color: #071a3d;
			color: white;
			font-size: 25px;
			margin-left: 500px;
			margin-top:30px;
			height:40px;
		}
		.click:hover{
			background-color: rgba(19, 135, 243, 0.74);	
		}
		a{
      color: white;
      font-size:20px;
    	}
		
	</style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
    <div class="topnav" id="myTopnav">
        
           
      <a href="index.php" class="active" ><i class="fa fa-home"></i>HOME PAGE</a>
      <a href="transaction.php">TRANSACTION PAGE</a>
      <a href="table.php">USER LIST PAGE</a>
     
    </div>

	<div class="container">
		<form action="transfer.php" method="post">
			<label><b>SENDER's NAME:</b></label>
			<input list="names" id="sender_name" type="text" name="sender_name", placeholder="Enter name here" required>
			<datalist id="names">
				<option value="Harsh Modi"></option>
				<option value="Mahek Modi"></option>
				<option value="Shalini Yadav"></option>
				<option value="Nirav Modi"></option>
				<option value="Narendra Modi"></option>
				<option value="Kalp Shah"></option>
				<option value="Srishti Pandey"></option>
				<option value="Pragnesh Poojary"></option>
				<option value="Atul Tiwari"></option>
				<option value="Atul Yadav"></option>
				
			</datalist>
		</br>
			<label><b><br>RECIEVER's NAME:</b></label>
			<input list="namess" type="" id="receiver_name" name="receiver_name" placeholder="Enter name here"  required>
			<datalist id="namess">
			<option value="Harsh Modi"></option>
				<option value="Mahek Modi"></option>
				<option value="Shalini Yadav"></option>
				<option value="Nirav Modi"></option>
				<option value="Narendra Modi"></option>
				<option value="Kalp Shah"></option>
				<option value="Srishti Pandey"></option>
				<option value="Pragnesh Poojary"></option>
				<option value="Atul Tiwari"></option>
				<option value="Atul Yadav"></option>
				
			</datalist>
		</br>
			<label><b><br>AMOUNT: </b></label>
			<input type="number" id="amount" name="amount" placeholder="Enter amount here" required></div>
			<input class="click" type="submit" name="" value="Send Money">
		</form>
	
<!-- 	</div>
	<script type="text/javascript" src="alert.js"></script>
	<div class="press">
		<button >Send Amount</button>
	</div> -->
	
</body>
</html>