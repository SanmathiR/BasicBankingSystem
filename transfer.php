<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/bank4.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#decd5f;
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#d0e81c;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #c91aaf;
		font-size:17px;
		font-weight:bold;
		background:#26fff4;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="sunny"){
				 var arr=["Harish","chandana","shreyas","archana","niharika","sushmitha","priya"];
				 }
				 else if(a==="Harish"){
					var arr=["sunny","chandana","shreyas","archana","niharika","sushmitha","priya"];
				}
				else if(a==="chandana"){
					var arr=["sunny","Harish","shreyas","archana","niharika","sushmitha","priya"];
				}
				else if(a==="shreyas"){
					var arr=["sunny","Harish","chandana","archana","niharika","sushmitha","priya"];
				 }
				 else if(a==="archana"){
					var arr=["sunny","Harish","chandana","shreyas","niharika","sushmitha","priya"];
				 }
				 else if(a==="niharika"){
					var arr=["sunny","Harish","chandana","shreyas","archana","sushmitha","priya"];
				 }
				 else if(a==="sushmitha"){
					var arr=["sunny","Harish","chandana","shreyas","archana","niharika","priya"];
				 }
				 else if(a==="priya"){
					var arr=["sunny","Harish","chandana","shreyas","archana","niharika","sushmitha"];
				 }
				 
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#57ff47;text-shadow: 1.5px 2px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="sunny">sunny</option>
			<option value="Harish">Harish</option>
			<option value="chandana">chandana</option>
			<option value="shreyas">shreyas</option>
			<option value="archana">archana</option>
			<option value="niharika">niharika</option>
			<option value="sushmitha">sushmitha</option>
			<option value="priya">priya</option>
			
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>