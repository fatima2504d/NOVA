<?php
include("config.php");

// DELETE USER
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM users WHERE id=$id");
}

$result = mysqli_query($conn, "SELECT * FROM users");
?>

<h2>Users</h2>

<table border="1">
<tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td>
        <a href="?delete=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>