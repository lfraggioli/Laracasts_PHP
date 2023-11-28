<?php

$config = require 'config.php';
$db = new Database($config['database']);


$heading = 'My Notes';

$notes = $db->query('SELECT * from notes where users_id = 1')->fetchAll();

require 'views/notes.view.php';
