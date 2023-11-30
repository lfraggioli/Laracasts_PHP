<?php

use Core\Database;
use Core\Validator; // Add this line to import the Validator class
require('Validator.php');
$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];
$heading = 'Create note';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $validator = new Validator();

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'Body must be between 1 and 1000 characters';
    }


    $db->query('INSERT INTO notes (body, users_id) values(:body, :users_id)', [
        'body' => $_POST['body'],
        'users_id' => 1
    ]);
}
view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);
