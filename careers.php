<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php'); ?>
    <title>Careers - Deliverance Church Ndagani</title>
</head>
<body>
    <div class="container mt-5">
        <!-- Breadcrumb for better navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="work-with-us.php">Work with Us</a></li>
                <li class="breadcrumb-item active" aria-current="page">Careers</li>
            </ol>
        </nav>

        <h1>Careers at Deliverance Church Ndagani</h1>
        <p>Explore the current job opportunities at our church. Join us in our mission to spread faith and compassion in the community.</p>

        <!-- Careers Listings -->
        <?php
        // Assuming you have a database connection set as $conn
        $query = "SELECT id, title, description, post_date FROM jobs WHERE expiration_date > CURDATE()";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="job-listing">';
                echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
                echo '<p>' . nl2br(htmlspecialchars($row['description'])) . '</p>';
                echo '<p>Posted on: ' . date("F j, Y", strtotime($row['post_date'])) . '</p>';
                echo '<a href="job-application.php?job_id=' . $row['id'] . '" class="btn btn-primary">Apply Now</a>';
                echo '</div>';
            }
        } else {
            echo '<p>No current job openings available.</p>';
        }
        ?>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
