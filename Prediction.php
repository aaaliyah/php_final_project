<!DOCTYPE html>
<?php
	require_once('connect.php');
    $account = $_POST['taccount'];
    $password = $_POST['tpassword'];
    $sql = "select * from members_info where account = '".$account."'";
    $result = mysqli_query($conn,$sql);
    $asso_result = mysqli_fetch_assoc($result);
    if ($account == $asso_result['account']) {
        if ($password == $asso_result['password']){
        }
        else {
			echo'<script>alert("Your password is not correct.");history.back();</script>';
        }
	}
    else {
        echo'<script>alert("This account is not exist.");history.back();</script>';
    }
?>
<html lang="en">
<style>
	span{
		font-size:5px;
	}
	h1{
		font-size:70px;
		padding-left:0;
		color:#ffcc00;
	}
	html body{
		background-color: #2F3061;
		color:white;
	}
	.table th{
		color:white;
		background-color:#2E828A;
	}
	.table tr{
		color:black;
	}
	.table-hover tbody tr:hover td {
		background-color: grey;
	}	
	h4:hover{
		color:#ff6317;
	}
</style>
<head>
	<title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
	
	<div class="container">
		<div class="row"> 
		<div class="col-md-8 col-xs-3">
			<h1>ChenLW.com</h1>
			<h2>Prediction</h2>
			<p>money money money money money money money money money money money </p>
			<table class="table table-hover" align="l">
				<thead>
				  <tr>
					<th>Date</th>
					<th>Event</th>
					<th>contestant1</th>
					<th>ODDs</th>
					<th>contestant2</th>
					<th>ODDS</th>
				  </tr>
				</thead>
				<tbody>
				  <tr class="success" onclick="alert('$')">
					<td>06.13</td>
					<td>NBA</td>
					<td>Cavaliers </td>
					<td>10</td>
					<td>Warriors</td>
					<td>1</td>
				  </tr>      
				  <tr class="active">
					<td>06.12</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				  </tr>
				  <tr class="active">
				   <td>06.11</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				  </tr>
				  <tr class="active">
				  <td>06.10</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				  </tr>
				  <tr class="active">
					<td>06.10</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				  </tr>
				  <tr class="active">
					<td>06.09</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				  </tr>
				</tbody>
			  </table>
		</div>
		<div class="col-md-2 col-xs-1">
		</div>
		<div class="col-md-2 col-xs-1">
				<h4> <span class="glyphicon glyphicon-user"></span><?php echo $account ?></h4>
					<p>aa*****</p>
					<p>..@gmail.com.tw</p>
					PlayMoney:100.00
				
				

		</div>
		
	</div>

</body>
</html>

