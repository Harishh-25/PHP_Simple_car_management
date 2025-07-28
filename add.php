<?php include "db.php";
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
if ($name && $contact && $car && $type && $date) {
$sql = "INSERT INTO services (customer
name, contact
number, car
model, service
_
_
_
_
service
_
date)
VALUES ('$name'
,
'$contact'
,
'$car'
,
'$type'
,
'$date')";
$conn->query($sql);
header("Location: index.php");
} else {
type,
echo "All fields are required.
";
}
}
?>
<form method="post" action="">
<h2>Add Service Booking</h2>
<input type="text" name="customer
_
name" placeholder="Customer Name" required><br>
<input type="text" name="contact
_
number" placeholder="Contact Number" required><br>
<input type="text" name="car
_
model" placeholder="Car Model" required><br>
<input type="text" name="service
_
type" placeholder="Service Type (e.g., Oil Change)"
required><br>
<input type="date" name="service
_
date" required><br>
<button type="submit">Add Booking</button>
</form>
<a href="index.php">Back to List</a>
