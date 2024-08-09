<?php 
session_start();
include 'admin.php';
 	?>	
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	.header{
			background: #5F9EA0;
			color: white;
			border-radius: 10px 10px 0px 0px;
			 text-align: center;
			 width: 40%;
			 border: 1px solid #B0C4DE;
			 padding: 20px;
			 margin-top: 20px;
			 height: 50px;

		}
		.input select{
				width: 99%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 16px;
				height: 40px;
				padding: 5px 10px;
				margin-top: 5px;
			}
		
		.log{
			
		}
		body{
			background: #f8f8ff;
			font-size: 120%;
			}
			form{
				border: 1px solid silver;
				background: white;
				padding: 20px;
				height: auto;
				width: 40%;
				border-radius: 0px 0px 10px 10px;

			}
			
			.input label {
				float: left;
				display: block;
				margin: 3px;
			}
			.jinput label{
				float: left;
				display: block;
				margin: 3px;
			}
			.winput label{
				float: left;
				display: block;
				margin: 3px;
			}
			.input input{
				width: 94%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 17px;
				height: 30px;
				padding: 5px 10px;
			}
			.jinput input{
				width: 94%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 17px;
				height: 30px;
				padding: 5px 10px;
			}
			.winput input{
				width: 94%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 17px;
				height: 30px;
				padding: 5px 10px;
			}
			.btn{
				background: #5F9EA0;
				color: white;
				border-radius: 5px;
				padding: 10px;
				margin-top: 10px;
				font-size: 15px;
			}
			.input span{
				width: 94%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 14px;
				height: 10px;
				padding: 5px 10px;
				
			}
			.jinput span{
				width: 94%;
				border-radius: 5px;
				border: 1px solid grey;
				font-size: 14px;
				height: 10px;
				padding: 5px 10px;
				margin-top: 20px;
			}
			.winput span{
				display: block;
				font-size: 15px;
				margin-left: 80;
				background-color: #2d2c87;
				color:#fff;
				margin-top: 4px;
				padding: 5px;
				width: 180px;
				left: 105%;
				top: 10px;
			}
			i{
				
				margin-left: 100%;
				position: relative;
				right: 30px;
				top: -30px;
				cursor: pointer;
			}
			.ivalid{
				color: red;
				font-size: 16px;
				
			}
			
		.valid:before {
			font-family: 'Font Awesome 5 Free';font-weight: 900;content: '\f00c';color: green;
		}
		.back{
				background: #5F9EA0;
				color: white;
				border-radius: 10px;
				margin-top: 15px;
				margin-left: 10px;
				
				cursor: pointer;
			}
			.refresh{
				background: green;
				color: white;
				border-radius: 5px;
				cursor: pointer;
			}
	</style>
</head>
<body>
	
<div class="log">
				
				<center>
	<div class="header">
		<h2>LOGIN FORM</h2>	
	</div>
</center>
<center>
	<form method="POST" action="logalumn.php">
		
		<div class="input">
			<label>USERNAME</label>
			<input type="text" name="username" placeholder="username" required >
			
		</div>
		<div class="input">
			<label>PASSWORD</label>
			<input type="password" name="password_1" placeholder="password">
		</div>	
		
		<div class="input">
			<button type="submit" class="btn" name="login" >LOGIN</button>
		</div>
		<p>Not yet a memeber? <label id="logn" style="text-decoration: none;">Sign up</label></p>
		
	</form>
</center>

				
			</div>
		
			
		
</body>
</html>