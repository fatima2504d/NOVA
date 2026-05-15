<?php
include("config.php");

// ADD
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $query = "INSERT INTO jewellery (name, category, price) 
              VALUES ('$name','$category','$price')";
    mysqli_query($conn, $query);
}

// DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM jewellery WHERE id=$id");
}

// FETCH
$result = mysqli_query($conn, "SELECT * FROM jewellery");
?>

<h2>Jewellery Management</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="category" placeholder="Category" required>
    <input type="number" name="price" placeholder="Price" required>
    <button name="add">Add</button>
</form>

<table border="1">
<tr>
    <th>ID</th><th>Name</th><th>Category</th><th>Price</th><th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['category'] ?></td>
    <td><?= $row['price'] ?></td>
    <td>
        <a href="?delete=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>