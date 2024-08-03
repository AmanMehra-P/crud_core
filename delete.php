<?php
require_once 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?msg=Record deleted successfully");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
