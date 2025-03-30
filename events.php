<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php'); ?>
    <title>Events - Deliverance Church Ndagani</title>
</head>
<body>
    <div class="container mt-5">
        <!-- Breadcrumb for better navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Events</li>
            </ol>
        </nav>

        <h1>Church Events</h1>
        <p>Join us in our upcoming and past events to fellowship and grow together in faith.</p>
        
        <!-- Upcoming Events Section -->
        <h2>Upcoming Events</h2>
        <div class="row">
            <?php
            // Assuming you have a database connection set as $conn
            $today = date('Y-m-d');
            $query = "SELECT * FROM events WHERE event_date >= '$today' ORDER BY event_date ASC";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card">';
                    echo '<img src="' . htmlspecialchars($row['poster']) . '" class="card-img-top" alt="Event Poster">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
                    echo '<p class="card-text"><strong>Date:</strong> ' . date("F j, Y", strtotime($row['event_date'])) . '<br>';
                    echo '<strong>Time:</strong> ' . htmlspecialchars($row['event_time']) . '<br>';
                    echo '<strong>Venue:</strong> ' . htmlspecialchars($row['venue']) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No upcoming events at this time.</p>';
            }
            ?>
        </div>

        <!-- Past Events Section -->
        <h2>Past Events</h2>
        <div class="row">
            <?php
            $query = "SELECT * FROM events WHERE event_date < '$today' ORDER BY event_date DESC";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card">';
                    echo '<img src="' . htmlspecialchars($row['poster']) . '" class="card-img-top" alt="Event Poster">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
                    echo '<p class="card-text"><strong>Date:</strong> ' . date("F j, Y", strtotime($row['event_date'])) . '<br>';
                    echo '<strong>Time:</strong> ' . htmlspecialchars($row['event_time']) . '<br>';
                    echo '<strong>Venue:</strong> ' . htmlspecialchars($row['venue']) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No past events available for display.</p>';
            }
            ?>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
