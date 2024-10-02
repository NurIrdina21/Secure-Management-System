<?php
	session_start();
	
		include("connection.php");
		include("function4.php");
		
		
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<style>
				* {
					box-sizing: border-box;
				}

				body {
					font-family: Arial;
					background: #f1f1f1;
				}
				
				.content {
					margin: auto;
				}
				
				.responsive {
					max-width: 1500px;
					margin: auto;
					float: center;
				}
				
				.responsive1 {
					max-width: 750px;
					margin: auto;
				}

				.header {
					padding: 30px;
					text-align: center;
					background: white;
				}

				.header h1 {
					font-size: 50px;
				}
				
				.dropbtn {
				background-color: #FF914D ;
				  color: white;
				  padding: 16px;
				  font-size: 16px;
				  border: none;
				  cursor: pointer;
				}

				.dropdown {
				  position: relative;
				  display: inline-block;
				}
				
				.dropdown .badge {
					position: absolute;
					top: -10px;
					right: -10px;
					padding: 5px 10px;
					border-radius: 50%;
					background-color: red;
					color: white;
				}

				.dropdown-content {
				  display: none;
				  position: absolute;
				  background-color: #f9f9f9;
				  min-width: 160px;
				  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				  z-index: 1;
				}

				.dropdown-content a {
				  color: #FF914D;
				  padding: 12px 16px;
				  text-decoration: none;
				  display: block;
				}

				.dropdown-content a:hover {
					background-color: #FF914D;
					color: white;
				}

				.dropdown:hover .dropdown-content {
				  display: block;
				}

				.dropdown:hover .dropbtn {
				  background-color: white;
				  color: #FF914D;
				}

				.topnav {
					overflow: hidden;
					background-color: #7bcbf3 ;
					list-style-type: none;
					margin: 0;
					padding: 0;
					overflow: hidden;
					position: -webkit-sticky;
					position: sticky;
					top: 0;
				}

				.topnav a {
					float: left;
					display: block;
					color: white;
					text-align: center;
					padding: 14px 16px;
					text-decoration: none;
				}

				.topnav a:hover {
					background-color: white;
					color: #FF914D;
				}
				
				.topnav input[type=search] {
				  padding: 6px;
				  border: none;
				  margin-top: 8px;
				  margin-right: 16px;
				  font-size: 17px;
				}

				.centercolumn {   
					float: center;
					width: 100%;
				}

				.fakeimg {
					background-color: white;
					width: 100%;
					padding: 20px;
				}

				.card {
					background-color: white;
					padding: 20px;
					margin-top: 20px;
				}

				.row:after {
					content: "";
					display: table;
					clear: both;
				}
				
				table, th, td{
					border-collapse: collapse;
				}
				
				table{
					width: 100%;
					height: 100%;
				}
			
				input[type=text],select, input[type=email],input[type=tel], input[type=date], textarea, input[type=password]{
					width: 98%;
					padding: 12px 20px;
					margin: 7px 0;
					display: inline-block;
					border: 1px solid #ccc;
					border-radius: 4px;
					box-sizing: border-box;
				}

				input[type=submit], input[type=reset]{
					width: 98%;
					background-color: black;
					color: white;
					padding: 12px 20px;
					margin: 8px 0;
					border: none;
					border-radius: 4px;
					cursor: pointer;
				}

				input[type=submit]:hover {
					background-color: #FF914D;
				}
				
				input[type=reset]:hover {
					background-color: #FF914D;
				}
				
				@media screen and (max-width: 800px) {
					.leftcolumn, .rightcolumn, .centercolumn {   
						width: 100%;
						padding: 0;
					}
				}

				@media screen and (max-width: 400px) {
					.topnav a {
						float: none;
						width: 100%;
					}
				}
				
				footer {
					background-color: #FF914D;
					padding: 10px;
					height: 300px;
					text-align: center;
					color: black;
				}
				
				footer a {
					color: black;
					text-decoration: none;
				}
				
				#customers {
				  font-family: Arial, Helvetica, sans-serif;
				  border-collapse: collapse;
				  width: 100%;
				}

				#customers td, #customers th {
				  border: 1px solid #ddd;
				  padding: 8px;
				}

				#customers tr:nth-child(even){background-color: #f2f2f2;}

				#customers tr:hover {background-color: #ddd;}

				#customers th {
				  padding-top: 12px;
				  padding-bottom: 12px;
				  text-align: left;
				  background-color: #7bcbf3;
				  color: Black;
				}
				
				a {
				  text-decoration: none;
				  color: Green;
				}
				
				ps {
				  text-decoration: none;
				  color: Red;
				}
				
				.button {
				  width: 100%;
				  text-decoration:none;
					padding: 12px 20px;
					margin: 7px 0;
					display: inline-block;
					border: 1px solid #ccc;
					border-radius: 4px;
					box-sizing: border-box;
					background-color: black;
					color: white;
					text-align: center;
				}
			</style>
		</head>
	<body class="content">

		<div class="header">
			<table style="width:100%">
				<tr>
					<td style="width:25%;">
						
					</td>
					<td style="width:65%; float:left;">
						<h1>ALL IT</h1>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="topnav">
			<a href="main page.php"><b>Main Page</b></a>
		</div>
		<div class="row">
			<div class="centercolumn">
				<div class="card">
				<h1>Login History</h1>
					<div class="fakeimg responsive" >
						<table id="customers">
						  <tr>
							<th>ID</th>
							<th>
							<p>Employee</p>
							<p> Name</p>
							</th>
							<th>Employee ID</th>
							<th>Password</th>
							<th>Login Date</th>
							<th>Login Time</th>
							<th>Logout Date</th>
							<th>Logout Time</th>
						  </tr>
						  
						 <?php 
							
							$query = "select * from login_history";
							$result = mysqli_query($con, $query);
							while($r = mysqli_fetch_array($result)){

							$id = $r['id'];
							$surname = $r['surname'];
							$user_id = $r['user_id'];
							$confirmpass = $r['confirmpass'];
							$login_date = $r['login_date'];
							$login_time = $r['login_time'];
							$logout_date = $r['logout_date'];
							$logout_time = $r['logout_time'];
						?>	
						
						  <tr>
							<td> <?php echo $id; ?></td>
							<td><?php echo $surname; ?></td>
							<td><?php echo $user_id; ?></td>
							<td><?php echo $confirmpass; ?></td>
							<td><?php echo $login_date; ?></td>
							<td><?php echo $login_time; ?></td>
							<td><?php echo $logout_date; ?></td>
							<td><?php echo $logout_time; ?></td>
						  </tr>
						  <?php 
						}
						?> 
						</table>
					</div>
					<div>
						<a href="finance officer homepage.php" class="button" style="width:50%;"><b>Back</b></a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>