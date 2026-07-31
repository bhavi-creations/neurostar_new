<?php
// Database connection
include '../../db.connection/db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Apple Dental Care - Students List</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .card-custom {
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border: 1px solid #e3e6f0;
        }
        .student-info p {
            margin-bottom: 8px;
            color: #333;
            font-size: 15px;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'navbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h2 mb-0 text-info"> All Students</h2>
                        <a href="add_student.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-user-plus fa-sm text-white-50"></i> Add Student
                        </a>
                    </div>

                    <div class="row">
                        <?php
                        // Check DB connection
                        if (!$conn) {
                            die("<div class='col-12'><div class='alert alert-danger'>Database Connection Failed: " . mysqli_connect_error() . "</div></div>");
                        }

                        // Fetch all columns to avoid "Unknown column" errors
                        $sql = "SELECT * FROM students";
                        $result = $conn->query($sql);

                        if (!$result) {
                            // Display SQL Error if query fails
                            echo "<div class='col-12'><div class='alert alert-danger'>SQL Query Error: " . $conn->error . "</div></div>";
                        } else if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Automatically detect primary key column if 'id' is named differently (like student_id)
                                $student_id = isset($row['id']) ? $row['id'] : (isset($row['student_id']) ? $row['student_id'] : reset($row));
                                $student_name = isset($row['student_name']) ? $row['student_name'] : (isset($row['name']) ? $row['name'] : '');
                                $age = isset($row['age']) ? $row['age'] : '';
                                $group = isset($row['student_group']) ? $row['student_group'] : (isset($row['group']) ? $row['group'] : '');
                                $department = isset($row['department']) ? $row['department'] : '';
                                ?>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card card-custom">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold text-primary mb-3">
                                                <?php echo htmlspecialchars($student_name); ?>
                                            </h5>
                                            
                                            <div class="student-info mb-3">
                                                <p><strong>Age:</strong> <?php echo htmlspecialchars($age); ?></p>
                                                <p><strong>Group:</strong> <?php echo htmlspecialchars($group); ?></p>
                                                <p><strong>Department:</strong> <?php echo htmlspecialchars($department); ?></p>
                                            </div>

                                            <div class="row justify-content-between pt-3 border-top mx-0">
                                                <a href="edit_student.php?id=<?php echo $student_id; ?>" class="btn btn-warning btn-sm col-5">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="delete_student.php?id=<?php echo $student_id; ?>" class="btn btn-danger btn-sm col-5" onclick="return confirm('Are you sure you want to delete this student?');">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<div class='col-12'><div class='alert alert-warning text-center'>No students found in the database.</div></div>";
                        }

                        $conn->close();
                        ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <div class="footer-widget__copyright">
                            <p class="mini_text" style="color:black"> ©2024 Krishnadentacure . All Rights Reserved. Designed &
                                Developed by <a href="https://bhavicreations.com/" target="_blank" style="text-decoration: none;color:black">Bhavi
                                    Creations</a></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>