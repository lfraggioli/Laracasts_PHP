<?php

use Core\Database; // Add this import statement

$config = require base_path('config.php');


$db = new Database($config['database']);


$heading = 'My Notes';

$notes = $db->query('SELECT * from notes where users_id = 1')->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
