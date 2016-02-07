<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("../data_model/model.php");
$model = new Database_Reader;

$registrations = $model->get_all_registrations();

var_dump($registrations);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Registrations</title>
</head>
<body>
	<section class="container">
		<h1>Hello Admin!</h1>
		<p>Please view your registrations below.</p>
		<div id="registrationsarea">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Emergency Contact</th>
						<th>Has Contacts</th>
						<th>Has Power Wheelchair</th>
						<th>Has Manual Wheelchair</th>
						<th>Has Scooter</th>
						<th>Has Cane</th>
						<th>Has Walker</th>
						<th>Other Assistive Devices</th>
						<th>Needs Transfer Assistance</th>
						<th>Other Disabilities</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($registrations as $r): ?>
						<?php //var_dump($r); ?>
						<tr>
							<td><?php echo $r{"ID"}; ?></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</section>
</body>
</html>