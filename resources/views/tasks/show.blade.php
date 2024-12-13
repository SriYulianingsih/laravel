<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tugas</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Tugas</h1>
        <p><strong>ID:</strong> {{ $task->id }}</p>
        <p><strong>Tugas:</strong> {{ $task->name }}</p>
        <a href="{{ route('tasks.index') }}">Kembali</a>
    </div>
</body>
</html>