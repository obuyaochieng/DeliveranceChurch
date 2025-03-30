<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php'); ?>
    <title>Announcements - Deliverance Church Ndagani</title>
</head>
<body>
    <div class="container mt-5">
        <!-- Breadcrumb for better navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="media.php">Media</a></li>
                <li class="breadcrumb-item active" aria-current="page">Announcements</li>
            </ol>
        </nav>

        <h1>Latest Announcements</h1>
        <p>Stay updated with the latest news and important notices from Deliverance Church Ndagani.</p>
        
        <!-- Announcements List -->
        <div class="list-group">
            <?php
            // Assuming you have a database connection set as $conn
            $query = "SELECT * FROM announcements ORDER BY date_posted DESC";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">';
                    echo '<div class="d-flex w-100 justify-content-between">';
                    echo '<h5 class="mb-1">' . htmlspecialchars($row['title']) . '</h5>';
                    echo '<small>' . date("F j, Y", strtotime($row['date_posted'])) . '</small>';
                    echo '</div>';
                    echo '<p class="mb-1">' . htmlspecialchars($row['content']) . '</p>';
                    echo '</a>';
                }
            } else {
                echo '<p>No announcements to display.</p>';
            }
            ?>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
