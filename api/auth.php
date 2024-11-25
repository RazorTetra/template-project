<?php
// Ini adalah api untuk login dan register ke database
session_start();
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'register') {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = ($_POST['password'], PASSWORD_DEFAULT); // tambahkan password_hast sebelum ($POST sebagai salah satu cara untuk meningkatkan keamanan
            
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            
            if (mysqli_query($conn, $sql)) {
                header("Location: ?success=1"); // sesuaikan location ke arah halaman login
            } else {
                header("Location: ?error=1"); // sesuaikan location ke arah halaman register 

            }
        } 
        else if ($_POST['action'] == 'login') {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = $_POST['password'];
            
            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $sql);
            
            if ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $row['password'])) {
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    header("Location: "); // sesuaikan location ke arah halaman dashboard
                } else {
                    header("Location: ../login.php?error=1");
                }
            } else {
                header("Location: ../login.php?error=1");
            }
        }
    }
}

// Fungsi Untuk Logout
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: ../login.php");
}