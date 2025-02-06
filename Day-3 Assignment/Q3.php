<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "student_details";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add Student
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date_of_birth = $_POST['date_of_birth'];

    $sql = "INSERT INTO students (first_name, last_name, email, phone, date_of_birth)
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$date_of_birth')";

    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update Student
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date_of_birth = $_POST['date_of_birth'];

    $sql = "UPDATE students SET 
                first_name='$first_name',
                last_name='$last_name',
                email='$email',
                phone='$phone',
                date_of_birth='$date_of_birth' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Student updated successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete Student
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM students WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully<br>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Fetch Students for View
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>

<h2>Student Management System</h2>

<!-- Add New Student Form -->
<h3>Add New Student</h3>
<form method="POST" action="" class="form">
    First Name: <input type="text" name="first_name" required><br>
    Last Name: <input type="text" name="last_name" required><br>
    Email: <input type="email" name="email" required><br>
    Phone: <input type="text" name="phone"><br>
    Date of Birth: <input type="date" name="date_of_birth"><br>
    <input type="submit" name="add" value="Add Student">
</form>

<hr>

<!-- Update Existing Student -->
<?php
if (isset($_GET['update_id'])) {
    $id = $_GET['update_id'];
    $sql = "SELECT * FROM students WHERE id=$id";
    $result = $conn->query($sql);
    $student = $result->fetch_assoc();
?>

<h3>Update Student</h3>
<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
    First Name: <input type="text" name="first_name" value="<?php echo $student['first_name']; ?>" required><br>
    Last Name: <input type="text" name="last_name" value="<?php echo $student['last_name']; ?>" required><br>
    Email: <input type="email" name="email" value="<?php echo $student['email']; ?>" required><br>
    Phone: <input type="text" name="phone" value="<?php echo $student['phone']; ?>"><br>
    Date of Birth: <input type="date" name="date_of_birth" value="<?php echo $student['date_of_birth']; ?>"><br>
    <input type="submit" name="update" value="Update Student">
</form>

<hr>
<?php } ?>

<!-- View All Students -->
<h3>All Students</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date of Birth</th>
        <th>Actions</th>
    </tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["first_name"] . "</td>
                <td>" . $row["last_name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["date_of_birth"] . "</td>
                <td>
                    <a href='?update_id=" . $row["id"] . "'>Edit</a> | 
                    <a href='?delete_id=" . $row["id"] . "'>Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No students found</td></tr>";
}
?>

</table>

</body>
</html>

<?php $conn->close(); ?>
