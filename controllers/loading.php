<?php
$config = require('config.php');
$db = new Database($config['database']);
if (isset($_POST["submit"])) {
    // dd($_POST);
    $query = "INSERT INTO loading (faculty_id, subject_id, class_id, school_year, semester)
          VALUES (:faculty_id, :subject_id, :class_id, :school_year, :semester)";

    $params = [
        ':faculty_id' => $_POST['faculty'],
        ':subject_id' => $_POST['subject'],
        ':class_id' => $_POST['class'],
        ':school_year' => $_POST['school_year'],
        ':semester' => $_POST['semester']
    ];

    $db->query($query, $params);
    $_SESSION['success_message'] = 'Loading saved successfully!';
    header('location: /loading');
    exit();
} else {
    // dd("wala");
}

$facultyList = $db->query('select * from faculty_member')->fetchAll();
$subjects = $db->query("SELECT * from subjects where subject_type = 'Major'")->fetchAll();
$class = $db->query("SELECT * from class")->fetchAll();
$class = formatClassSections($class);
$loading = $db->query("
    SELECT 
        s.course_code, 
        s.title AS course_description, 
        s.units, 
        s.lecture_hours, 
        s.lab_hours,
        c.level, 
        c.section,
        f.first_name, 
        f.middle_name, 
        f.last_name
    FROM 
        loading l
    JOIN 
        subjects s ON l.subject_id = s.id
    JOIN 
        class c ON l.class_id = c.id
    JOIN 
        faculty_member f ON l.faculty_id = f.id
")->fetchAll();

// dd($loading);
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
// dd($facultyList);
$title = "Loading";
$view = "views/loading.view.php";
require "views/layout.view.php";
