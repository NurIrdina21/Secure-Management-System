<?php
	session_start();
	
		include("connection.php");
		include("function.php");
		
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
				
				.button a:hover {
					background-color: white;
					color: #FF914D;
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
						<div class="dropdown">
						  
						  </div>
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
					<div class="fakeimg responsive" style="height:650px;">
						<h1>Company Homepage</h1>
						<table>
							<tr>
								<td style="width:50%">
									<form method="post">
										<a href="employee login.php" class="button" ><b>Employee Login</b></a>
										<a href="manager login.php" class="button" ><b>Manager Login</b></a>
								</td>
								<td>
										<a href="purchase manager login.php" class="button" ><b>Purchase Manager Login</b></a>
										<a href="finance officer login.php" class="button" ><b>Finance Officer Login</b></a>
									</form>
								</td>
							</tr>
						</table>
					</div>
				
				</div>
			</div>
		</div>
	</body>
</html>