<?php
// DB Connection సరి చూసుకోండి
include '../../db.connection/db_connection.php';
$conn->set_charset("utf8mb4");

// Form submit అయిందో లేదో తనిఖీ చేయడం
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_student'])) {

    // POST ద్వారా వచ్చిన డేటాను అందుకోవడం మరియు సెక్యూరిటీ కోసం sanitize చేయడం
    $student_id    = isset($_POST['student_id']) ? intval($_POST['student_id']) : 0;
    $student_name  = isset($_POST['student_name']) ? trim($_POST['student_name']) : '';
    $age           = isset($_POST['age']) ? intval($_POST['age']) : 0;
    $student_group = isset($_POST['student_group']) ? trim($_POST['student_group']) : '';
    $department    = isset($_POST['department']) ? trim($_POST['department']) : '';

    // విలువల తనిఖీ (Validation)
    if ($student_id <= 0 || empty($student_name) || $age <= 0 || empty($student_group) || empty($department)) {
        echo "<script>
                alert('please fill the details properly!');
                window.history.back();
              </script>";
        exit;
    }

    // UPDATE Query తయారుచేయడం
    $query = "UPDATE students 
              SET student_name = ?, age = ?, student_group = ?, department = ? 
              WHERE student_id = ?";

    $stmt = $conn->prepare($query);

    if ($stmt === false) {
        die("Database Query Error: " . $conn->error);
    }

    // Parameters బిండ్ చేయడం ("sissi" -> string, integer, string, string, integer)
    $stmt->bind_param("sissi", $student_name, $age, $student_group, $department, $student_id);

    // క్వెరీ ఎగ్జిక్యూట్ చేయడం
    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();

        // విజయం సాధిస్తే మెసేజ్ చూపిస్తూ List పేజీకి పంపడం
        echo "<script>
                alert('Students updated successfully!');
                window.location.href = 'allStudent.php';
              </script>";
        exit;
    } else {
        $error_message = $stmt->error;
        $stmt->close();
        $conn->close();

        echo "<script>
                alert('Student update failed: " . addslashes($error_message) . "');
                window.history.back();
              </script>";
        exit;
    }

} else {
    // ఒకవేళ డైరెక్ట్‌గా ఈ పేజీకి వస్తే విద్యార్థుల జాబితాకు రీడైరెక్ట్ చేయడం
    header("Location: allStudent.php");
    exit;
}
?>