<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php'); ?>
    <title>About Us - Deliverance Church Ndagani</title>
</head>
<body>
    <div class="container mt-5">
        <!-- Breadcrumb for better navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>

        <!-- History Section -->
        <section id="history">
            <h2 class="section-heading">Our History</h2>
            <p>Founded in 1984, Deliverance Church Ndagani has grown from a small group of faithful believers to a thriving community that impacts our city and beyond. Our history is built on the pillars of prayer, community service, and evangelism.</p>
            <a href="history-details.php" class="btn btn-primary">Read More</a>
        </section>

        <!-- Mission Section -->
        <section id="mission">
            <h2 class="section-heading">Our Mission</h2>
            <p>The mission of Deliverance Church Ndagani is to make disciples of Jesus Christ for the transformation of the world. We strive to be a welcoming community that embodies our faith in every aspect of our lives.</p>
            <a href="mission-details.php" class="btn btn-primary">Read More</a>
        </section>

        <!-- Vision Section -->
        <section id="vision">
            <h2 class="section-heading">Our Vision</h2>
            <p>Our vision is to be a church that loves God, grows in faith, and shares the love of Jesus with the world.</p>
            <a href="vision-details.php" class="btn btn-primary">Read More</a>
        </section>

        <!-- Leadership Team Section -->
        <section id="leadership">
            <h2 class="section-heading">Our Leaders</h2>
            <div class="card-deck">
                <!-- Placeholder for leadership cards -->
                <div class="card">
                    <img src="assets/img/leaders/pastor_john_doe.jpg" class="card-img-top" alt="Pastor John Doe">
                    <div class="card-body">
                        <h5 class="card-title">Pastor John Doe</h5>
                        <p class="card-text">Senior Pastor with a passion for community outreach and teaching.</p>
                        <a href="leader-details.php?leader_id=1" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <!-- Additional cards for other leaders -->
            </div>
        </section>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
