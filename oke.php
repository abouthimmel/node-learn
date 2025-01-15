<?php
// Inisialisasi sesi untuk menyimpan data daftar tugas
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Menambahkan tugas
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['task'])) {
    $task = htmlspecialchars($_POST['task']); // Menghindari XSS
    $_SESSION['tasks'][] = $task;
}

// Menghapus tugas berdasarkan indeks
if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    if (isset($_SESSION['tasks'][$index])) {
        array_splice($_SESSION['tasks'], $index, 1);
    }
}

// Reset semua tugas
if (isset($_GET['reset'])) {
    $_SESSION['tasks'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To-Do List PHP</title>
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form method="POST" action="todo.php">
            <input type="text" name="task" placeholder="Tambahkan tugas baru..." required>
            <button type="submit">Tambah</button>
        </form>

        <ul class="task-list">
            <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
                <li>
                    <?= $task ?>
                    <a href="todo.php?delete=<?= $index ?>" class="delete">Hapus</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <a href="todo.php?reset=true" class="reset">Reset Semua</a>
    </div>
</body>
</html>
