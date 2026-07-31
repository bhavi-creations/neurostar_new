<?php
include '../../db.connection/db_connection.php';

mysqli_set_charset($conn, "utf8mb4");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $student_id = isset($_POST['id']) ? intval($_POST['id']) : 0;

    $student_name = $_POST['student_name'] ?? '';
    $age = isset($_POST['age']) ? intval($_POST['age']) : 0;
    $student_group = $_POST['student_group'] ?? '';
    $department = $_POST['department'] ?? '';

    // Required fields validation
    if (empty($student_name) || empty($age) || empty($student_group) || empty($department)) {
        die("Error: Required fields missing");
    }

    // ================= UPDATE =================
    if ($student_id > 0) {

        $stmt = $conn->prepare("UPDATE students 
        SET student_name=?, age=?, student_group=?, department=?
        WHERE id=?");

        if (!$stmt) {
            die("SQL ERROR: " . $conn->error);
        }

        $stmt->bind_param(
            "sissi",
            $student_name,
            $age,
            $student_group,
            $department,
            $student_id
        );
    }

    // ================= INSERT =================
    else {

        $stmt = $conn->prepare("INSERT INTO students 
        (student_name, age, student_group, department, created_at)
        VALUES (?, ?, ?, ?, NOW())");

        if (!$stmt) {
            die("SQL ERROR: " . $conn->error);
        }

        $stmt->bind_param(
            "siss",
            $student_name,
            $age,
            $student_group,
            $department
        );
    }

    if ($stmt->execute()) {
        header("Location: add_student.php?success=" . ($student_id > 0 ? "updated" : "added"));
        exit();
    } else {
        die("EXECUTE ERROR: " . $stmt->error);
    }

    $stmt->close();
}

$conn->close();
?>