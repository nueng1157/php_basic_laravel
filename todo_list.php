<?php

session_start();

class TodoList {
    private $tasks = [];

    public function __construct() {
        $this->tasks = $_SESSION['tasks'] ?? [];
    }

    public function addTask($task) {
        $this->tasks[] = $task;
        $this->saveTasks();
    }

    public function removeTask($index) {
        if (isset($this->tasks[$index])) {
            unset($this->tasks[$index]);
            $this->tasks = array_values($this->tasks);
            $this->saveTasks();
        }
    }

    public function getTasks() {
        return $this->tasks;
    }

    private function saveTasks() {
        $_SESSION['tasks'] = $this->tasks;
    }
}

$todo = new TodoList();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add']) && !empty($_POST['task'])) {
        $todo->addTask($_POST['task']);
    } elseif (isset($_POST['delete'])) {
        $todo->removeTask($_POST['index']);
    }

    header('Location: todo_list.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .task-item {
            display: flex;
            align-items: center;
            margin: 5px 0;
        }
        .task-item form {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <h1>Todo List</h1>

    <form method="post">
        <input type="text" name="task" placeholder="เพิ่มรายการใหม่" />
        <button type="submit" name="add">เพิ่ม</button>
    </form>

    <ul>
        <?php foreach ($todo->getTasks() as $index => $task): ?>
            <li class="task-item">
                <div><?php echo $task; ?></div>
                <form method="post">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <button type="submit" name="delete">ลบ</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>