<?php
$config = require('config.php');
$db = new Database($config['database']);

$facultyList = $db->query('select * from faculty_member')->fetchAll();
// dd($facultyList);
$title = "Faculty List";
$view ="views/faculty.view.php";
require "views/layout.view.php";
