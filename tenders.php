<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php'); ?>
    <title>Tenders - Deliverance Church Ndagani</title>
</head>
<body>
    <div class="container mt-5">
        <!-- Breadcrumb for better navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="work-with-us.php">Work with Us</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tenders</li>
            </ol>
        </nav>

        <h1>Open Tenders at Deliverance Church Ndagani</h1>
        <p>Explore the opportunities to contribute to our projects through your services and products. Below are the current open tenders at Deliverance Church Ndagani.</p>
        
        <!-- Tenders Listings -->
        <div class="tender-listings">
            <?php
            // Assuming you have a database connection set as $conn
            $query = "SELECT id, title, description, closing_date FROM tenders WHERE closing_date >= CURDATE() ORDER BY closing_date ASC";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card mb-3">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
                    echo '<p class="card-text">' . htmlspecialchars($row['description']) . '</p>';
                    echo '<p class="card-text"><small class="text-muted">Closing date: ' . date("F j, Y", strtotime($row['closing_date'])) . '</small></p>';
                    echo '<a href="tender-details.php?tender_id=' . $row['id'] . '" class="btn btn-primary">View Details</a>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No tenders are currently open for application.</p>';
            }
            ?>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
