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
)->findOrFail();

authorize($note['users_id'] == $currentUserID);

require "views/note.view.php";
