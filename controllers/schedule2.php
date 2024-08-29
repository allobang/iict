<?php
if(isset($_POST["submit"])){
    dd($_POST);
}else{
    // dd("wala");
}
$config = require('config.php');
$db = new Database($config['database']);
$facultyList = $db->query('select id,last_name,first_name from faculty_member')->fetchAll();
$subjects = $db->query("SELECT * from subjects")->fetchAll();
// dd($subjects);
$title = "Schedule";
$view ="views/schedule2.view.php";
require "views/layout.view.php";
