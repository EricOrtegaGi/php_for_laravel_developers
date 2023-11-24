<?php

namespace Framework\Database;

use PDO;
use App\Models\Task;

class Database {

    static public $pdo;

    public function __construct($pdo)
    {
        static::$pdo = $pdo;
    }

    public static function selectAll($table) {
        $query = static::$pdo->prepare("SELECT * from $table;");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Task::class);
    }
}