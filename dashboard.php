<?php
session_start();
if (!isset($_SESSION['user_id'])) header('Location: index.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Dashboard</title>
</head>
<body>
<div class="container">
    <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
    <h3>Level Quiz</h3>
    <ul>
    <?php for ($i = 1; $i <= 20; $i++): ?>
        <li><a href="quiz.php?level=<?php echo $i; ?>">Level <?php echo $i; ?></a></li>
    <?php endfor; ?>
    </ul>
    <a href="profile.php">Profil</a> | <a href="logout.php">Logout</a>
</div>
</body>
</html>