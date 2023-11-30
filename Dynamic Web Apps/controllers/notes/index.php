<?php

use Core\App;
use Core\Database; // Add this import statement

$db = App::resolve(Database::class); // Replace this line



$heading = 'My Notes';

$notes = $db->query('SELECT * from notes where users_id = 1')->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
