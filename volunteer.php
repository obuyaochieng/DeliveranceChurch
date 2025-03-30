<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php'); ?>
    <title>Volunteer - Deliverance Church Ndagani</title>
</head>
<body>
    <div class="container mt-5">
        <!-- Breadcrumb for better navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="work-with-us.php">Work with Us</a></li>
                <li class="breadcrumb-item active" aria-current="page">Volunteer</li>
            </ol>
        </nav>

        <h1>Volunteer with Us</h1>
        <p>Thank you for your interest in volunteering with Deliverance Church Ndagani. Volunteering is a great way to give back to the community and help us spread our mission of faith and service. Please fill out the form below to tell us a little about yourself and your interests in volunteering.</p>
        
        <!-- Volunteer Form -->
        <form action="submit_volunteer.php" method="post">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="interests">Area of Interest</label>
                <select class="form-control" id="interests" name="interests">
                    <option>Children's Ministry</option>
                    <option>Community Outreach</option>
                    <option>Event Planning</option>
                    <option>Administrative Support</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="comments">Additional Comments</label>
                <textarea class="form-control" id="comments" name="comments"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>
