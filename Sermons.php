<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php'); ?>
    <title>Sermons - Deliverance Church Ndagani</title>
</head>
<body>
    <div class="container mt-5">
        <!-- Breadcrumb for better navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="media.php">Media</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sermons</li>
            </ol>
        </nav>

        <h1>Sermons</h1>
        <p>Watch and listen to the powerful sermons shared by Deliverance Church Ndagani on our YouTube channel.</p>
        
        <!-- Sermons List -->
        <div class="row">
            <?php
            // YouTube API Key and Channel ID (replace with actual values)
            $apiKey = 'YOUR_YOUTUBE_API_KEY';
            $channelId = 'YOUR_YOUTUBE_CHANNEL_ID';

            // API endpoint to get the videos
            $url = "https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&order=date&part=snippet&type=video&maxResults=10";

            // Fetching the data from the API
            $response = file_get_contents($url);
            $data = json_decode($response);

            // Check if there are videos
            if (!empty($data->items)) {
                foreach ($data->items as $item) {
                    $videoId = $item->id->videoId;
                    $title = $item->snippet->title;
                    $description = $item->snippet->description;
                    $thumbnail = $item->snippet->thumbnails->medium->url;
                    $videoUrl = "https://www.youtube.com/watch?v=$videoId";

                    // Display each sermon
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card">';
                    echo '<img src="' . htmlspecialchars($thumbnail) . '" class="card-img-top" alt="Sermon Thumbnail">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($title) . '</h5>';
                    echo '<p class="card-text">' . htmlspecialchars($description) . '</p>';
                    echo '<a href="' . $videoUrl . '" target="_blank" class="btn btn-primary">Watch Sermon</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No sermons available at this time.</p>';
            }
            ?>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
