<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                        <a href="api/auth.php?action=logout" class="btn btn-danger btn-sm">Logout</a>
                    </div>
                    <div class="card-body">
                        <!-- Tambahkan informasi yang anda inginkan disini  -->
                        <p>Join us to learn more about the Software Development Life Cycle and discover your path in software development!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>