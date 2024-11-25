<?php
session_start();
if (isset($_SESSION[''])) { // tambahkan userId didalam session untuk mengecek userId
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <?php if (isset($_GET['error'])): ?>
                            <div class="alert alert-danger">Registration failed</div>
                        <?php endif; ?>
                        <form action="api/auth.php" method="POST">
                            <input type="hidden" name="action" value="register">
                            <div class="mb-3">
                                <label>Username:</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <!-- buat input untuk password yang sama persisi dengan username, hanya pada name ganti dengan password -->
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                        <p class="mt-3">Already have an account? <a href="login.php">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>