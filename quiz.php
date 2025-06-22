<?php
session_start();
if (!isset($_SESSION['user_id'])) header('Location: index.php');
include 'config.php';

$level = $_GET['level'] ?? 1;
if (!isset($_SESSION['quiz'][$level])) {
    $stmt = $pdo->prepare("SELECT * FROM questions WHERE level = ? ORDER BY RAND() LIMIT 10");
    $stmt->execute([$level]);
    $_SESSION['quiz'][$level] = $stmt->fetchAll();
    $_SESSION['quiz_index'][$level] = 0;
    $_SESSION['score'][$level] = 0;
}

$index = $_SESSION['quiz_index'][$level];
if ($index >= 10) header("Location: result.php?level=$level");

$q = $_SESSION['quiz'][$level][$index];
$op = ['add' => '+', 'sub' => '-', 'mul' => '*', 'div' => '/'][$q['qtype']];

// ✅ CEK JAWABAN
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    unset($_SESSION['feedback']);

    $user_answer = $_POST['answer'];
    eval("\$correct = {$q['operand1']} $op {$q['operand2']};");

    if (round($user_answer, 2) == round($correct, 2)) {
        $_SESSION['score'][$level]++;
        $_SESSION['feedback'] = ['type' => 'success', 'message' => 'Jawaban Benar!'];
        $_SESSION['quiz_index'][$level]++;
        header("Location: quiz.php?level=$level");
        exit;
    } else {
        $_SESSION['feedback'] = ['type' => 'danger', 'message' => 'Jawaban Salah, coba lagi!'];
        header("Location: quiz.php?level=$level");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Level <?= $level ?></title>
    <style>
        body {
            background: #f0f8ff;
            font-family: Arial;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .quiz-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            border: 2px solid #007BFF;
            width: 400px;
            text-align: center;
        }
        input[type="number"] {
            padding: 8px;
            width: 100px;
            text-align: center;
        }
        button {
            padding: 8px 16px;
            margin-top: 15px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .alert {
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="quiz-box">
        <h3>Level <?= $level ?> - Soal <?= $index + 1 ?>/10</h3>

        <!-- ✅ TAMPILKAN NOTIFIKASI baguss -->
        <?php
        if (isset($_SESSION['feedback'])) {
            $type = $_SESSION['feedback']['type'] === 'success' ? 'alert-success' : 'alert-danger';
            echo "<div class='alert $type'>{$_SESSION['feedback']['message']}</div>";
            unset($_SESSION['feedback']);
        }
        ?>

        <form method="POST">
            <p><strong><?= $q['operand1'] ?> <?= $op ?> <?= $q['operand2'] ?> = ?</strong></p>
            <input type="number" step="any" name="answer" required>
            <br>
            <button type="submit">Kirim Jawaban</button>
        </form>
    </div>
</body>
</html>