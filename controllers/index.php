<?php
// dd($uri);
$config = require('config.php');
$db = new Database($config['database']);

$facultyList = $db->query('select * from faculty_member')->fetchAll();
// dd($facultyList);
$title = "Dashboard";
$view ="views/index.view.php";
require "views/layout.view.php";
