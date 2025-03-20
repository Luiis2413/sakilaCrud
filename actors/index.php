<?php
include '../db_connect.php';

$sql = "SELECT * FROM actor";
$result = $mysqli->query($sql);

// Incluye el header
include '../header.php';
?>

<h1>Actors</h1>
<a href="create.php" class="btn btn-primary mb-3">Add New Actor</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['actor_id'] ?></td>
            <td><?= $row['first_name'] ?></td>
            <td><?= $row['last_name'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['actor_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete.php?id=<?= $row['actor_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php
// Incluye el footer
include '../footer.php';
?>