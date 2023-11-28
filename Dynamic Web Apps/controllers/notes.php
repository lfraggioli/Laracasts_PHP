<?php

$config = require 'config.php';
$db = new Database($config['database']);


$heading = 'Notes';

$notes = $db->query('SELECT * FROM notes WHERE users_id = 1')->fetchAll();


require 'views/notes.view.php';
