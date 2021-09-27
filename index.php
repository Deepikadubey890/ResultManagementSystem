<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Online Result Management</title>
</head>

<body>
	<center>
		<marquee behavior="scroll" style="color: #FFF; font-size:40px; background-color:red;">GOVERNMENT RESULT HAS BEEN ANNOUNCED!!!</marquee>
		<div class="txt">Online Result Management </div>
		<div class="content">
			<div class="content2" style="height: 45%">
				<div class="max">Input Panel</div>
				<!-- ADDDING FORM-->
				<form action="result.php" method="post"><br>
					<input type="text" name="roll" placeholder="Roll Number" required><br /><br><br>

					<select id="class" name="class">
						<option value="6">Six</option>
						<option value="7">Seven</option>
						<option value="8">Eight</option>
						<option value="9">Nine</option>
						<option value="10">Ten</option>
					</select>
					<br /><br><br>

					<input type="submit" name="" value="Submit">
				</form>

			</div>
		</div>
	</center>
</body>