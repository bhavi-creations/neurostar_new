<?php
include '../../db.connection/db_connection.php'; // DB connection

$edit_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$student_name = '';
$age = '';
$student_group = '';
$department = '';

// Fetch data for editing
if ($edit_id > 0) {
    $stmt = $conn->prepare("SELECT student_name, age, student_group, department FROM students WHERE id = ?");
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $stmt->bind_result($student_name, $age, $student_group, $department);
    $stmt->fetch();
    $stmt->close();
}

// Fetch all students
$all_students = $conn->query("SELECT * FROM students ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $edit_id > 0 ? 'Update Student' : 'Add Student' ?> - Admin Dashboard</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">

<div id="wrapper">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- Topbar -->
            <?php include 'navbar.php'; ?>
            <!-- End of Topbar -->

            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800"><?= $edit_id > 0 ? 'Update Student' : 'Add Student' ?></h1>

                <!-- Success Message -->
                <?php if (isset($_GET['success'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $_GET['success'] == 'added' ? 'Student details added successfully!' : 'Student details updated successfully!' ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <!-- Student Form -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success"><?= $edit_id > 0 ? 'Update Student' : 'Add Student' ?></h6>
                    </div>
                    <div class="card-body">
                        <form action="save_student.php" method="post">
                            <input type="hidden" name="id" value="<?= $edit_id ?>">
                            
                            <!-- Student Name -->
                            <div class="mb-3">
                                <label class="form-label">Student Name</label>
                                <input type="text" name="student_name" class="form-control" placeholder="Enter Student Name"
                                       value="<?= htmlspecialchars($student_name) ?>" required>
                            </div>

                            <!-- Age -->
                            <div class="mb-3">
                                <label class="form-label">Age</label>
                                <input type="number" name="age" class="form-control" placeholder="Enter Age"
                                       value="<?= htmlspecialchars($age) ?>" required>
                            </div>

                            <!-- Group -->
                            <div class="mb-3">
                                <label class="form-label">Group</label>
                                <input type="text" name="student_group" class="form-control" placeholder="Enter Group (e.g. MPC, BiPC)"
                                       value="<?= htmlspecialchars($student_group) ?>" required>
                            </div>

                            <!-- Department -->
                            <div class="mb-3">
                                <label class="form-label">Department</label>
                                <input type="text" name="department" class="form-control" placeholder="Enter Department"
                                       value="<?= htmlspecialchars($department) ?>" required>
                            </div>

                            <button type="reset" class="btn btn-danger">Clear</button>
                            <button type="submit" class="btn btn-success"><?= $edit_id > 0 ? 'Update' : 'Add' ?></button>
                        </form>
                    </div>
                </div>

                <!-- All Students Table -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All Students</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Age</th>
                                    <th>Group</th>
                                    <th>Department</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if ($all_students && $all_students->num_rows > 0): ?>
                                    <?php while($row = $all_students->fetch_assoc()): ?>
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= htmlspecialchars($row['student_name']) ?></td>
                                            <td><?= htmlspecialchars($row['age']) ?></td>
                                            <td><?= htmlspecialchars($row['student_group']) ?></td>
                                            <td><?= htmlspecialchars($row['department']) ?></td>
                                            <td><?= $row['created_at'] ?></td>
                                            <td>
                                                <a href="add_student.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7" class="text-center">No student records found.</td>
                                    </tr>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto text-center">
                <span>© <?= date('Y') ?> NeuroStar. All Rights Reserved.</span>
            </div>
        </footer>

    </div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>

</body>
</html>