<?php
include './db.connection/db_connection.php';

// Filter inputs
$department = isset($_GET['department']) ? trim($_GET['department']) : '';
$search = isset($_GET['q']) ? trim($_GET['q']) : '';

// Query to fetch students based on your exact SQL schema
$sql = "SELECT student_id, student_name, age, student_group, department, created_at FROM students";
$conditions = [];
$types = '';
$params = [];

if ($department !== '') {
    $conditions[] = "department = ?";
    $types .= 's';
    $params[] = $department;
}

if ($search !== '') {
    $conditions[] = "(student_name LIKE ? OR student_group LIKE ? OR department LIKE ?)";
    $types .= 'sss';
    $like = '%' . $search . '%';
    $params[] = $like;
    $params[] = $like;
    $params[] = $like;
}

if (!empty($conditions)) {
    $sql .= " WHERE " . implode(" AND ", $conditions);
}

$sql .= " ORDER BY student_id DESC";

$stmt = $conn->prepare($sql);

// Check if prepare() failed
if (!$stmt) {
    die("<div class='alert alert-danger m-4'><strong>Database Query Error:</strong> " . htmlspecialchars($conn->error) . "</div>");
}

if ($types !== '') {
    $stmt->bind_param($types, ...$params);
}

$stmt->execute();
$result = $stmt->get_result();

$students = [];
while ($row = $result->fetch_assoc()) {
    $students[] = $row;
}

// Fetch unique departments for category filter
$departmentRows = $conn->query("SELECT DISTINCT department FROM students WHERE department IS NOT NULL AND department <> '' ORDER BY department ASC");
$departments = [];
if ($departmentRows) {
    while ($row = $departmentRows->fetch_assoc()) {
        $departments[] = $row['department'];
    }
}

include 'header.php';
?>

