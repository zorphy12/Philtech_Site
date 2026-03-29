<?php
session_start();


$logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
$name = $logged_in ? ($_SESSION['name'] ?? null) : null;
$alerts = $_SESSION['alerts'] ?? [];
$active_form = $_SESSION['active_form'] ?? '';


unset($_SESSION['alerts']);
unset($_SESSION['active_form']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philtech | About Us - Excellence in Education Since 1974</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="about_sample.css">
</head>
<body>
    <header>
        <a href="sample.php" class="logo">PHILTECH</a>
        <nav>
            <a href="sample.php">Home</a>
            <a href="about_sample.php" class="active">About</a>
            <a href="service_sample.php">Services</a>
            <a href="contact_sample.php">Contact</a>
        </nav>
        <div class="user-auth">
            <?php if ($logged_in && !empty($name)): ?>
            <div class="profile-box">
                <div class="avatar-circle"><?= strtoupper(substr($name, 0, 1)); ?></div>
                <div class="dropdown">
                    <a href="#">My Account</a>
                    <a href="logout.php">Sign Out</a>
                </div>
            </div>
            <?php else: ?>
            <button type="button" class="login-btn-modal">Login</button>
            <?php endif; ?>
        </div>
    </header>

    <section class="about-hero">
        <div class="about-hero-content">
            <h1>About Philtech</h1>
            <p>For over 50 years, Philtech has been a leading institution in higher education, committed to academic excellence, innovation, and student success.</p>
        </div>
    </section>

    <div class="about-container">
        <div class="about-section">
            <div class="mission-vision-grid">
                <div class="mv-card">
                    <div class="mv-icon">🎯</div>
                    <h3>Our Mission</h3>
                    <p>To provide accessible, high-quality education that empowers students to achieve their full potential and make meaningful contributions to society. We are committed to fostering critical thinking, creativity, and lifelong learning in a supportive and inclusive environment.</p>
                </div>
                <div class="mv-card">
                    <div class="mv-icon">👁️</div>
                    <h3>Our Vision</h3>
                    <p>To be a globally recognized leader in education, known for academic excellence, innovative research, and transformative learning experiences. We envision a future where every student has the opportunity to excel and contribute to building a better world.</p>
                </div>
            </div>
        </div>

        <div class="about-section">
            <h2 class="section-title center">Our Core Values</h2>
            <p class="section-subtitle">These fundamental principles guide everything we do at Philtech</p>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">⭐</div>
                    <h4>Excellence</h4>
                    <p>We strive for excellence in everything we do, from teaching to research and community engagement.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">🤝</div>
                    <h4>Integrity</h4>
                    <p>We uphold the highest standards of honesty, ethics, and transparency in all our endeavors.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">🌍</div>
                    <h4>Community</h4>
                    <p>We foster a supportive, diverse, and inclusive learning environment where everyone belongs.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">💡</div>
                    <h4>Innovation</h4>
                    <p>We encourage creative thinking, embrace new ideas, and continuously improve our approaches.</p>
                </div>
            </div>
        </div>

        <div class="about-section">
            <h2 class="section-title">Our History</h2>
            <div class="history-content">
                <span class="history-year">Est. 1974</span>
                <div class="about-text">
                    <p>Founded in 1974, Philtech began as a small technical institute with a vision to provide quality education to students from all backgrounds. Over the decades, we have grown into a comprehensive educational institution serving thousands of students.</p>
                    <p>Our journey has been marked by continuous innovation, expansion of academic programs, and a steadfast commitment to student success. Today, we offer over 50 programs across multiple disciplines and maintain partnerships with leading institutions worldwide.</p>
                    <p>As we look to the future, we remain dedicated to our founding principles while embracing new technologies and teaching methodologies to prepare students for the challenges and opportunities of tomorrow.</p>
                </div>
                <div class="history-grid">
                    <div class="history-stat">
                        <div class="history-stat-number">1974</div>
                        <p>Year Founded</p>
                    </div>
                    <div class="history-stat">
                        <div class="history-stat-number">50+</div>
                        <p>Years of Excellence</p>
                    </div>
                    <div class="history-stat">
                        <div class="history-stat-number">10K+</div>
                        <p>Alumni Worldwide</p>
                    </div>
                    <div class="history-stat">
                        <div class="history-stat-number">50+</div>
                        <p>Academic Programs</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accreditation-section">
            <h3>🎓 Accreditation & Recognition</h3>
            <p>Philtech is accredited by the National Education Accreditation Board and recognized by international educational organizations. Our programs meet the highest standards of academic quality and are designed to prepare students for global careers.</p>
            <div class="accred-badges">
                <span class="badge-item">✓ National Education Accreditation Board</span>
                <span class="badge-item">✓ International Quality Assurance</span>
                <span class="badge-item">✓ Global Education Partner</span>
                <span class="badge-item">✓ Top Tier Institution Rating</span>
            </div>
        </div>

        <div class="about-section" style="text-align: center; margin-top: 50px;">
            <h2 class="section-title center">Ready to Join Philtech?</h2>
            <p style="margin: 20px auto; max-width: 600px; color: #555;">Take the first step toward an exceptional education journey. We're here to answer your questions.</p>
            <div class="cta-buttons">
                <a href="#" class="btn-primary">Send an Inquiry <i class='bx bx-envelope'></i></a>
                <a href="#" class="btn-outline-light">Apply Now <i class='bx bxs-paper-plane'></i></a>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-col">
                <h4>Philtech</h4>
                <p>Empowering students with quality education and innovative learning experiences. Building tomorrow's leaders through excellence in education.</p>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <a href="sample.php">Home</a>
                <a href="about_sample.php">About Us</a>
                <a href="#">Enrollment</a>
                <a href="#">Inquiry</a>
                <a href="#">Contact</a>
            </div>
            <div class="footer-col">
                <h4>Contact Info</h4>
                <p><i class='bx bx-map'></i> 123 Education Street, University District, City 12345</p>
                <p><i class='bx bx-phone'></i> +1 (555) 123-4567</p>
                <p><i class='bx bx-envelope'></i> info@philtech.edu</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2026 Philtech Educational Institution. All rights reserved.</p>
        </div>
    </footer>

    <?php if (!empty($alerts)): ?>
    <div class="alert-box">
        <?php foreach ($alerts as $alert): ?>
        <div class="alert <?= $alert['type']; ?>">
            <i class='bx <?= $alert['type'] === 'success' ? 'bxs-check-circle' : 'bxs-x-circle' ?>'></i>
            <span><?= htmlspecialchars($alert['message']); ?></span>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <div class="auth-modal<?= $active_form === 'register' ? ' show slide' : ($active_form === 'login' ? ' show' : ''); ?>">
        <button type="button" class="close-btn-modal"><i class='bx bx-x'></i></button>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="auth_process.php" method="POST">
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
            <form action="auth_process.php" method="POST">
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

   <script src="sample.js"></script>
</body>
</html>