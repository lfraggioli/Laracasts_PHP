<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$heading = 'Note';
$currentUserID = 1;

// $note = $db->query('SELECT * from notes where id = :id', ['id' => $_GET['id']])->fetch();
$note = $db->query(
    'SELECT * from notes where id = :id',
    [
        'id' => $_GET['id']

    ]
)->findOrFail();

authorize($note['users_id'] == $currentUserID);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
