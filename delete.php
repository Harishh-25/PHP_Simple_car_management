<?php include "db.php";
$id = $
_
GET['id'];
$result = $conn->query("SELECT * FROM services WHERE id=$id");
$row = $result->fetch
_
assoc();
if ($
_
SERVER['REQUEST
_
METHOD'] == 'POST') {
$name = $
_
POST['customer
_
name'];
$contact = $
_
POST['contact
_
number'];
$car = $
_
POST['car
_
model'];
$type = $
_
POST['service
_
type'];
$date = $
_
POST['service
_
date'];
$status = $
_
POST['status'];
$sql = "UPDATE services SET
customer
name='$name'
,
_
contact
number='$contact'
,
_
car
model='$car'
,
_
service
_
type='$type'
,
service
date='$date'
,
_
status='$status'
WHERE id=$id";
$conn->query($sql);
header("Location: index.php");
}
?>
<form method="post">
<h2>Edit Booking</h2>
<input type="text" name="customer
_
name" value="<?= $row['customer
_
name'] ?>"
required><br>
<input type="text" name="contact
_
number" value="<?= $row['contact
_
number'] ?>"
required><br>
<input type="text" name="car
_
model" value="<?= $row['car
_
model'] ?>" required><br>
<input type="text" name="service
_
type" value="<?= $row['service
_
type'] ?>" required><br>
<input type="date" name="service
_
date" value="<?= $row['service
_
date'] ?>" required><br>
<select name="status">
<option <?= $row['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
<option <?= $row['status'] == 'Completed' ? 'selected' : '' ?>>Completed</option>
</select><br>
<button type="submit">Update Booking</button>
</form>
<a href="index.php">Back to List</a>
