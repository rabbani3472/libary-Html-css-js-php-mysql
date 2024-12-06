<?php
include 'connect.php';

// Use quotes around the array key to avoid syntax errors
$prop_id = $_GET['prop_id'];

// Debugging: Check if $prop_id is set
if (isset($prop_id) && !empty($prop_id)) {
    echo $prop_id;

    // Use parameterized query to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM `books` WHERE `book_id` = ?");
    $stmt->bind_param("i", $prop_id); // "i" indicates integer type

    if ($stmt->execute()) {
        echo '<script LANGUAGE="JavaScript">
        window.alert("Book details removed successfully");
        window.location.href="dashlibrarian.php";
        </script>';
    } else {
        echo '<script LANGUAGE="JavaScript">
        window.alert("Error deleting book details");
        window.location.href="dashlibrarian.php";
        </script>';
    }

    $stmt->close();
} else {
    echo '<script LANGUAGE="JavaScript">
    window.alert("Invalid book ID");
    window.location.href="dashlibrarian.php";
    </script>';
}

$conn->close();
?>
