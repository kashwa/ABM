<?php

    require_once 'dbconnection.php';

    $name = $_POST['name'];
    $age = $_POST['age'];

    // Insert data into table.
    if ($db->prepare("INSERT INTO abms (name, age, created_at, updated_at) VALUES (:name, :age, NOW(), NOW())")->execute([
        'name' => $name,
        'age' => $age
    ]))
        echo "Successfully Inserted!";
    else
        echo "Insertion Failed!";
