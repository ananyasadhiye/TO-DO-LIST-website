$tasks_file = 'tasks.txt';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = htmlspecialchars($_POST['task']) . "\n";
    file_put_contents($tasks_file, $task, FILE_APPEND);
}

if (file_exists($tasks_file)) {
    $tasks = file($tasks_file, FILE_IGNORE_NEW_LINES);
    foreach ($tasks as $task) {
        echo "<div class='task'>" . htmlspecialchars($task) . "</div>";
    }
}
