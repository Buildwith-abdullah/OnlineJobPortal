<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (($_SESSION['role'] ?? '') !== 'Employer') {
    http_response_code(403);
    exit("Access denied. This page is for employers only.");
}

require "db.php";

$employer_id = (int) $_SESSION['user_id'];

$sql = "SELECT id, title, company, location, salary
        FROM jobs
        WHERE employer_id = $employer_id
        ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

if (!$result) {
    http_response_code(500);
    exit("Unable to load your jobs. Please try again later.");
}

function escape($value) {
    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES,
        'UTF-8'
    );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Posted Jobs - CareerConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">
<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="employer_dashboard.php">
            CareerConnect
        </a>
        <a href="employer_dashboard.php" class="btn btn-light">
            Dashboard
        </a>
    </div>
</nav>

<div class="container mt-5">
    <h1 class="text-center mb-4">My Posted Jobs</h1>

    <a href="post_job.php" class="btn btn-primary mb-4">
        Post New Job
    </a>

    <?php if (mysqli_num_rows($result) === 0) { ?>
        <div class="alert alert-info text-center">
            You have not posted any jobs yet.
        </div>
    <?php } ?>

    <div class="row">
        <?php while ($job = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h3><?= escape($job['title']) ?></h3>

                        <p>
                            <strong>Company:</strong>
                            <?= escape($job['company']) ?>
                        </p>

                        <p>
                            <strong>Location:</strong>
                            <?= escape($job['location']) ?>
                        </p>

                        <p>
                            <strong>Salary:</strong>
                            <?= escape($job['salary']) ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>
