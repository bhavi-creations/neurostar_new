<?php
// Database connection
include '../../db.connection/db_connection.php';

if (isset($_GET['id'])) {
    $student_id = intval($_GET['id']);

    if ($student_id <= 0) {
        echo "<script>alert('చెల్లని స్టూడెంట్ ID!'); window.location.href='allStudent.php';</script>";
        exit;
    }

    // Delete student from database using student_id
    $stmt = $conn->prepare("DELETE FROM students WHERE student_id = ?");
    $stmt->bind_param("i", $student_id);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        
        // Redirect after successful deletion with alert
        echo "<script>
                alert('విద్యార్థి వివరాలు విజయవంతంగా తొలగించబడ్డాయి!');
                window.location.href = 'allStudent.php';
              </script>";
        exit;
    } else {
        $error_message = $stmt->error;
        $stmt->close();
        $conn->close();
        die("Error deleting student record: " . $error_message);
    }
} else {
    // No ID provided, redirect back
    $conn->close();
    header("Location: allStudent.php");
    exit;
}
?>