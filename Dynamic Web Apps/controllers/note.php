<?php

$config = require('config.php');
$db = new Database($config['database']);
$heading = 'Note';
$currentUserID = 1;

// $note = $db->query('SELECT * from notes where id = :id', ['id' => $_GET['id']])->fetch();
$note = $db->query(
    'SELECT * from notes where id = :id',
    [
        'id' => $_GET['id']

    ]
)->fetch();

if (!$note) {
    abort(); // This function is in functions.php
}


if ($note['users_id'] !== $currentUserID) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";
