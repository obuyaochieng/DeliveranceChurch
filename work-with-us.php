<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php'); ?>
    <title>Work With Us - Deliverance Church Ndagani</title>
</head>
<body>
    <div class="container mt-5">
        <!-- Breadcrumb for better navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Work With Us</li>
            </ol>
        </nav>

        <h1 class="mt-4">Work With Us</h1>
        <p>Explore the various ways you can contribute to our mission. Whether through volunteering, pursuing a career, participating in tenders, or making a donation, your involvement is invaluable.</p>

        <!-- Volunteer Section -->
        <section id="volunteer">
            <h2 class="section-heading">Volunteer</h2>
            <p>Join our community as a volunteer and make a significant impact.</p>
            <form action="submit-volunteer.php" method="POST">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="activity">Volunteer Activity:</label>
                    <select class="form-control" id="activity" name="activity">
                        <option value="teaching">Teaching</option>
                        <option value="outreach">Community Outreach</option>
                        <option value="administration">Administration</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>

        <!-- Careers Section -->
        <section id="careers">
            <h2 class="section-heading">Careers</h2>
            <p>Looking for a fulfilling career? Explore our job openings and find where you can contribute your skills.</p>
            <a href="careers.php" class="btn btn-primary">View Careers</a>
        </section>

        <!-- Tenders Section -->
        <section id="tenders">
            <h2 class="section-heading">Tenders</h2>
            <p>Participate in our open tenders and contribute to our projects.</p>
            <a href="tenders.php" class="btn btn-primary">View Tenders</a>
        </section>

        <!-- Donations Section -->
        <section id="donate">
            <h2 class="section-heading">Donate</h2>
            <p>Your donations help us continue our mission and expand our reach. Every contribution makes a difference.</p>
            <a href="donate.php" class="btn btn-primary">Make a Donation</a>
        </section>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
