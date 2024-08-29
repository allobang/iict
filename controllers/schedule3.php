<?php
$config = require('config.php');
$db = new Database($config['database']);

// dd($facultyList);
$title = "Schedule";
$view ="views/schedule3.view.php";
require "views/layout.view.php";
