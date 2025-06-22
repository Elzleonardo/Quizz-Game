<?php
session_start();
$level = $_GET['level'];
$score = $_SESSION['score'][$level] ?? 0;
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="assets/css/style.css"></head>
<body>
<div class="container">
    <h2>Hasil Level <?php echo $level; ?></h2>
    <p>Skor Anda: <?php echo $score; ?>/10</p>
    <a href="dashboard.php">Kembali ke Dashboard</a>
</div>
</body>
</html>