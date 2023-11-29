<?php

require('Validator.php');
$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create note';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    $validator = new Validator();

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'Body must be between 1 and 1000 characters';
    }


    $db->query('INSERT INTO notes (body, users_id) values(:body, :users_id)', [
        'body' => $_POST['body'],
        'users_id' => 1
    ]);
}
require "views/note-create.view.php";
