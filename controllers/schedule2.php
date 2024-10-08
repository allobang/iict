<?php
$config = require('config.php');
$db = new Database($config['database']);
if (isset($_POST["submit"])) {
    // dd($_POST);
    $query = "INSERT INTO schedules (faculty_id, subject_id, class_section_id, room_id, day_of_week, start_time, end_time)
          VALUES (:faculty_id, :subject_id, :class_section_id, :room_id, :day_of_week, :start_time, :end_time)";
    $params = [
        ':faculty_id' => $_POST['faculty'],
        ':subject_id' => $_POST['subject'],
        ':class_section_id' => $_POST['class'],
        ':room_id' => $_POST['room'],
        ':day_of_week' => ucfirst(strtolower($_POST['day'])), 
        ':start_time' => $_POST['from'],
        ':end_time' => $_POST['to']
    ];
    $db->query($query, $params);
    $_SESSION['success_message'] = 'Schedule saved successfully!';
    header('location: /schedule2');
    exit();
} else {
    // dd("wala");
}
$facultyList = $db->query('select id,last_name,first_name from faculty_member')->fetchAll();
$subjects = $db->query("SELECT * from subjects where subject_type = 'Major'")->fetchAll();
$rooms = $db->query("SELECT * from rooms")->fetchAll();
$class = $db->query("SELECT * from class")->fetchAll();
$class = formatClassSections($class);
function formatClassSections($classArray)
{
    $processedClasses = [];

    foreach ($classArray as $c) {
        $id = $c['id'];
        $level = $c['level'];
        $section = strtoupper($c['section']);
        $specialization = $c['specialization'];

        if ($specialization === "none") {
            $formatted_section = "BSIT {$level}{$section}";
        } else {
            $formatted_section = "BSIT {$level}{$section} {$specialization}";
        }

        // Append the formatted result to the processedClasses array
        $processedClasses[] = [
            "id" => $id,
            "class" => $formatted_section
        ];
    }

    return $processedClasses;
}
// dd($subjects);
$title = "Schedule";
$view = "views/schedule2.view.php";
require "views/layout.view.php";
