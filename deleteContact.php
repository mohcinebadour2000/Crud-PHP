<?php
include 'connectDatabase.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM contacts WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Contact deleted successfully";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
    header("Location: listContacts.php");
}
?>
