<?php
// DB Connection
include '../../db.connection/db_connection.php';
$conn->set_charset("utf8mb4");

// Get Student ID from URL
$student_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($student_id <= 0) {
    echo "<script>alert('చెల్లని స్టూడెంట్ ID!'); window.location.href='students_list.php';</script>";
    exit;
}

// FETCH STUDENT DATA (మీ టేబుల్ స్ట్రక్చర్ ఆధారంగా సరిచేయబడింది)
$query = "SELECT student_name, age, student_group, department 
          FROM students 
          WHERE student_id = ?";

$stmt = $conn->prepare($query);

if ($stmt === false) {
    die("Database Query Error: " . $conn->error);
}

// Binding ID
$stmt->bind_param("i", $student_id);
$stmt->execute();
$stmt->bind_result(
    $student_name,
    $age,
    $student_group,
    $department
);

if (!$stmt->fetch()) {
    echo "<script>alert('విద్యార్థి వివరాలు లభించలేదు!'); window.location.href='students_list.php';</script>";
    exit;
}
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Student Details</title>

    <!-- Custom fonts and styles for SB Admin 2 -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <?php include 'navbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Student Details</h1>
                        <a href="students_list.php" class="btn btn-sm btn-secondary shadow-sm">
                            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Students List
                        </a>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <form id="editStudentForm" action="update_student.php" method="POST">

                                <input type="hidden" name="student_id" value="<?= $student_id ?>">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold">Student Name <span class="text-danger">*</span></label>
                                        <input type="text" name="student_name" class="form-control" value="<?= htmlspecialchars($student_name ?? '') ?>" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold">Age <span class="text-danger">*</span></label>
                                        <input type="number" name="age" class="form-control" value="<?= htmlspecialchars($age ?? '') ?>" min="1" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold">Group / Course <span class="text-danger">*</span></label>
                                        <input type="text" name="student_group" class="form-control" value="<?= htmlspecialchars($student_group ?? '') ?>" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="font-weight-bold">Department <span class="text-danger">*</span></label>
                                        <input type="text" name="department" class="form-control" value="<?= htmlspecialchars($department ?? '') ?>" required>
                                    </div>
                                </div>

                                <button type="submit" name="update_student" class="btn btn-success px-4 mt-2">
                                    <i class="fas fa-save mr-1"></i> Update Student
                                </button>
                                <a href="allStudent.php" class="btn btn-secondary px-4 mt-2">Cancel</a>

                            </form>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>© 2024 All Rights Reserved.</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php $conn->close(); ?>