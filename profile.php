<?php
session_start();
if (!isset($_SESSION['user_id'])) header('Location: index.php');
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="assets/css/style.css"></head>
<body>
<div class="container">
    <h2>Profil Pengguna</h2>
    <p>Username: <?php echo $_SESSION['username']; ?></p>
    <a href="dashboard.php">Kembali</a>
</div>
</body>
</html>