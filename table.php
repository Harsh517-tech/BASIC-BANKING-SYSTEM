<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>user list</title>
    <style type="text/css">
        table, th,tr,td{
            border: 2px solid black;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            
            
        }
        table{
            width: 900px;
            height: 500px;
            color: black;
            font-size: 30px;
            border-color: rgb(5, 35, 209);
        }
        h1{
            text-align: center;
            color: rgb(60, 68, 179);
            font-size: 40px;
            margin-top:10px;


        }
        body{
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnfcpW47usVS1fmHRgCRFArdVzecUmIJkWBQ&usqp=CAU");
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            background-color: #15b5e6;
        }
        th, td{
            text-align: center;
            /* border: 2px solid black; */
            
        }
        th{
            background-color: rgb(82, 201, 35) ;
            color: white;
            border: 2px solid rgb(0, 0, 0);

        }
        a{
            font-size:20px;
        }
        tr{
            font-size:25px;
            border: 2px solid rgb(10, 50, 230);    
            background-color: #daff05;
            
        }
        tr:hover{
            background-color: #c7ca0d;
        }
        

    </style>
    <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
    <div class="topnav" id="myTopnav">
        
            
      <a href="index.php" class="active" ><i class="fa fa-home"></i>HOME PAGE</a>
      <a href="transaction.php">TRANSCATION PAGE</a>
      <a href="table.php">USER LIST PAGE</a>
     
    </div>
  <h1><u>User List</u></h1>
  <table class="center">
  <thead>
      <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Balance</th>
      </tr>
  </thead>
  <tbody>
      <!--Use a while loop to make a table row for every DB row-->
      <?php $dbhost = "localhost";
 $dbuser = "id16135060_my_banking1";
 $dbpass = "W=6oZi!#Bh6#ucbH";
 $db = "id16135060_my_banking";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
      $sql = "SELECT `ID`, `NAME`, `EMAIL`, `BALANCE` FROM `user_list`";
      $result = mysqli_query($conn, $sql);?>
      <?php while( $row = mysqli_fetch_array($result)) : ?>
      
      <tr>
          <!--Each table column is echoed in to a td cell-->
          <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['NAME']; ?></td>
          <td><?php echo $row['EMAIL']; ?></td>
          <td><?php echo $row['BALANCE']; ?></td>
      </tr>
      <?php endwhile ?>
  </tbody>
</table>

</body>
</html>