<section class="blogs_section_wrapper">
    <!-- Hero Section -->
    <div class="blogs_section_hero py-5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb blogs_section_breadcrumb">
                    <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Students</li>
                </ol>
            </nav>

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <h1 class="blogs_section_hero_title fw-bold">Student Directory & Profiles</h1>
                    <p class="blogs_section_hero_text text-muted mb-4 fs-6">
                        Explore our enrolled students, their departments, academic groups, and details.
                    </p>
                    <div class="row g-3 blogs_section_hero_stats">
                        <div class="col-4">
                            <div class="blogs_section_stat_card d-flex align-items-center p-2 rounded border bg-white shadow-sm">
                                <div class="blogs_section_stat_icon me-2 text-primary fs-3"><i class="bi bi-people-fill"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">500+</h6>
                                    <small class="text-muted" style="font-size: 11px;">Active Students</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="blogs_section_stat_card d-flex align-items-center p-2 rounded border bg-white shadow-sm">
                                <div class="blogs_section_stat_icon me-2 text-primary fs-3"><i class="bi bi-building"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">10+</h6>
                                    <small class="text-muted" style="font-size: 11px;">Departments</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="blogs_section_stat_card d-flex align-items-center p-2 rounded border bg-white shadow-sm">
                                <div class="blogs_section_stat_icon me-2 text-primary fs-3"><i class="bi bi-award-fill"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">95%</h6>
                                    <small class="text-muted" style="font-size: 11px;">Success Rate</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 text-center">
                    <img src="assets/images/student-hero-banner.png" alt="Student Portal Hero" class="img-fluid blogs_section_hero_img">
                </div>
            </div>
        </div>
    </div>

    <!-- Department Category Filter -->
    <div class="container my-4">
        <div class="blogs_section_category_filter d-flex flex-wrap gap-2 justify-content-start justify-content-lg-between bg-white p-3 rounded-3 shadow-sm border">
            <a class="btn blogs_section_cat_btn <?php echo $department === '' ? 'active' : ''; ?>" href="students.php">All Departments</a>
            <?php foreach ($departments as $deptItem): ?>
                <?php
                    $active = ($department === $deptItem) ? 'active' : '';
                    $query = urlencode($deptItem);
                ?>
                <a class="btn blogs_section_cat_btn <?php echo $active; ?>" href="students.php?department=<?php echo $query; ?>">
                    <?php echo htmlspecialchars($deptItem); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="container py-3">
        <div class="row g-4">
            <!-- Student Cards List -->
            <div class="col-lg-8 col-md-12">
                <div class="row g-4">
                    <?php if (!empty($students)): ?>
                        <?php foreach ($students as $student): ?>
                            <?php
                                $studentLink = "fullstudent.php?id=" . (int)$student['student_id'];
                                $regDate = !empty($student['created_at']) ? date("M d, Y", strtotime($student['created_at'])) : '';
                                $groupLabel = !empty($student['student_group']) ? $student['student_group'] : 'General';
                                $deptLabel = !empty($student['department']) ? $student['department'] : 'N/A';
                                $initial = strtoupper(substr($student['student_name'], 0, 1));
                            ?>
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="blogs_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                                    <!-- Default Avatar Representation since profile_image is removed -->
                                    <a href="<?php echo $studentLink; ?>" class="bg-light d-flex align-items-center justify-content-center text-decoration-none" style="height: 140px;">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 70px; height: 70px; font-size: 28px; font-weight: bold;">
                                            <?php echo $initial; ?>
                                        </div>
                                    </a>
                                    <div class="card-body d-flex flex-column p-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="badge bg-primary-subtle text-primary fw-semibold"><?php echo htmlspecialchars($deptLabel); ?></span>
                                            <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i><?php echo htmlspecialchars($regDate); ?></small>
                                        </div>
                                        <h6 class="blogs_section_card_title fw-bold mb-1">
                                            <a href="<?php echo $studentLink; ?>" class="text-dark text-decoration-none"><?php echo htmlspecialchars($student['student_name']); ?></a>
                                        </h6>
                                        <p class="blogs_section_card_text text-muted small mb-2">
                                            <strong>Group:</strong> <?php echo htmlspecialchars($groupLabel); ?><br>
                                            <strong>Age:</strong> <?php echo htmlspecialchars($student['age']); ?> Yrs
                                        </p>
                                        <a href="<?php echo $studentLink; ?>" class="blogs_section_readmore text-primary fw-semibold small text-decoration-none mt-auto">
                                            View Profile <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                        <hr class="my-2">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <h7 class="fw-bold d-block mb-0" style="font-size: 12px;">ID: #<?php echo $student['student_id']; ?></h7>
                                                <small class="text-muted" style="font-size: 10px;">Verified Student</small>
                                            </div>
                                            <span class="badge bg-light text-secondary border">Group: <?php echo htmlspecialchars($groupLabel); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12">
                            <div class="alert alert-light border shadow-sm mb-0 text-center">
                                No students found matching your criteria.
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-12">
                <!-- Search Box -->
                <div class="blogs_section_sidebar_card p-4 rounded-3 bg-white border shadow-sm mb-4">
                    <h6 class="fw-bold mb-3">Search Students</h6>
                    <form class="input-group" method="get" action="students.php">
                        <?php if ($department !== ''): ?>
                            <input type="hidden" name="department" value="<?php echo htmlspecialchars($department); ?>">
                        <?php endif; ?>
                        <input type="text" name="q" class="form-control bg-light" placeholder="Search by name, group, dept..." value="<?php echo htmlspecialchars($search); ?>">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>

                <!-- Recently Registered Students -->
                <div class="blogs_section_sidebar_card p-4 rounded-3 bg-white border shadow-sm mb-4">
                    <h6 class="fw-bold mb-3">Recently Joined Students</h6>
                    <div class="d-flex flex-column gap-3">
                        <?php foreach (array_slice($students, 0, 5) as $latest): ?>
                            <?php
                                $latestLink = "fullstudent.php?id=" . (int)$latest['student_id'];
                                $latestDate = !empty($latest['created_at']) ? date("M d, Y", strtotime($latest['created_at'])) : '';
                                $latestInitial = strtoupper(substr($latest['student_name'], 0, 1));
                            ?>
                            <div class="d-flex align-items-center gap-3">
                                <a href="<?php echo $latestLink; ?>" class="text-decoration-none">
                                    <div class="bg-primary text-white rounded-3 d-flex align-items-center justify-content-center fw-bold" style="width: 50px; height: 50px; font-size: 18px;">
                                        <?php echo $latestInitial; ?>
                                    </div>
                                </a>
                                <div>
                                    <h7 class="fw-bold mb-1 d-block blogs_section_pop_title">
                                        <a href="<?php echo $latestLink; ?>" class="text-dark text-decoration-none"><?php echo htmlspecialchars($latest['student_name']); ?></a>
                                    </h7>
                                    <small class="text-muted d-block" style="font-size: 11px;"><?php echo htmlspecialchars($latest['department']); ?></small>
                                    <small class="text-muted" style="font-size: 10px;"><i class="bi bi-calendar3 me-1"></i><?php echo htmlspecialchars($latestDate); ?></small>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Departments List -->
                <div class="blogs_section_sidebar_card p-4 rounded-3 bg-white border shadow-sm mb-4">
                    <h6 class="fw-bold mb-3">Departments</h6>
                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                        <?php foreach ($departments as $deptItem): ?>
                            <li class="d-flex justify-content-between align-items-center small">
                                <span><?php echo htmlspecialchars($deptItem); ?></span>
                                <span class="badge bg-light text-dark border rounded-pill">Active</span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Call to Action Card -->
                <div class="blogs_section_cta_card p-4 rounded-3 text-white overflow-hidden position-relative" style="background-color: #f8f9fa;">
                    <div class="row align-items-center">
                        <div class="col-7 position-relative z-1">
                            <h6 class="fw-bold text-dark mb-1">New Student Registration?</h6>
                            <p class="text-muted small mb-3">Enroll now to join our academic programs.</p>
                            <a href="add_student.php" class="btn btn-primary btn-sm px-3 fw-semibold">Register Student</a>
                        </div>
                        <div class="col-5 position-relative">
                            <img src="assets/images/student-cta-side.png" alt="Student Admission" class="img-fluid position-absolute bottom-0 end-0" style="max-height: 130px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter / Updates Banner -->
    <div class="container my-5">
        <div class="blogs_section_newsletter_banner p-4 rounded-4 shadow-sm">
            <div class="row align-items-center g-3">
                <div class="col-lg-6 col-md-12 d-flex align-items-center">
                    <div class="blogs_section_newsletter_icon text-white bg-primary p-3 rounded-circle me-3 flex-shrink-0 d-flex align-items-center justify-content-center">
                        <i class="bi bi-envelope-open-fill fs-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Stay Updated with Campus News</h5>
                        <p class="mb-0 text-muted small">Subscribe to get the latest student announcements and exam schedules.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <form class="input-group">
                        <input type="email" class="form-control bg-white py-2" placeholder="Enter student/parent email address" required>
                        <button class="btn blogs_section_subscribe_btn text-white fw-bold px-4" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$stmt->close();
$conn->close();
include 'footer.php';
?>