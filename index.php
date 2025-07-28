<?php include "db.php";
$result = $conn->query("SELECT * FROM services");
?>
<h2>Car Service Bookings</h2>
<a href="add.php">+ Add New Booking</a>
<table border="1" cellpadding="8">
<tr>
<th>ID</th><th>Customer</th><th>Contact</th><th>Car Model</th>
<th>Service Type</th><th>Date</th><th>Status</th><th>Actions</th>
</tr>
<?php while($row = $result->fetch
_
assoc()): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['customer
_
name'] ?></td>
<td><?= $row['contact
_
number'] ?></td>
<td><?= $row['car
_
model'] ?></td>
<td><?= $row['service
_
type'] ?></td>
<td><?= $row['service
_
date'] ?></td>
<td><?= $row['status'] ?></td>
<td>
<a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
<a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this
booking?');">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>
