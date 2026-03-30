<?php
session_start();


if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}


$error_msg = '';
$success_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login_btn'])) {
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
       
        if ($email === 'student@philtech.edu' && $password === 'demo123') {
            $_SESSION['logged_in'] = true;
            $_SESSION['name'] = 'Alex Johnson';
            $_SESSION['email'] = $email;
            $success_msg = 'Welcome back! You are now logged in.';
        } else {
            $error_msg = 'Invalid email or password. Try student@philtech.edu / demo123';
        }
    } elseif (isset($_POST['register_btn'])) {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        if ($name && $email && $password) {
            $_SESSION['logged_in'] = true;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $success_msg = 'Registration successful! Welcome to Philtech.';
        } else {
            $error_msg = 'Please fill all fields.';
        }
    }
    
    if ($success_msg) {
        $_SESSION['flash'] = ['type' => 'success', 'msg' => $success_msg];
    } elseif ($error_msg) {
        $_SESSION['flash'] = ['type' => 'error', 'msg' => $error_msg];
    }
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}


$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
$user_name = $logged_in ? ($_SESSION['name'] ?? 'User') : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Philtech | Enrollment Application – Start Your Journey</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="service_sample.css">
</head>
<body>

<header>
    <a href="sample.php" class="logo">PHILTECH</a>
    <nav>
        <a href="sample.php">Home</a>
        <a href="about_sample.php">About</a>
        <a href="service_sample.php">Services</a>
        <a href="contact_sample.php">Contact</a>
    </nav>
    <div class="user-auth">
        <?php if ($logged_in): ?>
        <div class="profile-box">
            <div class="avatar-circle"><?= strtoupper(substr($user_name, 0, 1)) ?></div>
            <div class="dropdown">
                <a href="#">My Account</a>
                <a href="?logout=1">Sign Out</a>
            </div>
        </div>
        <?php else: ?>
        <button type="button" class="login-btn-modal">Login</button>
        <?php endif; ?>
    </div>
</header>


<div class="hero-wrapper">
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-badge">✨ Since 2012 — Excellence in education</div>
            <h1>Welcome to Philtech<br>Empowering students with world-class education</h1>
            <p>Innovative learning experiences. Join us in shaping tomorrow's leaders through excellence in education and commitment to student success.</p>
            <div class="btn-group">
                <a href="#enrollProcess" class="btn-primary">Get Started Today <i class='bx bx-right-arrow-alt'></i></a>
                <a href="#" class="btn-outline">Learn More</a>
            </div>
            <div class="collab-row">
                <i class='bx bxs-group'></i>
                <span>👩‍🎓👨‍🎓📚 Students studying · collaborative learning</span>
            </div>
        </div>
        <div class="hero-image-card">
            <img class="enrollment-img" src="PHOTO ENROLL.jpg" alt="Enrollment Open - Humanities, Accountancy, Business, Social Sciences, ICT, Economics">
        </div>
    </div>
</div>


<div class="stats-section">
    <div class="stats-container">
        <div class="stat-item"><div class="stat-number">10,000+</div><div class="stat-label">Students Enrolled</div></div>
        <div class="stat-item"><div class="stat-number">500+</div><div class="stat-label">Expert Faculty</div></div>
        <div class="stat-item"><div class="stat-number">50+</div><div class="stat-label">Programs Offered</div></div>
        <div class="stat-item"><div class="stat-number">95%</div><div class="stat-label">Placement Rate</div></div>
    </div>
</div>


