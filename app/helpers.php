<?php
function greet() {
    $name = htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];
    return "Hola $name $surname!";
}

function dd($xivato)
{
    var_dump($xivato);
    die();
}

//API
function connectDB($config){ //Dependency Injection
    try {
        return new PDO(
            $config['database']['databasetype'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'],
            $config['database']['user'],
            $config['database']['password']);
    }catch (\Exception $e){
        echo 'Error de connexio en la base de dades';
    }
}

function fetchAllTasks($dbh){
    $statement = $dbh->prepare('SELECT * FROM tasks');

    $statement->execute();


    return $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}
