<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $page_title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $page_description; ?>">
    <link rel="shortcut icon" href="assets/img/logos/favicon.ico" type="image/x-icon">

    <!-- Link to Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/custom-style.css"> <!-- Custom stylesheet -->



      <!-- Trial links ..... -->
    
        <!-- trials-->
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78542650-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-78542650-1');
    </script>
</head>
<body>
    <div class="preloader">
        <div class="loader">
            <div class="loader-figure"></div>
            <p class="loader-label">Deliverance Church Ndagani</p>
        </div>
    </div>
    <div class="main-wrapper">
        <div class="topbar">
            <div class="top-header po-relative">
                <div class="navbar-wrapper">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg main-nav">
                            <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#main-nav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="cf cf-menu"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="main-nav">
                                <ul class="navbar-nav">
                                    <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                                        <a href="index.php" class="nav-link">Home</a>
                                    </li>
                                    <li class="nav-item dropdown <?php echo (strpos($current_page, 'about-us') === 0) ? 'active' : ''; ?>">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            About Us
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="About Us.php">About Us</a></li>
                                            <li><a class="dropdown-item" href="history-details.php">Our History</a></li>
                                            <li><a class="dropdown-item" href="vision-details.php">Our Vision</a></li>
                                            <li><a class="dropdown-item" href="mission-details.php">Our Mission</a></li>
                                            <li><a class="dropdown-item" href="leader-details.php">Our Leaders</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown <?php echo (strpos($current_page, 'work-with-us') === 0) ? 'active' : ''; ?>">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Work with Us
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="work-with-us.php">Work with Us</a></li>
                                            <li><a class="dropdown-item" href="careers.php">Careers</a></li>
                                            <li><a class="dropdown-item" href="volunteer.php">Volunteer</a></li>
                                            <li><a class="dropdown-item" href="tenders.php">Tenders</a></li>
                                            <li><a class="dropdown-item" href="donate.php">Donate</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown <?php echo (strpos($current_page, 'media') === 0) ? 'active' : ''; ?>">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Media
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="events.php">Events</a></li>
                                            <li><a class="dropdown-item" href="announcements.php">Announcements</a></li>
                                            <li><a class="dropdown-item" href="sermons.php">Sermons</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown <?php echo (strpos($current_page, 'ministries') === 0) ? 'active' : ''; ?>">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Ministries
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="ministries.php">All Ministries</a></li> <!-- Main ministries page link -->
                                            <li><a class="dropdown-item" href="men.php">Men's Ministry</a></li>
                                            <li><a class="dropdown-item" href="women.php">Women's Ministry</a></li>
                                            <li><a class="dropdown-item" href="children.php">Children's Ministry</a></li>
                                            <li><a class="dropdown-item" href="youth.php">Youth Ministry</a></li>
                                            <li><a class="dropdown-item" href="hope.php">Hope Ministry</a></li> <!-- Added Hope Ministry -->
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
