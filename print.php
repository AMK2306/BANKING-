

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
    	
		button{
			border:none;
			background: #d9d9d9;
		}
	    button:hover{
			background-color:#777E8B;
			transform: scale(1.1);
			color:white;
        }
        .container{
            box-shadow: 0 0 50px 0 #3F0C1F;
            border: 2px solid #3F0C1F;
            background-color:white;
            width:750px;
        }

    </style>
</head>

<body style="background-color : #BDC3C7;">
<header>
<body style="background-color : #BDC3C7;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" >
    <img src="assets/LOGO.jpg" width="120" height="120" class="d-inline-block align-center" alt="">
     BANKING MADE EASY            
 </a> 
 <div >
 <div class="navbar-brand" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="d-inline-block align-center" alt=""href="index.php" style="color:black; font-size=1.5em; margin-bottom:7px;">
        HOME 
        </a>
      </li>
      </ul>
      </div>
      <div class="navbar-brand" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="d-inline-block align-center" alt=""href="customer.php" style="color:black; font-size=1.5em; margin-bottom:7px;">
        TRANSFER 
        </a>
      </li>
      </ul>
      </div>
      <div class="navbar-brand" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="d-inline-block align-center" alt=""href="transactionhistory.php" style="color:black; font-size=1.5em; margin-bottom:7px;">
        TRANSACTION HISTORY
        </a>
      </li>
      </ul>
      </div>
      
<button onclick="myFunction()"style="background-color : #BDC3C7;">PRINT</button>
</div>
<script>

function myFunction() {

window.print();

}

</script>
 </nav>
 
</header>

<div class="container">
<h1>
    <img src="assets/LOGO.jpg" width="100" height="100" class="d-inline-block align-center" alt="">
     TRANSACTION RECIEPT
</h1>
 </a> 
        <?php
            include 'config.php';
            $sno=$_GET['sno'];
            $sql = "SELECT * FROM  transaction where sno=$sno";
            $result=mysqli_query($conn,$sql);
            if(!$result)
            {
                echo "Error : ".$sql."<br>".mysqli_error($conn);
            }
            $rows=mysqli_fetch_assoc($result);
        ?>
    <div class="row">
		<div class="col-lg-6 col-md-6"style="text-align:center;border: 0.1px solid black;"><p class="p1">DATE AND TIME:</p></div>
<div class="col-lg-6 col-md-6" style="text-align:center;border: 0.1px solid black;"><p class="p1"> <?php echo $rows['datetime']; ?></p></div>
</div>
<div class="row">
		<div class="col-lg-6 col-md-6"style="text-align:center;border:0.1px solid black;"><p class="p1">SENDER:</p></div>
<div class="col-lg-6 col-md-6"style="text-align:center;border: 0.1px solid black;"><p class="p1"><?php echo $rows['sender']; ?></p></div>
</div>
<div class="row">
		<div class="col-lg-6 col-md-6"style="text-align:center;border:0.1px  solid black;"><p class="p1">RECEIVER:</p></div>
<div class="col-lg-6 col-md-6"style="text-align:center;border: 0.1px solid black;"><p class="p1"><?php echo $rows['receiver'];?></p></div>
</div>
<div class="row">
		<div class="col-lg-6 col-md-6"style="text-align:center;border: 0.1px solid black;"><p class="p1">AMOUNT:</p></div>
<div class="col-lg-6 col-md-6"style="text-align:center;border: 0.1px solid black;"><p class="p1"><?php echo $rows['balance']; ?></p></div>
 </div>
 <div class="row">
		<div class="col-lg-6 col-md-6"style="text-align:center;border: 0.1px solid black;"><p class="p1">AUTHORIZED SIGNATURE<br>FOR BME </p></div>
<div class="col-lg-6 col-md-6"style="text-align:center;border: 0.1px solid black;"><p> <img src="assets/SIGN.jpg" width="220" height="60" class="d-inline-block align-center" alt=""> </p></div>
<p style="text-align:center>"SAVE PAPER USE MOBILE APPLICATION FOR TRANSACTION HISTORY"</p>
 </div>
 <footer class="text-center mt-5 py-2">
            <p><b>SAVE PAPER AND GO GREEN USE OUR BME EMAIL SERVICES</b></p>
        </footer>

 </div>

</body>

</html>
    