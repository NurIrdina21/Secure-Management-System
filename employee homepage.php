<?php 

session_start(); 
include("connection.php");
include("function.php");

// Function to update logout history
function updateLogoutHistory($userId) {
    global $con;
    $date = date("Y-m-d");
    $time = date("H:i:s");
    $query = "UPDATE login_history SET logout_date = '$date', logout_time = '$time' WHERE user_id = $userId AND logout_date IS NULL";
    mysqli_query($con, $query);
}

$query = "SELECT * FROM employee WHERE user_id = " . $_SESSION['user_id'];		
$result = mysqli_query($con, $query);

if($result && mysqli_num_rows($result) > 0)
{
    $user_data = mysqli_fetch_assoc($result);
}else{
    echo "No User Found!...";    
}

if(isset($_POST['logout'])) {
    updateLogoutHistory($_SESSION['user_id']);
    session_destroy();
    header("Location: employee login.php");
    exit;
}
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
                        <div class="dropdown">
                          
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
                    <h1>Employee Homepage</h1>
                    <input type="hidden" name="id" value="<?php echo $user_data['id']; ?>" />
                        <table>
                            <tr>
                                <td style="width:50%">
                                    <form method="post">
                                        <label for="design">Employee Name</label>
                                        <input type="text" id="design" name="design" value="<?php echo $user_data['surname']; ?>">
                                        <a href="update employee profile.php" class="button" ><b>Update Employee Profile</b></a>
                                </td>
                                <td>
                                        <label for="main">Employee ID</label>
                                        <input type="text" id="main" name="main" value="<?php echo $user_data['user_id']; ?>">
                                        <a href="view employee profile.php" class="button" ><b>View Employee Profile</b></a>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <form method="post">
                        <input type="submit" name="logout" class="button" style="width:50%;" value="Log Out">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>