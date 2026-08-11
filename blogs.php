<?php
include './db.connection/db_connection.php';

$service = isset($_GET['service']) ? trim($_GET['service']) : '';
$search = isset($_GET['q']) ? trim($_GET['q']) : '';

$sql = "SELECT id, slug, title, main_content, main_image, service, created_at FROM blogs";
$conditions = [];
$types = '';
$params = [];

if ($service !== '') {
    $conditions[] = "service = ?";
    $types .= 's';
    $params[] = $service;
}

if ($search !== '') {
    $conditions[] = "(title LIKE ? OR main_content LIKE ? OR service LIKE ?)";
    $types .= 'sss';
    $like = '%' . $search . '%';
    $params[] = $like;
    $params[] = $like;
    $params[] = $like;
}

if ($conditions) {
    $sql .= " WHERE " . implode(" AND ", $conditions);
}

$sql .= " ORDER BY created_at DESC";

$stmt = $conn->prepare($sql);
if ($types !== '') {
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();

$blogs = [];
while ($row = $result->fetch_assoc()) {
    $blogs[] = $row;
}

$serviceRows = $conn->query("SELECT DISTINCT service FROM blogs WHERE service IS NOT NULL AND service <> '' ORDER BY service ASC");
$services = [];
if ($serviceRows) {
    while ($row = $serviceRows->fetch_assoc()) {
        $services[] = $row['service'];
    }
}

function blog_excerpt($html, $limit = 120) {
    $text = trim(preg_replace('/\s+/', ' ', html_entity_decode(strip_tags($html))));
    if (mb_strlen($text) <= $limit) {
        return $text;
    }
    return mb_substr($text, 0, $limit) . '...';
}

include 'header.php';
?>

<section class="blogs_section_wrapper">
    <div class="blogs_section_hero py-5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb blogs_section_breadcrumb">
                    <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </nav>

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <h1 class="blogs_section_hero_title fw-bold">Health Insights & Articles</h1>
                    <p class="blogs_section_hero_text text-muted mb-4 fs-6">
                        Expert advice and tips to help you and your family live a healthier life.
                    </p>
                    <div class="row g-3 blogs_section_hero_stats">
                        <div class="col-md-4 col-6">
                            <div class="blogs_section_stat_card d-flex align-items-center p-2 rounded border bg-white shadow-sm">
                                <div class="blogs_section_stat_icon me-2 text-primary fs-3"><i class="bi bi-journal-text"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">100+</h6>
                                    <small class="text-muted" style="font-size: 11px;">Health Articles</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="blogs_section_stat_card d-flex align-items-center p-2 rounded border bg-white shadow-sm">
                                <div class="blogs_section_stat_icon me-2 text-primary fs-3"><i class="bi bi-person-badge"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">20+</h6>
                                    <small class="text-muted" style="font-size: 11px;">Medical Experts</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="blogs_section_stat_card d-flex align-items-center p-2 rounded border bg-white shadow-sm">
                                <div class="blogs_section_stat_icon me-2 text-primary fs-3"><i class="bi bi-people"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">50,000+</h6>
                                    <small class="text-muted" style="font-size: 11px;">Readers Every Month</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 text-center">
                    <img src="./assets/img/index-hospital-1.png" alt="Health Insights Hero" class="img-fluid blogs_section_hero_img">
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="blogs_section_category_filter d-flex flex-wrap gap-2 justify-content-start justify-content-lg-between bg-white p-3 rounded-3 shadow-sm border">
            <a class="btn blogs_section_cat_btn <?php echo $service === '' ? 'active' : ''; ?>" href="blogs.php">All Categories</a>
            <?php foreach ($services as $serviceItem): ?>
                <?php
                    $active = ($service === $serviceItem) ? 'active' : '';
                    $query = urlencode($serviceItem);
                ?>
                <a class="btn blogs_section_cat_btn <?php echo $active; ?>" href="blogs.php?service=<?php echo $query; ?>">
                    <?php echo htmlspecialchars($serviceItem); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container py-3">
        <div class="row g-4">
            <div class="col-lg-8 col-md-12">
                <div class="row g-4">
                    <?php if (!empty($blogs)): ?>
                        <?php foreach ($blogs as $index => $blog): ?>
                            <?php
                                $image = !empty($blog['main_image'])
                                    ? "admin/uploads/photos/" . rawurlencode($blog['main_image'])
                                    : "assets/images/blog-placeholder.png";
                                $blogLink = "fullblog.php?id=" . (!empty($blog['slug']) ? urlencode($blog['slug']) : (int)$blog['id']);
                                $date = !empty($blog['created_at']) ? date("M d, Y", strtotime($blog['created_at'])) : '';
                                $excerpt = blog_excerpt($blog['main_content'], 110);
                                $serviceLabel = !empty($blog['service']) ? $blog['service'] : 'Blog';
                            ?>
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="blogs_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                                    <a href="<?php echo $blogLink; ?>">
                                        <img src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" class="card-img-top blogs_section_card_img">
                                    </a>
                                    <div class="card-body d-flex flex-column p-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="badge bg-teal-subtle text-teal fw-semibold"><?php echo htmlspecialchars($serviceLabel); ?></span>
                                            <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i><?php echo htmlspecialchars($date); ?></small>
                                        </div>
                                        <h6 class="blogs_section_card_title fw-bold mb-2">
                                            <a href="<?php echo $blogLink; ?>" class="text-dark text-decoration-none"><?php echo htmlspecialchars($blog['title']); ?></a>
                                        </h6>
                                        <p class="blogs_section_card_text text-muted small mb-3"><?php echo htmlspecialchars($excerpt); ?></p>
                                        <a href="<?php echo $blogLink; ?>" class="blogs_section_readmore text-primary fw-semibold small text-decoration-none mt-auto">
                                            Read More <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                        <hr class="my-2">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/doc-thumb1.png" alt="Author" class="rounded-circle me-2" width="30" height="30">
                                            <div>
                                                <h7 class="fw-bold d-block mb-0" style="font-size: 12px;">Neurostar Team</h7>
                                                <small class="text-muted" style="font-size: 10px;">Medical Editorial</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12">
                            <div class="alert alert-light border shadow-sm mb-0">
                                No blog posts found.
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="blogs_section_sidebar_card p-4 rounded-3 bg-white border shadow-sm mb-4">
                    <h6 class="fw-bold mb-3">Search Articles</h6>
                    <form class="input-group" method="get" action="blogs.php">
                        <?php if ($service !== ''): ?>
                            <input type="hidden" name="service" value="<?php echo htmlspecialchars($service); ?>">
                        <?php endif; ?>
                        <input type="text" name="q" class="form-control bg-light" placeholder="Search for articles..." value="<?php echo htmlspecialchars($search); ?>">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>

                <div class="blogs_section_sidebar_card p-4 rounded-3 bg-white border shadow-sm mb-4">
                    <h6 class="fw-bold mb-3">Latest Articles</h6>
                    <div class="d-flex flex-column gap-3">
                        <?php foreach (array_slice($blogs, 0, 5) as $latest): ?>
                            <?php
                                $latestImage = !empty($latest['main_image'])
                                    ? "admin/uploads/photos/" . rawurlencode($latest['main_image'])
                                    : "assets/images/blog-placeholder.png";
                                $latestLink = "fullblog.php?id=" . (!empty($latest['slug']) ? urlencode($latest['slug']) : (int)$latest['id']);
                                $latestDate = !empty($latest['created_at']) ? date("M d, Y", strtotime($latest['created_at'])) : '';
                            ?>
                            <div class="d-flex align-items-center gap-3">
                                <a href="<?php echo $latestLink; ?>">
                                    <img src="<?php echo $latestImage; ?>" alt="<?php echo htmlspecialchars($latest['title']); ?>" class="rounded-3 object-fit-cover" width="60" height="60">
                                </a>
                                <div>
                                    <h7 class="fw-bold mb-1 d-block blogs_section_pop_title"><?php echo htmlspecialchars($latest['title']); ?></h7>
                                    <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i><?php echo htmlspecialchars($latestDate); ?></small>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="blogs_section_sidebar_card p-4 rounded-3 bg-white border shadow-sm mb-4">
                    <h6 class="fw-bold mb-3">Categories</h6>
                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                        <?php foreach ($services as $serviceItem): ?>
                            <li class="d-flex justify-content-between align-items-center small">
                                <span><?php echo htmlspecialchars($serviceItem); ?></span>
                                <span class="badge bg-light text-dark border rounded-pill">1</span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="blogs_section_cta_card p-4 rounded-3 text-white overflow-hidden position-relative">
                    <div class="row align-items-center">
                        <div class="col-12 position-relative z-1">
                            <h6 class="fw-bold text-dark mb-1">Need Expert Advice?</h6>
                            <p class="text-muted small mb-3">Talk to our specialists for personalized guidance.</p>
                            <a href="contactus.php" class="btn btn-primary btn-sm px-3 fw-semibold">Book an Appointment</a>
                        </div>
                        <!-- <div class="col-5 position-relative">
                            <img src="assets/images/doctor-cta-side.png" alt="Doctor Consultation" class="img-fluid position-absolute bottom-0 end-0" style="max-height: 130px;">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container my-5">
        <div class="blogs_section_newsletter_banner p-4 rounded-4 shadow-sm">
            <div class="row align-items-center g-3">
                <div class="col-lg-6 col-md-12 d-flex align-items-center">
                    <div class="blogs_section_newsletter_icon text-white bg-primary p-3 rounded-circle me-3 flex-shrink-0 d-flex align-items-center justify-content-center">
                        <i class="bi bi-envelope-open-fill fs-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Stay Updated with Our Health Insights</h5>
                        <p class="mb-0 text-muted small">Subscribe to our newsletter and get the latest health tips and updates.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <form class="input-group">
                        <input type="email" class="form-control bg-white py-2" placeholder="Enter your email address" required>
                        <button class="btn blogs_section_subscribe_btn text-white fw-bold px-4" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</section>

<?php
$stmt->close();
$conn->close();
include 'footer.php';
