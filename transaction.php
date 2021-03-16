  
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transaction History</title>
	<style type="text/css">
		 table{
            width: 800px;
            height: 100px;
            color: black;
            font-size: 20px;
            border-color: white;
            
        }
        tr, th, td {
        	border: 1px solid #071a3d ;
            width: 800px;
        }
        th,td{
        	text-align: center;
            width: 800px;
        }
        th{
        	background-color: rgb(27, 155, 187) ;
        	color: white;
            width: 800px;
        }
        body{
        	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnLWe36LOUYggJbQlkI8UYUovHT8HG_83R7g&usqp=CAU");
        	margin: 0;
            background-repeat: repeat;
            background-size: cover;
        }
        .middle{
        	margin-left: auto;
        	margin-right: auto;
            width: 800px;
        }
        h1{
        	text-align: center;
        	font-size: 40px;
            color: black;
        }
        a{
            color: white;
            font-size:20px;
        }
        tr{
            font-size:25px;
            border: 2px solid black;    
            background-color: #f2f2f2;
            
        }
        tr:hover{
            background-color: #d279a6;
        }
	</style>
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
<?php include 'connection.php' ?>
    <div class="topnav" id="myTopnav">
        
            
      <a href="index.php" class="active" ><i class="fa fa-home"></i>HOME PAGE</a>
      <a href="transaction.php">TRANSACTION PAGE</a>
      <a href="table.php">USER LIST PAGE</a>
     
    </div>
	

	<h1><b><u><i>TRANSACTION HISTORY</i></u></b></h1>

	

	<table class="middle">
    <thead>
        <tr>
        <th>Transaction ID</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
            <th>Time-Stamp</th>
        </tr>
    </thead>
    <?php $dbhost = "localhost";
 $dbuser = "id16135060_my_banking1";
 $dbpass = "W=6oZi!#Bh6#ucbH";
 $db = "id16135060_my_banking";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     $sql = "SELECT * FROM `transaction_list`";
      $result = mysqli_query($conn, $sql);?>
      <?php while( $row = mysqli_fetch_array($result)) : ?>
    <tr>
        <!--Each table column is echoed in to a td cell-->
        <td><?php echo $row['Transaction ID']; ?></td>
        <td><?php echo $row['Sender']; ?></td>
        <td><?php echo $row['Receiver']; ?></td>
        <td><?php echo $row['Amount']; ?></td>
        <td><?php echo $row['Time-Stamp']; ?> </td>
    </tr>
    <?php endwhile ?>
</tbody>
</table>
    <tbody>
    </body>
    </html>