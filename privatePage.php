<?php
    session_start();
    if(!(isset ($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true)){
        die("ACCESS DENIED");
    }

    $name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nexora Academy | Dashboard</title>
    <link rel="stylesheet" href="privatePage.css">
</head>
<body>

<header>
    <div class="logo">Nexora <span>Academy</span></div>

    <nav>
        <a href="index.php">HOME</a>
        <a href="#">MY COURSES</a>
        <a href="#">PROFILE</a>
        <a href="logout.php">LOGOUT</a>
    </nav>
</header>

<section class="dashboard">
    <div class="content">
        <h1>Welcome Back,<br><span><?php echo htmlspecialchars($name); ?></span></h1>

        <p>
            Continue your learning journey with Nexora Academy.
            Access your courses, track your progress, and build real digital skills.
        </p>

        <div class="cards">
            <div class="card">
                <h3>My Courses</h3>
                <p>View enrolled programs and continue learning.</p>
                <a href="#">Open Courses</a>
            </div>

            <div class="card">
                <h3>Progress</h3>
                <p>Track completed lessons and achievements.</p>
                <a href="#">View Progress</a>
            </div>

            <div class="card">
                <h3>Support</h3>
                <p>Need help? Contact academy support.</p>
                <a href="#">Get Help</a>
            </div>
        </div>
    </div>

    <div class="profile-box">
        <h2>Student Panel</h2>
        <p>Logged in as</p>
        <h3><?php echo htmlspecialchars($name); ?></h3>
    </div>
</section>

</body>
</html>