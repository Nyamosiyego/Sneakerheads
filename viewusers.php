<!DOCTYPE html>
<html>
	<head>
		<title>CHECK USERS</title>
		<link rel="stylesheet" href="CheckUsers.css">
	</head>
	<body>
		<h1>LIST OF ALL REGISTERED USERS</h1>
		<table class="table">
			<thead>
				<th>Email address</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Mobile Number</th>
				<th>Username</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
				require_once("newUsers.php");
				foreach($result as $key =>$value){
					?>
					<tr>
						<td><?php echo $value["Email"] ?></td>
						<td><?php echo $value["firstname"] ?></td>
						<td><?php echo $value["lastname"] ?></td>
						<td><?php echo $value["MobileNo"] ?></td>
						<td><?php echo $value["Username"] ?></td>
						<td><a href =newUsers.php?edit="<?php echo $value["Email"] ?>">EDIT</a></td>
					</tr>
					<?php

				}
				?>
			</tbody>
			
		</table>
	</body>