<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
            background-color: beige;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="/tasks.html">Tasques</a></li>
        <li><a href="/users.html">Users</a></li>
        <li><a href="/contact.html">Contact</a></li>
        <li><a href="/about.html">About</a></li>
        <li><a href="/index.php">Home</a></li>
    </ul>
</nav>
<header>

    <h1><?=$greeting;?></h1>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Description</th>
            <th>Completed</th>
        </tr>

        <?php foreach ($tasks as $task):?>
        <tr>
            <td><?=$task->id;?></td>
            <td><?=$task->title;?></td>
            <td><?=$task->description;?></td>
            <td><?=$task->completed;?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</header>

</body>
</html>