<div class="enroll-process" id="enrollProcess">
    <h2 class="section-title">Enrollment Application</h2>
    <p class="section-subtitle">Take the first step towards your educational journey at Philtech</p>
    <div class="process-steps" id="process-steps">
        <div class="step-card"><div class="step-num">1</div><h3>Complete Application</h3><p>Fill out the enrollment form with your information</p></div>
        <div class="step-card"><div class="step-num">2</div><h3>Submit Documents</h3><p>Upload required academic and identification documents</p></div>
        <div class="step-card"><div class="step-num">3</div><h3>Get Confirmed</h3><p>Receive confirmation and start your journey</p></div>
    </div>
    <div style="margin-top: 40px;">
        <?php if (!$logged_in): ?>
            <button class="btn-primary login-btn-modal" id="btn-primary login-btn-modal" style="background:#ffb347;">Apply Now <i class='bx bxs-pencil'></i></button>
        <?php else: ?>
            <a href="#" class="btn-primary" style="background:#ffb347;">Continue Application →</a>
        <?php endif; ?>
    </div>
</div>


<div class="features-section">
    <h2 class="section-title">Excellence in Education</h2>
    <p class="section-subtitle">At Philtech, we're committed to providing exceptional educational experiences that prepare students for success.</p>
    <div class="features-grid">
        <div class="feature-card"><div class="feature-icon">📊</div><h3>ABM</h3><p>Accountancy, Business & Management with real-world simulations.</p></div>
        <div class="feature-card"><div class="feature-icon">💻</div><h3>ICT</h3><p>Information Computer Technology · Programming & networking.</p></div>
        <div class="feature-card"><div class="feature-icon">🍳</div><h3>Home Economics</h3><p>Practical skills for livelihood & entrepreneurship.</p></div>
        <div class="feature-card"><div class="feature-icon">🍳</div><h3>HUMSS</h3><p>Humanities & Social Sciences · critical thinking for leaders.</p></div>
        <div class="feature-card"><div class="feature-icon">🎓</div><h3>BSOA</h3><p>Office Addministration .</p></div>
        <div class="feature-card"><div class="feature-icon">🎓</div><h3>BSCS & BTVTED</h3><p>Computer Science & Technical Teacher Education.</p></div>
    </div>
</div>


<div class="cta-section">
    <h2>Ready to Start Your Journey?</h2>
    <p>Join thousands of students who have transformed their lives through education at Philtech.</p>
    <a href="#" class="btn-apply">Apply Now <i class='bx bxs-paper-plane'></i></a>
</div>


<footer>
    <div class="footer-content">
        <div class="footer-col"><h4>Philtech</h4><p>Empowering students with quality education and innovative learning experiences. Building tomorrow's leaders through excellence in education.</p></div>
        <div class="footer-col"><h4>Quick Links</h4><a href="#">Home</a><a href="#">About Us</a><a href="#">Enrollment</a><a href="#">Contact</a></div>
        <div class="footer-col"><h4>Contact Info</h4><p><i class='bx bx-map'></i> 📍 2nd Floor CRDM Building, Governors Drive, Madera, GMA, CAVITE</p><p><i class='bx bx-phone'></i> 📞 (046) 4877521 / 0997 224 0222</p><p><i class='bx bx-envelope'></i> ✉️ info@philtech.edu</p></div>
    </div>
    <div class="footer-bottom"><p>© 2026 Philtech Educational Institution. All rights reserved.</p></div>
</footer>


<div class="auth-modal">
    <button type="button" class="close-btn-modal"><i class='bx bx-x'></i></button>

    <div class="form-box login">
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bx-lock'></i>
            </div>
            <button type="submit" name="login_btn" class="btn">Login</button>
            <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
        </form>
    </div>

    <div class="form-box register">
        <h2>Register</h2>
        <form action="" method="POST">
            <div class="input-box">
                <input type="text" name="name" placeholder="Name" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock'></i>
            </div>
            <button type="submit" name="register_btn" class="btn">Register</button>
            <p>Already have an account? <a href="#" class="login-link">Login</a></p>
        </form>
    </div>
</div>


<?php if ($flash): ?>
<div class="alert-box">
    <div class="alert <?= $flash['type'] ?>">
        <i class='bx <?= $flash['type'] === 'success' ? 'bxs-check-circle' : 'bxs-x-circle' ?>'></i>
        <span><?= htmlspecialchars($flash['msg']) ?></span>
    </div>
</div>
<?php endif; ?>

<script src="sample.js"></script>
</body>
</html>
